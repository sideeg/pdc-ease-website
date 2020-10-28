<!-- Navigation Bar-->
<div class="bg-dark">
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark bg-light">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand logo" href="{{route('home')}}">
                <img src="{{asset('images/logo/ease.png') }}" alt="missing_logo" height="60">
                <!-- EaseGroup -->
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <ul class="navbar-nav navbar-center" id="mySidenav">
                    {{-- <li class="nav-item active">
                        <a href="{{route('home')}}" class="nav-link">@lang('content.home')</a>
                    </li> --}}
                     
                </ul>
                <ul class="navbar-center my-auto" style="list-style-type: none;" id="">
                    <li class="nav-item">
                        @if (App::isLocale('ar')) 
                            <a href="{{ url('locale/en') }}" class="nav-link"><img src="{{ asset('images/flags/uk.svg') }}" class="lang-svg" alt="" srcset=""></a>
                        @else
                            <a href="{{ url('locale/ar') }}" class="nav-link"><img src="{{ asset('images/flags/sudan.svg') }}" class="lang-svg" alt="" srcset=""></a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<!-- End Navigation Bar-->