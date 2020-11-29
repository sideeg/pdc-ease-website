@extends('admin-layout/layout.main')

@section('content')

{{-- <h2 class="font-30 text-success">DashBoard</h2> --}}

{{-- @php Auth::logout() @endphp --}}

{{-- <slider></slider> --}}
{{-- <message></message> --}}


<form action="{{ route('sliderSave')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="sourse" >
    <button type="submit" class="btn btn-primary">submit
    </button>
</form>


@endsection
