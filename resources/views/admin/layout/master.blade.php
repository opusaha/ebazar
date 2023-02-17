<!DOCTYPE html>

<head>
   @include('admin.layout.head')
</head>

<body>
    <div class="wrapper">
        @include('admin.layout.header')

        <div class="dashboard_content_wrapper">
            <div class="dashboard dashboard_wrapper pr30 pr0-md">
                @include('admin.layout.sidebar')
                @yield('content')
            </div>
        </div>
        <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>
    </div>
    <!-- Wrapper End -->
    @include('admin.layout.script')
</body>

</html>
