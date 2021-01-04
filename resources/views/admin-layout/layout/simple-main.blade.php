<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>


    @include('admin-layout/partials.meta')

    @include('admin-layout/partials.styles')

    
    <!-- Scripts -->

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->

     <!-- page container area start -->
     <div id="app">
        <!-- main content area start -->
        <div class="main-content">

            <!-- page title area start -->
            
            <!-- page title area end -->
            {{-- <div class="main-content-inner"> --}}
                {{-- <div class="row justify-content-center"> --}}
                    @yield('content')     
                {{-- </div> --}}
            {{-- </div> --}}
        </div>
        <!-- main content area end -->
    </div>
    <!-- page container area end -->




    <script src="{{ asset('js/app.js') }}" defer></script>

    @include('admin-layout/partials.scripts')

</body>
</html>
