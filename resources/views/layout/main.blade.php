<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

@include('partials.meta')

@include('partials.styles')


</head>

    <body
    {{-- onload="failToast()" --}}
    @if(Session::has('code'))
    {{-- onload="toast()" --}}
        @if(Session::get('code') == 1) onload="successToast()" @elseif(Session::get('code') == 0) onload="failToast()"
        @elseif(Session::get('code') == 2) onload="contactSuccessToast()"  @elseif(Session::get('code') == 3) onload="contactfailToast()"@endif
        @endif
    >
    {{-- @php
        dd(Session::get('code'));
    @endphp --}}

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
