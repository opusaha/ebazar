@extends('vandor.layout.master')
@section('content')
    @push('vandorStyles')
        <title>Zeomart :: Seller Product</title>
    @endpush
    <div class="dashboard__main pl0-md">
        <div class="dashboard__content bgc-gmart-gray">
            <div class="row pb50">
                <div class="col-lg-12">
                    <div class="dashboard_title_area">
                        <h2>Products</h2>
                        <p class="para">Lorem ipsum dolor sit amet, consectetur.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="dashboard_product_list account_user_deails">
                        <div class="row d-block d-sm-flex justify-content-center justify-content-sm-between">
                            <div class="col-sm-6 col-lg-3">
                                <div class="dashboard_page header_search_widget mb30 mb15-520">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search product"
                                            aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn" type="button"><span
                                                    class="fa fa-search"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="dashboard_page sidebar_location_filter mb30 mb5-520">
                                    <div class="form-group">
                                        <div class="checkout_country_form actegory">
                                            <div class="dropdown bootstrap-select show-tick"><select
                                                    class="selectpicker show-tick">
                                                    <option>Select Category</option>
                                                    <option value="Computers">Computers</option>
                                                    <option value="Technologies">Technologies</option>
                                                    <option value="electronic">electronic</option>
                                                    <option value="Home&amp;Kitchen">Home &amp; Kitchen</option>
                                                    <option value="Clothing&amp;Accessories">Clothing &amp; Accessories
                                                    </option>
                                                    <option value="Babies&amp;Moms">Babies &amp; Moms</option>
                                                    <option value="Health&amp;Beauty">Health &amp; Beauty</option>
                                                </select><button type="button" tabindex="-1"
                                                    class="btn dropdown-toggle btn-light" data-bs-toggle="dropdown"
                                                    role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox"
                                                    aria-expanded="false" title="Select Category">
                                                    <div class="filter-option">
                                                        <div class="filter-option-inner">
                                                            <div class="filter-option-inner-inner">Select Category</div>
                                                        </div>
                                                    </div>
                                                </button>
                                                <div class="dropdown-menu ">
                                                    <div class="inner show" role="listbox" id="bs-select-1" tabindex="-1">
                                                        <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="dashboard_page sidebar_location_filter mb30 mb5-520">
                                    <div class="form-group">
                                        <div class="checkout_country_form">
                                            <div class="dropdown bootstrap-select show-tick"><select
                                                    class="selectpicker show-tick">
                                                    <option>Status</option>
                                                    <option value="Delivered">Delivered</option>
                                                    <option value="Cancel">Cancel</option>
                                                    <option value="InProgress">In Progress</option>
                                                </select><button type="button" tabindex="-1"
                                                    class="btn dropdown-toggle btn-light" data-bs-toggle="dropdown"
                                                    role="combobox" aria-owns="bs-select-2" aria-haspopup="listbox"
                                                    aria-expanded="false" title="Status">
                                                    <div class="filter-option">
                                                        <div class="filter-option-inner">
                                                            <div class="filter-option-inner-inner">Status</div>
                                                        </div>
                                                    </div>
                                                </button>
                                                <div class="dropdown-menu ">
                                                    <div class="inner show" role="listbox" id="bs-select-2" tabindex="-1">
                                                        <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="dashboard_page_add_listing text-center text-lg-end mb30 mb15-520 d-grid">
                                    <a href="{{route('seller.product.create')}}" class="btn btn-new btn-lg btn-thm">Add New Products</a>
                                </div>
                            </div>
                        </div>
                        <div class="order_table table-responsive">
                            <table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">SKU</th>
                                        <th scope="col">Stock</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Categories</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <th scope="row">#{{ $product->id }}</th>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->sku }}</td>
                                            <td class="status"><span
                                                    class="@if ($product->quantity == 0) style2 @else style4 @endif">
                                                    @if ($product->quantity == 0)
                                                        Out Stock
                                                    @else
                                                        {{ $product->quantity }}
                                                    @endif
                                                </span></td>
                                            <td>{{ $product->price }}</td>
                                            @php $cat = \App\Models\Category::find($product->category); @endphp
                                            <td>@if (isset($cat))
                                                {{$cat->name}}
                                            @endif</td>
                                            <td class="action"><span>{{ $product->created_at }}</span></td>
                                            <td class="editing_list align-middle">
                                                <ul>
                                                    <li class="list-inline-item mb-1">
                                                        <a href="{{route('seller.product.edit', $product->id)}}" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title=""
                                                            data-bs-original-title="Edit" aria-label="View"><span
                                                                class="flaticon-pencil"></span></a>
                                                    </li>
                                                    <li class="list-inline-item mb-1">
                                                        <a href="{{route('seller.product.delete', $product->id)}}" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title=""
                                                            data-bs-original-title="Delete" aria-label="Edit"><span
                                                                class="flaticon-delete"></span></a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="mbp_pagination mt30 text-center">
                            <ul class="page_navigation">
                                <li class="page-item {{ $products->onFirstPage() ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $products->previousPageUrl() }}" tabindex="-1" aria-disabled="{{ $products->onFirstPage() ? 'true' : 'false' }}">
                                        <span class="fas fa-angle-left"></span>
                                    </a>
                                </li>
                                @for ($i = 1; $i <= $products->lastPage(); $i++)
                                    <li class="page-item {{ $i == $currentPage ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $products->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor
                                <li class="page-item {{ $products->currentPage() == $products->lastPage() ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $products->nextPageUrl() }}">
                                        <span class="fas fa-angle-right"></span>
                                    </a>
                                </li>
                            </ul>

                            <p class="mt20 pagination_page_count text-center">{{ $products->firstItem() }} – {{ $products->lastItem() }} of {{ $products->total() }} properties found</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('vandor.layout.footer')
    </div>
@endsection
