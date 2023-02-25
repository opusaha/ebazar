@extends('admin.layout.master')
@section('content')
    @push('adminStyles')
        <title>Zeomart :: Seller FAQ Categories</title>
    @endpush
    <div class="dashboard__main pl0-md">
        <div class="dashboard__content bgc-gmart-gray">
            <div class="row pb50">
                <div class="col-lg-12">
                    <div class="dashboard_title_area">
                        <h2>FAQ Category</h2>
                        <p class="para">Edit FAQ Category : ({{$category->name}}).</p>
                    </div>
                </div>
            </div>
            <form class="row" action="{{ route('admin.faqcat.update',$category->id) }}" method="POST" enctype="multipart/form-data">@csrf
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Category Name:</label>
                    <input type="text" name="name" class="form-control" value="{{$category->name}}">
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
