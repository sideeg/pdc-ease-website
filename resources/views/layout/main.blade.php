<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    
@include('partials.meta')

@include('partials.styles')

  
</head>

    <body>
        
    {{-- @include('partials.preloader') --}}
    @include('partials.navbar')

    
    <main id="main" class="" style="width:100%; margin:0;padding:0;">
        @yield('content')
    </main>


    @include('partials.footer')
    @include('partials.scripts')
    </body>
</html>