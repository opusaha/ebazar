@extends('admin.layout.master')
@section('content')
    @push('adminStyles')
        <title>Zeomart :: Admin Carousel's</title>
    @endpush
    <div class="dashboard__main pl0-md">
        <div class="dashboard__content bgc-gmart-gray">
            <div class="row pb50">
                <div class="col-lg-12">
                    <div class="dashboard_title_area">
                        <h2>Carousel's</h2>
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
                                    <a href="{{route('admin.carousel.create')}}" class="btn btn-gray">New Carousel</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel_table table-responsive">
                            <table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">SL</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Line One</th>
                                        <th scope="col">Line Two</th>
                                        <th scope="col">Line Three</th>
                                        <th scope="col">Details</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($carousels as $key => $carousel)
                                        <tr>
                                            <td scope="row">#{{ $key + 1 }}</td>
                                            <td scope="row"><img src="{{asset($carousel->image)}}" alt="Carousel {{$key + 1}}" height="80" width="80"></td>
                                            <td>{{$carousel->line_one}}</td>
                                            <td>{{$carousel->line_two}}</td>
                                            <td>{{$carousel->line_three}}</td>
                                            <td>{{$carousel->details}}</td>
                                            <td class="editing_list align-middle">
                                                <ul>
                                                    <li class="list-inline-item mb-1">
                                                        <a href="{{route('admin.carousel.edit', $carousel->id)}}" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title=""
                                                            data-bs-original-title="Edit" aria-label="View"><span
                                                                class="flaticon-pencil"></span></a>
                                                    </li>
                                                    <li class="list-inline-item mb-1">
                                                        <a href="{{route('admin.carousel.delete', $carousel->id)}}" data-bs-toggle="tooltip"
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
                    </div>
                </div>
            </div>
        </div>
        @include('admin.layout.footer')
    </div>
@endsection
