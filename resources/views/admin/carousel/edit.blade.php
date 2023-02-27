@extends('admin.layout.master')
@section('content')
    @push('adminStyles')
    @php $settings = \App\Models\WebsiteSettings::first(); @endphp
    <title>{{$settings->name}} :: Admin Edit Crousel</title>
    @endpush
    <div class="dashboard__main pl0-md">
        <div class="dashboard__content bgc-gmart-gray">
            <div class="row pb50">
                <div class="col-lg-12">
                    <div class="dashboard_title_area">
                        <h2>Website Settings</h2>
                        <p class="para">Website Settings.</p>
                    </div>
                </div>
            </div>
            <form class="row" action="{{ route('admin.carousel.update', $carousel->id) }}" method="POST" enctype="multipart/form-data">@csrf
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Image:</label>
                    <input type="file" name="image" class="form-control">
                    @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Special Tag:</label>
                    <input type="text" name="special_tag" class="form-control" value="{{$carousel->special_tag}}">
                    @error('special_tag')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Line One:</label>
                    <input type="text" name="line_one" class="form-control" value="{{$carousel->line_one}}">
                    @error('line_one')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Line Two:</label>
                    <input type="text" name="line_two" class="form-control" value="{{$carousel->line_two}}">
                    @error('line_two')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Line Three:</label>
                    <input type="text" name="line_three" class="form-control" value="{{$carousel->line_three}}">
                    @error('line_three')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Details:</label>
                    <input type="text" name="details" class="form-control" value="{{$carousel->details}}">
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
