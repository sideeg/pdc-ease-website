@extends('admin-layout/layout.main')

@section('content')

{{-- <h2 class="font-30 text-success">DashBoard</h2> --}}

{{-- @php Auth::logout() @endphp --}}

{{-- <slider></slider> --}}
{{-- <message></message> --}}

<!-- visitor graph area start -->
<div class="card mt-5">
    <div class="card-body">
        <div class="d-flex justify-content-between mb-5">
            <h4 class="header-title mb-0">Statistics Graph</h4>
            
        </div>
        <div id="visitor_graph"></div>
        <p id="orders_list" > 
            [400, 470, 520, 500, 420, 350, 320, 400, 550, 600, 500, 420, 400]
        </p>
        <p id="messages_list" > 
            [450, 520, 550, 400, 450, 1000, 400, 450, 500, 450, 400, 500, 450]
        </p>

    </div>
</div>
<!-- visitor graph area end -->



@endsection
