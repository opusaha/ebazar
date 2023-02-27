@extends('admin.layout.master')
@section('content')
    @push('adminStyles')
    @php $settings = \App\Models\WebsiteSettings::first(); @endphp
    <title>{{$settings->name}} :: Admin Edit FAQ!</title>
    @endpush
    <div class="dashboard__main pl0-md">
        <div class="dashboard__content bgc-gmart-gray">
            <div class="row pb50">
                <div class="col-lg-12">
                    <div class="dashboard_title_area">
                        <h2>New FAQ</h2>
                        <p class="para">Add new FAQ </p>
                    </div>
                </div>
            </div>
            <form class="row" action="{{ route('admin.help.update',$id) }}" method="POST">@csrf
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Question Name:</label>
                    <input type="text" name="question" class="form-control" value="{{$data->question}}">
                    @error('question')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Category Name:</label>
                    <select name="help_category_id" class="form-control">
                        @foreach ($category as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                    @error('question')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-12">
                    <label for="" class="form-label"> Answer:</label>
                    <textarea name="answer" class="form-control" rows="10">{! $data->answer !}</textarea>
                    @error('question')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-new btn-lg btn-thm">Submit</button>
            </form>
        </div>
        @include('admin.layout.footer')
    </div>
@endsection
