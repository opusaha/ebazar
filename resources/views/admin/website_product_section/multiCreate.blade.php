@extends('admin.layout.master')
@section('content')
    @push('adminStyles')
        <title>Zeomart :: Admin New Website Settings </title>
    @endpush
    <div class="dashboard__main pl0-md">
        <div class="dashboard__content bgc-gmart-gray">
            <div class="row pb50">
                <div class="col-lg-12">
                    <div class="dashboard_title_area">
                        <h2>New Multiple Category Product</h2>
                        <p class="para">Add new Website Settings.</p>
                    </div>
                </div>
            </div>
            <form class="row" action="{{ route('admin.multiCatProduct.store') }}" method="POST">@csrf
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Headings:</label>
                    <input type="text" name="headings" class="form-control">
                    @error('headings')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="category_one" class="form-label"> Category One:</label>
                    <select name="category_one" id="category_one" class="form-control">
                        @foreach ($cats as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                    @error('category_one')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="category_two" class="form-label"> Category Two:</label>
                    <select name="category_two" id="category_two" class="form-control">
                        @foreach ($cats as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                    @error('category_two')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="category_three" class="form-label"> Category Three:</label>
                    <select name="category_three" id="category_three" class="form-control">
                        @foreach ($cats as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                    @error('category_three')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="category_four" class="form-label"> Category Four:</label>
                    <select name="category_four" id="category_four" class="form-control">
                        @foreach ($cats as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                    @error('category_four')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-new btn-lg btn-thm">Submit</button>
            </form>
        </div>
        @include('admin.layout.footer')
    </div>
@endsection
