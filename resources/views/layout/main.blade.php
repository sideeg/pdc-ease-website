<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    
@include('partials.meta')

@include('partials.styles')

  
</head>

    <body 
    @if($code)
    onload="toast()
    @endif
    >
        
    {{-- @include('partials.preloader') --}}
    @if (Route::is('home'))
        @include('partials.navbar')    
    @else
        @include('partials.navbar-simple')
    @endif


    
    <main id="main" class="" style="width:100%; margin:0;padding:0;">
        @yield('content')
    </main>


    @include('partials.footer')
    @include('partials.scripts')
    </body>
</html>