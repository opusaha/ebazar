@extends('admin.layout.master')
@section('content')
    @push('adminStyles')
        <title>Zeomart :: Admin Edit Banner</title>
    @endpush
    <div class="dashboard__main pl0-md">
        <div class="dashboard__content bgc-gmart-gray">
            <div class="row pb50">
                <div class="col-lg-12">
                    <div class="dashboard_title_area">
                        <h2>Banner</h2>
                        <p class="para">Edit banner.</p>
                    </div>
                </div>
            </div>
            <form class="row" action="{{ route('admin.banner.update', $banner->id) }}" method="POST" enctype="multipart/form-data">@csrf
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Banner Name:</label>
                    <input type="text" name="name" class="form-control" value="{{$banner->name}}">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Banner Link:</label>
                    <input type="text" name="link" class="form-control" value="{{$banner->link}}">
                    @error('link')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Banner Details:</label>
                    <input type="text" name="details" class="form-control" value="{{$banner->details}}">
                    @error('details')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Banner type:</label>
                    <select name="size" class="form-control">
                        <option value="small"> Small</option>
                        <option value="Big"> Big</option>
                    </select>
                </div>

                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Banner Image:</label>
                    <input type="file" name="image" class="form-control">
                    @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-new btn-lg btn-thm">Submit</button>
            </form>
        </div>
        @include('admin.layout.footer')
    </div>
@endsection
