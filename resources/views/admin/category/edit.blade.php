@extends('admin.layout.master')
@section('content')
    @push('adminStyles')
    @php $settings = \App\Models\WebsiteSettings::first(); @endphp
    <title>{{$settings->name}} :: Admin Edit Category</title>
    @endpush
    <div class="dashboard__main pl0-md">
        <div class="dashboard__content bgc-gmart-gray">
            <div class="row pb50">
                <div class="col-lg-12">
                    <div class="dashboard_title_area">
                        <h2>Category</h2>
                        <p class="para">Edit Category : ({{$category->name}}).</p>
                    </div>
                </div>
            </div>
            <form class="row" action="{{ route('admin.category.update',$category->id) }}" method="POST" enctype="multipart/form-data">@csrf
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Category Name:</label>
                    <input type="text" name="name" class="form-control" value="{{$category->name}}">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Parent Category Name:</label>
                    <select name="parent_id" class="form-control">
                        <option value="">Select Parent Category</option>
                        @foreach ($categories as $cat)
                            <option value="{{ $cat->id }}" {{ $category->parent_id == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Category Position:</label>
                    <select name="position" class="form-control">
                        <option value="1" {{ $category->position == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ $category->position == 2 ? 'selected' : '' }}>2</option>
                        <option value="3" {{ $category->position == 3 ? 'selected' : '' }}>3</option>
                        <option value="4" {{ $category->position == 4 ? 'selected' : '' }}>4</option>
                        <option value="5" {{ $category->position == 5 ? 'selected' : '' }}>5</option>
                    </select>
                </div>

                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Category Logo:</label>
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
