@extends('vandor.layout.master')
@section('content')
    @push('vandorStyles')
        @php $settings = \App\Models\WebsiteSettings::first(); @endphp
        <title>{{ $settings->name }} :: Seller Add Product</title>
    @endpush
    <div class="dashboard__main pl0-md">
        <div class="dashboard__content bgc-gmart-gray">
            <div class="row pb50">
                <div class="col-lg-12">
                    <div class="dashboard_title_area">
                        <h2>Products</h2>
                        <p class="para">Add new product.</p>
                    </div>
                </div>
            </div>
            <form class="row" action="{{ route('seller.product.store') }}" method="POST" enctype="multipart/form-data">@csrf
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Product Name:</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Product Price:</label>
                    <input type="text" name="price" class="form-control" value="{{ old('price') }}">
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Product Old Price:</label>
                    <input type="text" name="old_price" class="form-control" value="{{ old('old_price') }}">
                    @error('old_price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Product Status:</label>
                    <select name="status" id="" class="form-control">
                        <option value="Published">Published</option>
                        @error('status')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </select>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Product Category:</label>
                    <select name="category" id="category" class="form-control">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Product Sub Category:</label>
                    <select name="sub_category" id="subCategory" class="form-control">
                        <option value="">Select a sub category</option>
                    </select>
                    @error('category')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Product SKU:</label>
                    <input type="text" name="sku" class="form-control" class="form-control"
                        value="{{ old('sku') }}">
                    @error('sku')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Product Quantity:</label>
                    <input type="text" name="quantity" class="form-control" class="form-control"
                        value="{{ old('quantity') }}">
                    @error('quantity')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Product Tag:</label>
                    <input type="text" name="tag" id="" class="form-control" value="{{ old('tag') }}">
                    @error('tag')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Product Image One:</label>
                    <input type="file" name="image_one" id="" class="form-control">
                    @error('image_one')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Product Image Two:</label>
                    <input type="file" name="image_two" id="" class="form-control">
                    @error('image_two')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Product Image Three:</label>
                    <input type="file" name="image_three" id="" class="form-control">
                    @error('image_three')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Product details:</label>
                    <textarea name="details" id="" cols="50" rows="10" class="form-control">{{ old('details') }}</textarea>
                    @error('details')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Product Specification:</label>
                    <textarea name="specification" id="" cols="50" rows="10" class="form-control">{{ old('specification') }}</textarea>
                    @error('specification')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>


                <button type="submit" class="btn btn-new btn-lg btn-thm">Submit</button>
            </form>
        </div>
        @include('vandor.layout.footer')
    </div>
    @push('vandorScripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.js"></script>
        <script>
            $(document).ready(function() {
                $('#category').on('change', function() {
                    let id = $(this).val();
                    $('#subCategory').empty();
                    $('#subCategory').append(`<option value="0" disabled selected>Processing...</option>`);
                    $.ajax({
                        type: 'GET',
                        url: "/seller/product/subcategory/"+id,
                        success: function(response) {
                            var response = JSON.parse(response);
                            $('#subCategory').empty();
                            $('#subCategory').append(
                                `<option value="0" disabled selected>Select your Sub Category</option>`
                            );
                            response.forEach(element => {
                                $('#subCategory').append(
                                    `<option value="${element['id']}">${element['name']}</option>`
                                );
                            });
                        }
                    });
                }).trigger('change');
            });
        </script>
    @endpush
@endsection
