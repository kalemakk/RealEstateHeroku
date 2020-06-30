<header class="header-nav menu_style_home_one style2 home10 navbar-scrolltofixed stricky main-menu">
    <div class="container p0">
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
            <a href="{{url('/')}}" class="navbar_brand float-left dn-smd">
                <img class="logo1 img-fluid" src="{{url('images/header-logo.png')}}" alt="header-logo.png">
                <img class="logo2 img-fluid" src="{{url('images/header-logo.png')}}" alt="header-logo.png">
                <span>Find A Home</span>
            </a>
            <!-- Responsive Menu Structure-->
            <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
            <ul id="respMenu" class="ace-responsive-menu text-left" data-menu-style="horizontal">
                <li class="last">
                    <a href="{{url('/')}}"><span class="title">Home</span></a>
                </li>
                <li class="last">
                    <a href="{{url('property')}}"><span class="title">All Property</span></a>
                </li>
                <li class="last">
                    <a href="{{url('aboutUs')}}"><span class="title">About Us</span></a>
                </li>
                <li class="last">
                    <a href="{{url('contactUs')}}"><span class="title">Contact Us</span></a>
                </li>
                <li class="last">
                    <a href="{{url('blog')}}"><span class="title">Blog</span></a>
                </li>
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
                <span class="mt20">FindHouse</span>
            </div>
            <ul class="menu_bar_home2">
                <li class="list-inline-item"><span></span></li>
                <li class="list-inline-item"><a href="#menu"><span></span></a></li>
            </ul>
        </div>
    </div><!-- /.mobile-menu -->
    <nav id="menu" class="stylehome1">
        <ul>
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('property')}}">All Property</a></li>
            <li><a href="{{url('aboutUs')}}">About Us</a></li>
            <li><a href="{{url('contactUs')}}">Contact Us</a></li>
            <li><a href="{{url('blog')}}">Blog</a></li>
        </ul>
    </nav>
</div>
