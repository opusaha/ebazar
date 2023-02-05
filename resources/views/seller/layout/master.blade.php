<!doctype html>
<html class="no-js" lang="en" dir="ltr">
@include('seller.layout.head')

<body>
    <div id="ebazar-layout" class="theme-blue">

        <!-- sidebar -->
        @include('seller.layout.sidebar')

        <!-- main body area -->
        <div class="main px-lg-4 px-md-4">

            <!-- Body: Header -->
            @include('seller.layout.topbar')

            <!-- Body: Body -->
            @yield('content')

            <!-- Modal Custom Settings-->
            @include('seller.layout.modal')

        </div>

    </div>

    @include('seller.layout.script')
</body>

</html>
