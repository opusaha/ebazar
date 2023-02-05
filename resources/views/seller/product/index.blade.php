@extends('seller.layout.master')
@section('content')
    <div class="body d-flex py-3">
        <div class="container-xxl">
            <div class="row align-items-center">
                <div class="border-0 mb-4">
                    <div
                        class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold mb-0">Products</h3>
                    </div>
                </div>
            </div> <!-- Row end  -->
            <div class="row g-3 mb-3">
                <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-3">
                    <div class="sticky-lg-top">
                        <div class="card mb-3">
                            <div class="reset-block">
                                <div class="filter-title">
                                    <h4 class="title">Filter</h4>
                                </div>
                                <div class="filter-btn">
                                    <a class="btn btn-primary" href="#">Reset</a>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="categories">
                                <div class="filter-title">
                                    <a class="title" data-bs-toggle="collapse" href="#category" role="button"
                                        aria-expanded="true">Categories</a>
                                </div>
                                <div class="collapse show" id="category">
                                    <div class="filter-search">
                                        <form action="#">
                                            <input type="text" placeholder="Search" class="form-control">
                                            <button><i class="lni lni-search-alt"></i></button>
                                        </form>
                                    </div>
                                    <div class="filter-category">
                                        <ul class="category-list">
                                            @foreach ($categories as $cat)
                                                <li><a class="collapsed" href="#" data-bs-toggle="collapse"
                                                        data-bs-target="#collapse{{ $cat->id }}">{{ $cat->name }}</a>
                                                    <ul id="collapse{{ $cat->id }}" class="sub-category collapse"
                                                        data-parent="#category">
                                                        @php $subcats=\App\Models\Category::where('parent_id',$cat->id)->get(); @endphp
                                                        @foreach ($subcats as $subcat)
                                                            <li><a href="#">{{ $subcat->name }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="size-block">
                                <div class="filter-title">
                                    <a class="title" data-bs-toggle="collapse" href="#size" role="button"
                                        aria-expanded="true">Select Size</a>
                                </div>
                                <div class="collapse show" id="size">
                                    <div class="filter-size" id="filter-size-1">
                                        <ul>
                                            <li>XS</li>
                                            <li>S</li>
                                            <li class="">M</li>
                                            <li>L</li>
                                            <li>XL</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="color-block">
                                <div class="filter-title">
                                    <a class="title" data-bs-toggle="collapse" href="#color" role="button"
                                        aria-expanded="false">Select Color</a>
                                </div>
                                <div class="collapse show" id="color">
                                    <div class="filter-color">
                                        <ul>
                                            <li>
                                                <div class="color-check">
                                                    <p><span style="background-color: #4114e4;"></span>
                                                        <strong>Blue</strong>
                                                    </p>

                                                    <input type="checkbox" id="color-1">
                                                    <label for="color-1"><span></span></label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="color-check">
                                                    <p><span style="background-color: #E14C7B;"></span>
                                                        <strong>Red</strong>
                                                    </p>

                                                    <input type="checkbox" id="color-2">
                                                    <label for="color-2"><span></span></label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="color-check">
                                                    <p><span style="background-color: #7CB637;"></span>
                                                        <strong>Green</strong>
                                                    </p>

                                                    <input type="checkbox" id="color-3">
                                                    <label for="color-3"><span></span></label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="color-check">
                                                    <p><span style="background-color: #161359;"></span>
                                                        <strong>Dark</strong>
                                                    </p>

                                                    <input type="checkbox" id="color-4">
                                                    <label for="color-4"><span></span></label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="price-range-block">
                                <div class="filter-title">
                                    <a class="title" data-bs-toggle="collapse" href="#pricingTwo" role="button"
                                        aria-expanded="false">Pricing Range</a>
                                </div>
                                <div class="collapse show" id="pricingTwo">
                                    <div class="price-range">
                                        <div class="price-amount flex-wrap">
                                            <div class="amount-input mt-1">
                                                <label class="fw-bold">Minimum Price</label>
                                                <input type="text" id="minAmount2" class="form-control">
                                            </div>
                                            <div class="amount-input mt-1">
                                                <label class="fw-bold">Maximum Price</label>
                                                <input type="text" id="maxAmount2" class="form-control">
                                            </div>
                                        </div>
                                        <div id="slider-range2"
                                            class="slider-range noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="rating-block">
                                <div class="filter-title">
                                    <a class="title" data-bs-toggle="collapse" href="#rating" role="button"
                                        aria-expanded="false">Select Rating</a>
                                </div>
                                <div class="collapse show" id="rating">
                                    <div class="filter-rating">
                                        <ul>
                                            <li>
                                                <div class="rating-check">
                                                    <input type="checkbox" id="rating-5">
                                                    <label for="rating-5"><span></span>

                                                    </label>
                                                    <p>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="rating-check">
                                                    <input type="checkbox" id="rating-4">
                                                    <label for="rating-4"><span></span></label>
                                                    <p>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="rating-check">
                                                    <input type="checkbox" id="rating-3">
                                                    <label for="rating-3"><span></span></label>
                                                    <p>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="rating-check">
                                                    <input type="checkbox" id="rating-2">
                                                    <label for="rating-2"><span></span></label>
                                                    <p>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="rating-check">
                                                    <input type="checkbox" id="rating-1">
                                                    <label for="rating-1"><span></span></label>
                                                    <p>
                                                        <i class="icofont-star"></i>
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8 col-xl-8 col-xxl-9">
                    <div class="card mb-3 bg-transparent p-2">
                        @foreach ($products as $product)
                            <div class="card border-0 mb-1">
                                <div
                                    class="form-check form-switch position-absolute top-0 end-0 py-3 px-3 d-none d-md-block">
                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                        <a href="{{ route('seller.product.edit', $product->id) }}"
                                            class="btn btn-outline-secondary"><i
                                                class="icofont-edit text-success"></i></a>
                                        <a href="{{ route('seller.product.delete', $product->id) }}"
                                            class="btn btn-outline-secondary deleterow"><i
                                                class="icofont-ui-delete text-danger"></i></a>
                                    </div>
                                </div>
                                <div class="card-body d-flex align-items-center flex-column flex-md-row">
                                    <a href="{{route('seller.product.details',$product->id)}}">
                                        <img class="w120 rounded img-fluid" src="{{ asset($product->image_one) }}"
                                            alt="">
                                    </a>
                                    <div class="ms-md-4 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                                        <a href="{{route('seller.product.details',$product->id)}}">
                                            <h6 class="mb-3 fw-bold">{{ $product->name }}<span
                                                    class="text-muted small fw-light d-block">Reference
                                                    {{ $product->sku }}</span></h6>
                                        </a>
                                        <div
                                            class="d-flex flex-row flex-wrap align-items-center justify-content-center justify-content-md-start">
                                            <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                <div class="text-muted small">Price</div>
                                                <strong>Tk{{ $product->price }}</strong>
                                            </div>
                                            <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                <div class="text-muted small">Ratings</div>
                                                <strong><i class="icofont-star text-warning"></i>4.5 <span
                                                        class="text-muted">(145)</span></strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col-md-12">
                            <nav class="justify-content-end d-flex">
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div> <!-- Row end  -->
        </div>
    </div>
@endsection
