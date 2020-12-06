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
</head>
<body >

    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->

     <!-- page container area start -->
     <div class="page-container" id="app">
        @include('admin-layout/partials.sidebar')
        <!-- main content area start -->
        <div class="main-content">
            @include('admin-layout/partials.navbar')

            <!-- page title area start -->
            
            <!-- page title area end -->
            <div class="main-content-inner">
                {{-- <div class="row justify-content-center"> --}}
                    @yield('content')     
                {{-- </div> --}}
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2018. All right reserved.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
            'remember_token' => Auth::user()->remember_token ?? null,
        ]) !!};

        // console.log( window.Laravel.remember_token);

        // CKEDITOR.replace( 'desc_en' );
        // CKEDITOR.replace( 'desc_ar' );
     </script>
    
    <script src="{{ asset('js/app.js') }}" ></script>

    @include('admin-layout/partials.scripts')


</body>
</html>
