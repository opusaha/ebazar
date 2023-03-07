@extends('home.layout.master')
@section('content')
    @push('styles')
        @php $settings = \App\Models\WebsiteSettings::first(); @endphp
        <title>{{ $settings->name }} :: All categories</title>
    @endpush
    <section class="inner_page_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="breadcrumb_content">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item">All Categories</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="shop-single-content pb80 pt0 ovh">
        <div class="container">
            <div class="row ovh">
                @foreach ($shopByCat as $category)
                    <div class="col-6 col-md-3 col-xl wow fadeInUp" data-wow-duration={{ $loop->index * 0.2 + 0.7 . 's' }}>
                        <a href="{{route('category',$category->id)}}">
                            <div class=iconbox>
                                <div class=icon><img src="{{ asset($category->logo) }}" alt="{{ $category->name }}">
                                </div>
                                <div class=details>
                                    <h5 class=title>{{ $category->name }}</h5>
                                    <p class=subtitle>{{ $category->items_count }} items</p>
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
