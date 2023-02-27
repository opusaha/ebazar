@extends('admin.layout.master')
@section('content')
    @push('adminStyles')
    @php $settings = \App\Models\WebsiteSettings::first(); @endphp
    <title>{{$settings->name}} :: Admin New Sponsor</title>
    @endpush
    <div class="dashboard__main pl0-md">
        <div class="dashboard__content bgc-gmart-gray">
            <div class="row pb50">
                <div class="col-lg-12">
                    <div class="dashboard_title_area">
                        <h2>sponsor</h2>
                        <p class="para">Add new sponsor.</p>
                    </div>
                </div>
            </div>
            <form class="row" action="{{ route('admin.sponsor.store') }}" method="POST" enctype="multipart/form-data">@csrf
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Sponsor Name:</label>
                    <input type="text" name="name" class="form-control" required>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> sponsor Image:</label>
                    <input type="file" name="logo" class="form-control">
                    @error('logo')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-new btn-lg btn-thm">Submit</button>
            </form>
        </div>
        @include('admin.layout.footer')
    </div>
@endsection
