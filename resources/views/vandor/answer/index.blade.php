@extends('vandor.layout.master')
@section('content')
    @push('vandorStyles')
        @php $settings = \App\Models\WebsiteSettings::first(); @endphp
        <title>{{ $settings->name }} :: Seller's Question & Answer</title>
    @endpush
    <div class="dashboard__main pl0-md">
        <div class="dashboard__content bgc-gmart-gray">
            <div class="row pb50">
                <div class="col-lg-12">
                    <div class="dashboard_title_area">
                        <h2>Question & Answer's</h2>
                        <p class="para">Lorem ipsum dolor sit amet, consectetur.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="dashboard_product_list account_user_deails">
                        <div class="row d-block d-sm-flex justify-content-center justify-content-sm-between">
                        </div>
                        <div class="coupon_table table-responsive">
                            <table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">Photo</th>
                                        <th scope="col">Question</th>
                                        <th scope="col">Answer</th>
                                        <td scope="col">Response</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($questions as $list)
                                        <tr>
                                            @php $product = \App\Models\Product::find($list->product_id) @endphp
                                            <td>
                                                @isset($product)
                                                    <a href="{{route('single.product', ['name' => $product->name, 'id' => $product->id])}}"><img src="{{ asset($product->image_one) }}" alt="{{ $product->name }}"
                                                        width="100"></a>
                                                @endisset
                                            </td>
                                            <td>{{ $list->question }}</td>
                                            <form action="{{ route('seller.answer') }}" method="POST">@csrf
                                                <td>
                                                    <input type="text" class="form-control" name="answer">
                                                    <input type="hidden" name="question_id" value="{{ $list->id }}">
                                                </td>
                                                <td><button type="submit" class="btn btn-thm mt-2 py-2 px-4"><i
                                                            class="fa fa-paper-plane"></i></button></td>
                                            </form>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('vandor.layout.footer')
    </div>
@endsection
