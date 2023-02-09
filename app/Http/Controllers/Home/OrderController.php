<?php

namespace App\Http\Controllers\Home;

use App\Events\OrderProcessed;
use App\Http\Controllers\Controller;
use App\Mail\Order as MailOrder;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Product;
use App\Models\Shipping;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
        $order->status = 'Orderd';
        $order->payment_id = 0;
        $order->notes = $validatedData['form_message'];
        $order->save();

        foreach($carts as $cart){
            $product = Product::findOrFail($cart->product_id);
            $details = new Order_detail();
            $details->order_id = $order->id;
            $details->product_id = $cart->product_id;
            $details->seller_id = $product->seller_id;
            $details->quantity = $cart->quantity;
            $details->price = $cart->price;
            $details->save();
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
        Mail::to(Auth::user()->email)->send(new MailOrder($data));
        return redirect()->route('home');
    }
}
