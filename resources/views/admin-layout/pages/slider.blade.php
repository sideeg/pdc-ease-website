@extends('admin-layout/layout.main')

@section('content')

{{-- <h2 class="font-30 text-success">DashBoard</h2> --}}

{{-- @php Auth::logout() @endphp --}}

<slider remember_token="{{ Auth::user()->remember_token}}"></slider>
{{-- <slider-new></slider-new> --}}

@endsection