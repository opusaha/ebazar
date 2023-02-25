@extends('admin.layout.master')
@section('content')
    @push('adminStyles')
        <title>Zeomart :: Seller New Product</title>
    @endpush
    <div class="dashboard__main pl0-md">
        <div class="dashboard__content bgc-gmart-gray">
            <div class="row pb50">
                <div class="col-lg-12">
                    <div class="dashboard_title_area">
                        <h2>FAQ Category</h2>
                        <p class="para">Add new Category for FAQ section.</p>
                    </div>
                </div>
            </div>
            <form class="row" action="{{ route('admin.faqcat.store') }}" method="POST">@csrf
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Category Name:</label>
                    <input type="text" name="name" class="form-control">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-new btn-lg btn-thm">Submit</button>
            </form>
        </div>
        @include('admin.layout.footer')
    </div>
@endsection
