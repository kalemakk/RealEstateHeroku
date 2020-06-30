<!-- Main Header Nav -->
<header class="header-nav menu_style_home_one style2  menu-fixed main-menu" style="background-color: #1D293E;">
    <div class="container-fluid p0">
        <!-- Ace Responsive Menu -->
        <nav>
            <!-- Menu Toggle btn-->
            <div class="menu-toggle">
                <img class="nav_logo_img img-fluid" src="{{url('images/header-logo.png')}}" alt="header-logo.png">
                <button type="button" id="menu-btn">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <a href="#" class="navbar_brand float-left dn-smd">
                <img class="logo1 img-fluid" src="{{url('images/header-logo2.png')}}" alt="header-logo.png">
                <img class="logo2 img-fluid" src="{{url('images/header-logo2.png')}}" alt="header-logo2.png">
                <span style="color: #dcddd6">Find A House</span>
            </a>
            <!-- Responsive Menu Structure-->
            <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
            <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">

                <li class="last">
                    <a href="page-contact.html"><span class="title" style="color: white">Contact</span></a>
                </li>

                <li class="user_setting">
                    <div class="dropdown">
                        <a class="btn dropdown-toggle" href="#" data-toggle="dropdown"><img class="rounded-circle" src="{{url('images/team/e1.png')}}" alt="e1.png" > <span class="dn-1199" style="color: white">{{Auth::user()->name}}</span></a>

                        <div class="dropdown-menu">
                            <div class="user_set_header">
                                <img class="float-left" src="{{url('images/team/e1.png')}}" alt="e1.png">
                                <p>{{Auth::user()->name}}<br><span class="address"><a href="https://grandetest.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="385954514c4d5e5956785f55595154165b5755">[email&#160;protected]</a></span></p>
                            </div>
                            <div class="user_setting_content">
                                <a class="dropdown-item active" href="#">My Profile</a>
                                <a class="dropdown-item" href="#">Messages</a>
                                <a class="dropdown-item" href="#">Purchase history</a>
                                <a class="dropdown-item" href="#">Help</a>
                                <a class="dropdown-item" href="#">Log out</a>
                            </div>
                        </div>
                    </div>
                </li>


                <li class="list-inline-item add_listing"><a href="{{route('property.create')}}"><span class="flaticon-plus"></span><span class="dn-lg"> Add Property</span></a></li>

            </ul>
        </nav>
    </div>
</header>

<!-- Main Header Nav For Mobile -->
<div id="page" class="stylehome1 h0">
    <div class="mobile-menu">
        <div class="header stylehome1">
            <div class="main_logo_home2 text-center">
                <img class="nav_logo_img img-fluid mt20" src="{{url('images/header-logo2.png')}}" alt="header-logo2.png">
                <span class="mt20">Find A House</span>
            </div>
            <ul class="menu_bar_home2">
                <li class="list-inline-item list_s"><a href="{{url('/admin')}}"><span class="flaticon-user-1"></span></a></li>
                <li class="list-inline-item"><a href="#menu"><span></span></a></li>
            </ul>
        </div>
    </div><!-- /.mobile-menu -->
    <nav id="menu" class="stylehome1">
        <ul>
            <li><span></span></li>
            <li><a href="{{url('/admin')}}">Dashboard</a></li>
            <li><span>Property</span>
                <ul>
                    <li><a href="{{route('property.index')}}">View All Property</a></li>
                </ul>
            </li>
            <li><span>My Profile</span>
                <ul>
                    <li><a href="{{route('user.index')}}">View Profile</a></li>
                    <li><a href="{{route('user.index')}}">Edit Profile</a></li>

                </ul>
            </li>
            <li><span>Location</span>
                <ul>
                    <li><a href="{{route('location.index')}}">View Locations</a></li>
                    <li><a href="{{route('location.index')}}">Edit Location</a></li>
                    <li><a href="{{route('location.create')}}">Create Location</a></li>

                </ul>
            </li>

{{--            <li><span class="flaticon-logout text-thm" ><a href="{{route('logout')}}"> Logout</a></span></li>--}}
{{--            <li><a href="{{route('logout')}}"><span class="flaticon-logout text-thm">{{ __('Logout') }}</span></a></li>--}}



            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="flaticon-logout"></i> <span>{{ __('Logout') }}</span></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

            </li>



{{--            <li class="cl_btn"><a class="btn btn-block btn-lg btn-thm circle" href="#"><span class="flaticon-plus"></span> Create Listing</a></li>--}}
        </ul>
    </nav>
</div>

