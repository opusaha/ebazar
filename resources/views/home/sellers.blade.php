@extends('home.layout.master')
@section('content')
    @push('styles')
        @php $settings = \App\Models\WebsiteSettings::first(); @endphp
        <title>{{ $settings->name }} :: All Sellers</title>
    @endpush
    <section class="inner_page_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="breadcrumb_content">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item">All Sellers</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="shop-single-content pb80 pt0 ovh">
        <div class="container">
            <div class="row ovh">
                @foreach ($sellers as $seller)
                    <div class="col-6 col-md-3 col-xl wow fadeInUp" data-wow-duration={{ $loop->index * 0.2 + 0.7 . 's' }}>
                        <a href="{{ route('seller.product', $seller->id) }}">
                            <div class=iconbox>
                                <div class=icon><img src="@if ($seller->logo == null) {{ asset($settings->logo) }}
                                    @else {{ asset($seller->logo) }} @endif" alt="{{ $seller->name }}">
                                </div>
                                <div class=details>
                                    <h5 class=title>{{ $seller->name }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @push('scripts')
    @endpush
@endsection
