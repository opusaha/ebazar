@extends('admin.layout.master')
@section('content')
    <div class="body d-flex py-3">
        <div class="container-xxl">
            <div class="row align-items-center">
                <div class="border-0 mb-4">
                    <div
                        class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold mb-0">Categorie List</h3>
                        <a href="categories-add.html" class="btn btn-primary py-2 px-5 btn-set-task w-sm-100"><i
                                class="icofont-plus-circle me-2 fs-6"></i> Add Categories</a>
                    </div>
                </div>
            </div> <!-- Row end  -->
            <div class="row g-3 mb-3">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="myDataTable" class="table table-hover align-middle mb-0" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Categorie</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $key => $cat)
                                        <tr>
                                            <td><strong>#000{{$key +1}}</strong></td>
                                            <td>{{$cat->name}}</td>
                                            <td>{{date('F j, Y', strtotime($cat->created_at))}}</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                    <a href="{{route('admin.category.edit',$cat->id)}}" class="btn btn-outline-secondary"><i
                                                            class="icofont-edit text-success"></i></a>
                                                    <a href="{{route('admin.category.delete',$cat->id)}}" class="btn btn-outline-secondary deleterow"><i
                                                            class="icofont-ui-delete text-danger"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
