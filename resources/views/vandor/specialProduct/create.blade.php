@extends('vandor.layout.master')
@section('content')
    @push('vandorStyles')
        <title>Zeomart :: Seller New Special Product</title>
    @endpush
    <div class="dashboard__main pl0-md">
        <div class="dashboard__content bgc-gmart-gray">
            <div class="row pb50">
                <div class="col-6">
                    <div class="dashboard_title_area">
                        <h2>Special Products</h2>
                        <p class="para">To add your product to our special deals, first search for it here, and then select
                            your desired product to add it to the special deals. If you select the wrong product,
                            unfortunately, you will need to reload this page and start over.</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="dashboard_title_area">
                        <div class="dashboard_page header_search_widget mb30 mb15-520">
                            <h2>Search here</h2>
                            <div class="input-group">
                                <input type="text" class="form-control"
                                    placeholder="Search prodcut for add in special deals" id="searchSpecialProduct">
                                <div class="input-group-append">
                                    <button class="btn" type="button"><span class="fa fa-search"></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="printHere">
                <div class="col-xl-12">
                    <div class="dashboard_product_list account_user_deails">
                        <div class="order_table table-responsive">
                            <table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="{{ asset('home/images/resource/user.png') }}" alt="Image"></td>
                                        <td>Product Name</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <form class="row" action="{{ route('seller.special.store') }}" method="POST" enctype="multipart/form-data"
                id="myForm">
                @csrf
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Product Name:</label>
                    <input type="text" name="name" class="form-control" disabled>
                    <input type="hidden">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Product Price:</label>
                    <input type="text" name="price" class="form-control">
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> Start Time:</label>
                    <input type="datetime-local" name="start_time" class="form-control">
                    @error('start_time')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="" class="form-label"> End Time:</label>
                    <input type="datetime-local" name="end_time" class="form-control">
                    @error('end_time')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-new btn-lg btn-thm">Submit</button>
            </form>

        </div>
        @include('vandor.layout.footer')
    </div>
    @push('vandorScripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#searchSpecialProduct').on('keyup', function() {
                    var query = $(this).val();
                    $.ajax({
                        url: "{{ route('seller.search.products') }}",
                        type: 'GET',
                        data: {
                            query: query
                        },
                        success: function(response) {
                            var products = response;
                            var output = '';

                            for (var i = 0; i < products.length; i++) {
                                var product = products[i];
                                var name = product.name;
                                var image = product.image_one;
                                var id = product.id;

                                // Check if image exists
                                if (!image) {
                                    image = "{{ asset('home/images/resource/user.png') }}";
                                } else {
                                    image = "{{ asset('/') }}" + image;
                                }

                                // Add product row to output
                                output += '<tr>';
                                output += '<td><a href="#" class="product-link" data-name="' +
                                    name + '" data-id="' + id + '"><img src="' + image + '" alt="' +
                                    name +
                                    '" height="100" width="100"></a></td>';
                                output += '<td><a href="#" class="product-link" data-name="' +
                                    name + '" data-id="' + id + '">' + name + '</a></td>';
                                output += '</tr>';
                            }

                            // Set the output to the HTML table
                            $('#printHere tbody').html(output);
                            $('#printHere tbody').on('click', '.product-link', function(e) {
                                e.preventDefault();
                                var productName = $(this).data('name');
                                var productId = $(this).data('id');
                                $('input[name="name"]').val(productName);
                                $('#myForm').append(
                                    '<input type="hidden" name="product_id" value="' +
                                    productId + '">');
                                $('#printHere').remove();
                            });
                        }
                    });
                });
            });
        </script>
    @endpush
@endsection
