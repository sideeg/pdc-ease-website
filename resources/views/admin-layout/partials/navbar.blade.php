 <!-- header area start -->
 <div class="header-area">
    <div class="row align-items-center">
        <!-- nav and search button -->
        <div class="col-md-6 col-sm-8 d-flex align-items-center">
            <div class="nav-btn pull-left">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <!-- <div class="search-box pull-left">
                <form action="#">
                    <input type="text" name="search" placeholder="Search..." required>
                    <i class="ti-search"></i>
                </form>
            </div> -->
            
            <div class="row align-items-start">
                <div class="col-lg-6 col-sm-6">
                    <div class="user-profile pull-left">
                        <!-- <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar"> -->
                        <h4 class="user-name dropdown-toggle text-center" data-toggle="dropdown">{{ Auth::user()->name }}<i class="fa fa-angle-down"></i></h4>
                        <div class="dropdown-menu d-inline">
                            <!-- <a class="dropdown-item" href="#">Message</a> -->
                            <a class="dropdown-item" href="#"><i class="ti-settings mr-2"></i>Settings</a>
                            {{-- <a class="dropdown-item" href="#"><i class="ti-share-alt mr-2"></i> --}}
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="ti-share-alt mr-2"></i>
                                {{ __('Logout') }}
                                
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            {{-- </a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- profile info & task notification -->
        <notify></notify>

    </div>
</div>
<!-- header area end -->