@extends('admin.layout.master')
@section('content')
    @push('adminStyles')
    @php $settings = \App\Models\WebsiteSettings::first(); @endphp
    <title>{{$settings->name}} :: Admin New Web-Settings</title>
    @endpush
    <div class="dashboard__main pl0-md">
        <div class="dashboard__content bgc-gmart-gray">
            <div class="row pb50">
                <div class="col-lg-12">
                    <div class="dashboard_title_area">
                        <h2>Website Settings</h2>
                        <p class="para">Add new Website Settings.</p>
                    </div>
                </div>
            </div>
            <form class="row" action="{{ route('admin.webSettings.store') }}" method="POST" enctype="multipart/form-data">@csrf
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Name:</label>
                    <input type="text" name="name" class="form-control" >
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Logo:</label>
                    <input type="file" name="logo" class="form-control">
                    @error('logo')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Phone:</label>
                    <input type="text" name="phone" class="form-control" >
                    @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Email:</label>
                    <input type="email" name="email" class="form-control" >
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Facebook:</label>
                    <input type="text" name="facebook" class="form-control" >
                    @error('facebook')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Twitter:</label>
                    <input type="text" name="twitter" class="form-control" >
                    @error('twitter')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Instagram:</label>
                    <input type="text" name="instagram" class="form-control" >
                    @error('instagram')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> LinkedIn:</label>
                    <input type="text" name="linkedIn" class="form-control" >
                    @error('linkedIn')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> App One:</label>
                    <input type="text" name="app_one" class="form-control" >
                    @error('app_one')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> App Two:</label>
                    <input type="text" name="app_two" class="form-control" >
                    @error('app_two')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-new btn-lg btn-thm">Submit</button>
            </form>
        </div>
        @include('admin.layout.footer')
    </div>
@endsection
