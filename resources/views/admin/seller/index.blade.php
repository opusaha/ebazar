@extends('admin.layout.master')
@section('content')
    @push('adminStyles')
        <title>Zeomart :: All Seller</title>
    @endpush
    <div class="dashboard__main pl0-md">
        <div class="dashboard__content bgc-gmart-gray">
            <div class="row pb50">
                <div class="col-lg-12">
                    <div class="dashboard_title_area">
                        <h2>Sellers</h2>
                        <p class="para">Lorem ipsum dolor sit amet, consectetur.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="dashboard_product_list account_user_deails">
                        <div class="row d-block d-sm-flex justify-content-center justify-content-sm-between">
                            <div class="col-sm-6 col-lg-4">
                                <div class="dashboard_page header_search_widget mb30 mb15-520">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search seller using name or email"
                                            aria-label="Recipient's username" id="searchSeller">
                                        <div class="input-group-append">
                                            <button class="btn" type="button"><span
                                                    class="fa fa-search"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4"></div>
                            <div class="col-lg-4">
                                <div class="dashboard_page_add_listing text-center text-lg-end mb30 mb15-520">
                                    <a href="#" class="btn btn-gray">Export</a>
                                </div>
                            </div>
                        </div>
                        <div class="seller_table table-responsive">
                            <table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">email</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="sellerTableBody">
                                    @foreach ($sellers as $seller)
                                        <tr>
                                            <th scope="row">#{{ $seller->id }}</th>
                                            <th>{{ $seller->name }}</th>
                                            <td class="action"><span>{{ $seller->email }}</span></td>
                                            <td>{{ $seller->status }}</td>
                                            <td class="editing_list align-middle">
                                                <ul>
                                                    <li class="list-inline-item mb-1">
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal{{ $seller->id }}">
                                                            <span class="flaticon-pencil"></span>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal{{ $seller->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel{{ $seller->id }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <form action="{{ route('admin.seller.update', $seller->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit seller
                                                                : {{ $seller->name }}'s status</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <select name="status" class="form-control">
                                                                <option value="pending"
                                                                    {{ $seller->status == 'pending' ? 'selected' : '' }}>
                                                                    Pending</option>
                                                                <option value="approved"
                                                                    {{ $seller->status == 'approved' ? 'selected' : '' }}>
                                                                    Approved</option>
                                                                <option value="deactive"
                                                                    {{ $seller->status == 'deactive' ? 'selected' : '' }}>
                                                                    Deactive</option>
                                                                <option value="suspended"
                                                                    {{ $seller->status == 'suspended' ? 'selected' : '' }}>
                                                                    Suspended</option>
                                                            </select>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Update
                                                                changes</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="mbp_pagination mt30 text-center">
                            <ul class="page_navigation">
                                <li class="page-item {{ $sellers->onFirstPage() ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $sellers->previousPageUrl() }}" tabindex="-1"
                                        aria-disabled="{{ $sellers->onFirstPage() ? 'true' : 'false' }}">
                                        <span class="fas fa-angle-left"></span>
                                    </a>
                                </li>
                                @for ($i = 1; $i <= $sellers->lastPage(); $i++)
                                    <li class="page-item {{ $i == $sellers->currentPage() ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $sellers->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor
                                <li
                                    class="page-item {{ $sellers->currentPage() == $sellers->lastPage() ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $sellers->nextPageUrl() }}">
                                        <span class="fas fa-angle-right"></span>
                                    </a>
                                </li>
                            </ul>

                            <p class="mt20 pagination_page_count text-center">{{ $sellers->firstItem() }} –
                                {{ $sellers->lastItem() }} of {{ $sellers->total() }} properties found</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.layout.footer')
    </div>
    @push('adminScripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#searchSeller').on('keyup', function() {
                    var query = $(this).val();
                    $.ajax({
                        url: "{{ route('admin.search.seller') }}",
                        type: 'GET',
                        data: {
                            query: query
                        },
                        success: function(response) {
                            var data = '';
                            response.forEach(function(seller) {
                                data += '<tr>';
                                data += '<th scope="row">#' + seller.id + '</th>';
                                data += '<th>' + seller.name + '</th>';
                                data += '<td class="action"><span>' + seller.email +
                                    '</span></td>';
                                data += '<td>' + seller.status + '</td>';
                                data += '<td class="editing_list align-middle">';
                                data += '<ul>';
                                data += '<li class="list-inline-item mb-1">';
                                data +=
                                    '<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal' +
                                    seller.id + '">';
                                data += '<span class="flaticon-pencil"></span>';
                                data += '</button>';
                                data += '</li>';
                                data += '</ul>';
                                data += '</td>';
                                data += '</tr>';
                                data += '<!-- Modal -->';
                                data += '<div class="modal fade" id="exampleModal' + seller
                                    .id +
                                    '" tabindex="-1" aria-labelledby="exampleModalLabel' +
                                    seller.id + '" aria-hidden="true">';
                                data += '<div class="modal-dialog">';
                                data +=
                                    '<form action="{{ route('admin.seller.update', $seller->id) }}" method="POST">';
                                data += '@csrf';
                                data += '<div class="modal-content">';
                                data += '<div class="modal-header">';
                                data +=
                                    '<h1 class="modal-title fs-5" id="exampleModalLabel">Edit seller: ' +
                                    seller.name + '\'s status</h1>';
                                data +=
                                    '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
                                data += '</div>';
                                data += '<div class="modal-body">';
                                data += '<select name="status" class="form-control">';
                                data += '<option value="pending" ' + (seller.status ==
                                    'pending' ? 'selected' : '') + '>Pending</option>';
                                data += '<option value="approved" ' + (seller.status ==
                                    'approved' ? 'selected' : '') + '>Approved</option>';
                                data += '<option value="deactive" ' + (seller.status ==
                                    'deactive' ? 'selected' : '') + '>Deactive</option>';
                                data += '<option value="suspended" ' + (seller.status ==
                                        'suspended' ? 'selected' : '') +
                                    '>Suspended</option>';
                                data += '</select>';
                                data += '</div>';
                                data += '<div class="modal-footer">';
                                data +=
                                    '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>';
                                data +=
                                    '<button type="submit" class="btn btn-primary">Update changes</button>';
                                data += '</div>';
                                data += '</div>';
                                data += '</form>';
                                data += '</div>';
                                data += '</div>';
                            });
                            $('#sellerTableBody').html(data);
                        }
                    })
                })
            })
        </script>
    @endpush
@endsection
