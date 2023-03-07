@extends('admin.layout.master')
@section('content')
    @push('adminStyles')
    @php $settings = \App\Models\WebsiteSettings::first(); @endphp
    <title>{{$settings->name}} :: Admin Reviews's</title>
    @endpush
    <div class="dashboard__main pl0-md">
        <div class="dashboard__content bgc-gmart-gray">
            <div class="row pb50">
                <div class="col-lg-12">
                    <div class="dashboard_title_area">
                        <h2>Admin Reviews's</h2>
                        <p class="para">Lorem ipsum dolor sit amet, consectetur.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="dashboard_product_list account_user_deails">
                        <div class="sponsor_table table-responsive">
                            <table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">Image One</th>
                                        <th scope="col">Image Two</th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Review</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reviews as $review)
                                    <tr>
                                        <td><img src="{{asset($review->image_one)}}" height="80"></td>
                                        <td><img src="{{asset($review->image_two)}}" height="80"></td>
                                        @php
                                            $product = \App\Models\Product::find($review->product_id);
                                        @endphp
                                        <td>@isset($product)
                                            <a href="{{ route('single.product', [str_replace(' ', '-', $product->name), $product->id]) }}"><img src="{{asset($product->image_one)}}" alt="{{$product->name}}" height="80"></a>
                                        @endisset</td>
                                        <td>{{$review->comment}}</td>
                                        <td><a href="{{route('admin.review.update',$review->id)}}" style="color: blue; text-transform:capitalize">{{$review->status}}</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.layout.footer')
    </div>
@endsection
