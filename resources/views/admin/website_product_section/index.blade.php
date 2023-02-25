@extends('admin.layout.master')
@section('content')
    @push('adminStyles')
        <title>Zeomart :: Admin Product Section</title>
    @endpush
    <div class="dashboard__main pl0-md">
        <div class="dashboard__content bgc-gmart-gray ">
            <div class="row pb50">
                <div class="col-lg-12">
                    <div class="dashboard_title_area">
                        <h2>Single Category-Product Section:</h2>
                        <p class="para">Lorem ipsum dolor sit amet, consectetur.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="dashboard_product_list account_user_deails">
                        <div class="row d-block d-sm-flex justify-content-center justify-content-sm-between">
                            <div class="col-lg-8"></div>
                            <div class="col-lg-4">
                                <div class="dashboard_page_add_listing text-center text-lg-end mb30 mb15-520">
                                    @if (count(App\Models\SingleCategoryProductSection::get()) < 2)
                                        <button type="button" class="btn btn-gray" data-bs-toggle="modal"
                                            data-bs-target="#createModal">
                                            New Section
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="Web Settings_table table-responsive">
                            <table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">SL</th>
                                        <th scope="col">Category Name</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($singleCatProduct as $key => $list)
                                        @php
                                            $cat_one = \App\Models\Category::find($list->category);
                                        @endphp
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $cat_one->name }}</td>
                                            <td class="editing_list align-middle">
                                                <ul>
                                                    <li class="list-inline-item mb-1">
                                                        <button type="button" class="btn" data-bs-toggle="modal"
                                                            data-bs-target="#editModal{{ $list->id }}"
                                                            data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                            data-bs-original-title="Delete" aria-label="Edit"><span
                                                                class="flaticon-pencil"></span></button>
                                                    </li>
                                                    <li class="list-inline-item mb-1">
                                                        <a href="{{ route('admin.singleCatProduct.delete', $list->id) }}"
                                                            data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                            data-bs-original-title="Delete" aria-label="Edit"><span
                                                                class="flaticon-delete"></span></a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="editModal{{ $list->id }}" tabindex="-1"
                                            aria-labelledby="editModalLabel{{ $list->id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <form action="{{ route('admin.singleCatProduct.update', $list->id) }}"
                                                        method="post">@csrf
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="createModalLabel">Edit Single
                                                                Category-Product Section</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="mb-3 col-md-12">
                                                                <label for="category" class="form-label">
                                                                    Category:</label>
                                                                <select name="category" id="category" class="form-control">
                                                                    @foreach ($cats as $cat)
                                                                        <option value="{{ $cat->id }}">
                                                                            {{ $cat->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                                @error('category')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Create Modal section --}}
        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form action="{{ route('admin.singleCatProduct.store') }}" method="post">@csrf
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="createModalLabel">New Single Category-Product Section</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3 col-md-12">
                                <label for="category" class="form-label"> Category One:</label>
                                <select name="category" id="category" class="form-control">
                                    @foreach ($cats as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                                @error('category')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="dashboard__content bgc-gmart-gray mt-2">
            <div class="row pb50">
                <div class="col-lg-12">
                    <div class="dashboard_title_area">
                        <h2>Multiple Category-Product Section:</h2>
                        <p class="para">Lorem ipsum dolor sit amet, consectetur.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="dashboard_product_list account_user_deails">
                        <div class="row d-block d-sm-flex justify-content-center justify-content-sm-between">
                            <div class="col-lg-8"></div>
                            <div class="col-lg-4">
                                <div class="dashboard_page_add_listing text-center text-lg-end mb30 mb15-520">
                                    @if (count(App\Models\MultiCategoryProductSection::get()) < 2)
                                        <a href="{{ route('admin.multiCatProduct.create') }}" class="btn btn-gray">New
                                            Section</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="Web Settings_table table-responsive">
                            <table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">Headings</th>
                                        <th scope="col">Category One</th>
                                        <th scope="col">Category Two</th>
                                        <th scope="col">Category Three</th>
                                        <th scope="col">Category Four</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lists as $list)
                                        @php
                                            $cat_one = \App\Models\Category::find($list->category_one);
                                            $cat_two = \App\Models\Category::find($list->category_two);
                                            $cat_three = \App\Models\Category::find($list->category_three);
                                            $cat_four = \App\Models\Category::find($list->category_four);
                                        @endphp
                                        <tr>
                                            <td>{{ $list->headings }}</td>
                                            <td>{{ $cat_one->name }}</td>
                                            <td>{{ $cat_two->name }}</td>
                                            <td>{{ $cat_three->name }}</td>
                                            <td>{{ $cat_four->name }}</td>
                                            <td class="editing_list align-middle">
                                                <ul>
                                                    <li class="list-inline-item mb-1">
                                                        <a href="{{ route('admin.multiCatProduct.edit', $list->id) }}"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="" data-bs-original-title="Edit"
                                                            aria-label="View"><span class="flaticon-pencil"></span></a>
                                                    </li>
                                                    <li class="list-inline-item mb-1">
                                                        <a href="{{ route('admin.multiCatProduct.delete', $list->id) }}"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="" data-bs-original-title="Delete"
                                                            aria-label="Edit"><span class="flaticon-delete"></span></a>
                                                    </li>
                                                </ul>
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
        @include('admin.layout.footer')
    </div>
    @push('adminScripts')
    @endpush
@endsection
