<!doctype html>
<html dir=ltr lang=en>

@include('home.layout.head')

<body>
    <div class="wrapper ovh">
        @include('home.layout.header')
        <div class="body_content_wrapper position-relative pt30">
            @yield('content')
            @include('home.layout.footer')
            <a class=scrollToHome href=#><i class="fas fa-angle-up"></i></a>
        </div>
    </div>
    @include('home.layout.script')
</body>

</html>
