@extends('admin.layout.master')
@section('content')
    <div class="body d-flex py-3">
        <div class="container-xxl">
            <form action="{{ route('admin.category.update',$id) }}" method="POST">@csrf
                <div class="row align-items-center">
                    <div class="border-0 mb-4">
                        <div
                            class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                            <h3 class="fw-bold mb-0">Categories Add</h3>
                            <button type="submit"
                                class="btn btn-primary py-2 px-5 text-uppercase btn-set-task w-sm-100">Save</button>
                        </div>
                    </div>
                </div> <!-- Row end  -->

                <div class="row g-3 mb-3">
                    <div class="col-lg-4">
                        <div class="sticky-lg-top">
                            <div class="card mb-3">
                                <div
                                    class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                    <h6 class="m-0 fw-bold">Categories</h6>
                                </div>
                                <div class="card-body">
                                    <label class="form-label">Parent category Select</label>
                                    <select class="form-select" size="3" aria-label="size 3 select example"
                                        name="parent_id">
                                        @foreach ($categories as $cat)
                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('parent_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header py-3 bg-transparent border-bottom-0">
                                    <h6 class="m-0 fw-bold">Categories Image Upload</h6>
                                    <small>With event and default file try to remove the image</small>
                                </div>
                                <div class="card-body">
                                    <input type="file" name="logo">
                                    @error('logo')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card mb-3">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">Basic information</h6>
                            </div>
                            <div class="card-body">
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-12">
                                        <label class="form-label">Category Name</label>
                                        <input type="text" class="form-control" name="name" value="{{$category->name}}">
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
