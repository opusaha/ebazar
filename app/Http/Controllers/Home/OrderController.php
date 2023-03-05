<?php

namespace App\Http\Controllers\Home;

use App\Events\OrderProcessed;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Product;
use App\Models\Review;
use App\Models\Shipping;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function checkout()
    {
        $carts = Cart::where('user_id', Auth::id())->get();
        return view('home.checkout', compact('carts'));
    }
    public function placeOrder(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'country' => 'required',
            'address' => 'required',
            'state' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'phone' => 'required|numeric',
            'email' => 'nullable|email',
            'form_message' => 'nullable'
        ]);
        $ship = new Shipping();
        $ship->name = $validatedData['name'];
        $ship->country = $validatedData['country'];
        $ship->address = $validatedData['address'];
        $ship->state = $validatedData['state'];
        $ship->city = $validatedData['city'];
        $ship->zip = $validatedData['zip'];
        $ship->phone = $validatedData['phone'];
        $ship->email = $validatedData['email'];
        $ship->save();

        do {
            $orderNumber = \Str::random(10);

            $orderExists = Order::where('order_number', $orderNumber)->exists();
        } while ($orderExists);
        $carts = Cart::where('user_id',Auth::id())->get();
        $order = new Order();
        $order->order_number = $orderNumber;
        $order->user_id = Auth::id();
        $order->shipping_id = $ship->id;
        $order->total_price = $carts->sum('total_price');
        $order->payment_id = 0;
        $order->notes = $validatedData['form_message'];
        $order->save();

        foreach($carts as $cart){
            $product = Product::findOrFail($cart->product_id);
            $details = new Order_detail();
            $details->order_id = $order->id;
            $details->product_id = $cart->product_id;
            $details->user_id = Auth::id();
            $details->seller_id = $product->seller_id;
            $details->quantity = $cart->quantity;
            $details->price = $cart->price;
            $details->save();


            $product->quantity = $product->quantity - $cart->quantity;
            $product->save();

            $review = new Review();
            $review->user_id = Auth::id();
            $review->product_id = $cart->product_id;
            $review->order_id = $order->id;
            $review->save();

            $cart->delete();
        }
        $data = [];
        $data['order_id'] = $order->id;
        $data['invoice_id'] = $orderNumber;
        $data['total_price'] = $order->total_price;
        $data['address'] = $validatedData['address'];
        $data['city'] = $validatedData['city'];
        $data['state'] = $validatedData['state'];
        $data['zip'] = $validatedData['zip'];
        $data['country'] = $validatedData['country'];
        $data['delevery_date'] = Carbon::createFromFormat('Y-m-d H:i:s', $order->created_at)->tomorrow();
        // event(new OrderProcessed($data));
        // Mail::to(Auth::user()->email)->send(new MailOrder($data));
        return redirect()->route('home');
    }
    public function sellerOrder(){
        $orders =Order_detail::where('seller_id',Auth::guard('seller')->user()->id)->latest()->paginate(15);
        return view('vandor.order.index',['orders' => $orders, 'currentPage' => $orders->currentPage()]);
    }
    public function adminOrder(){
        $orders = Order::latest()->paginate(15);
        return view('admin.order.index',['orders' => $orders, 'currentPage' => $orders->currentPage()]);
    }
    public function review(Request $request, $order_id=null, $product_id=null)
    {
        $review = Review::where('order_id',$order_id)->where('product_id',$product_id)->first();
        $review->comment = $request->comment;
        if($request->rating == ''){
            $review->rating = 5;
        }else{
            $review->rating = $request->rating;
        }
        if ($request->image_one) {
            $review->image_one =  $this->saveFile($request, 'image_one');
        }
        if ($request->image_two) {
            $review->image_two =  $this->saveFile($request, 'image_two');
        }
        $review->status = 'reviewed';
        $review->save();
        return redirect()->back();
    }
    public function saveFile($request, $fieldName)
    {
        $file = $request->file($fieldName);
        $fileName = rand() . '.' . $file->getClientOriginalExtension();
        $dir = 'storage/';
        $imgUrl = $dir . $fileName;
        $file->move($dir, $fileName);
        return $imgUrl;
    }
}
