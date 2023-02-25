@extends('admin.layout.master')
@section('content')
    @push('adminStyles')
        <title>Zeomart :: Seller New Page</title>
    @endpush
    <div class="dashboard__main pl0-md">
        <div class="dashboard__content bgc-gmart-gray">
            <div class="row pb50">
                <div class="col-lg-12">
                    <div class="dashboard_title_area">
                        <h2>New Page</h2>
                        <p class="para">Add new Page </p>
                    </div>
                </div>
            </div>
            <form class="row" action="{{ route('admin.page.store') }}" method="POST">@csrf
                <div class="mb-3 col-md-12">
                    <label for="" class="form-label"> Title:</label>
                    <input type="text" name="title" class="form-control">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-12">
                    <label for="" class="form-label"> Details:</label>
                    <textarea name="details" class="form-control" rows="10"></textarea>
                    @error('details')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-new btn-lg btn-thm">Submit</button>
            </form>
        </div>
        @include('admin.layout.footer')
    </div>
@endsection
