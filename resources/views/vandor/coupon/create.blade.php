@extends('vandor.layout.master')
@section('content')
    @push('vandorStyles')
        <title>Zeomart :: Admin New coupon</title>
    @endpush
    <div class="dashboard__main pl0-md">
        <div class="dashboard__content bgc-gmart-gray">
            <div class="row pb50">
                <div class="col-lg-12">
                    <div class="dashboard_title_area">
                        <h2>Coupon</h2>
                        <p class="para">Add new Coupon.</p>
                    </div>
                </div>
            </div>
            <form class="row" action="{{ route('seller.coupon.store') }}" method="POST">@csrf
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Coupon Code:</label>
                    <input type="text" name="code" class="form-control" required>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Coupon Discount:</label>
                    <input type="text" name="discount" class="form-control">
                    @error('discount')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Coupon Minimum Purchase:</label>
                    <input type="text" name="minimum_purchase_amount" class="form-control">
                    @error('minimum_purchase_amount')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Coupon Expiry Date:</label>
                    <input type="date" name="expiry_date" class="form-control">
                    @error('expiry_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Coupon Max Usage:</label>
                    <input type="text" name="max_uses" class="form-control">
                    @error('max_uses')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-new btn-lg btn-thm">Submit</button>
            </form>
        </div>
        @include('vandor.layout.footer')
    </div>
@endsection
