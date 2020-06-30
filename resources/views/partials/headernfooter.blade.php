@include('partials.header')
<body>
<div class="wrapper">
    <div class="preloader"></div>
    @include('partials.head')
    @yield('content')
    @include('partials.footer')
    <a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>
</div>
@include('partials.scripts')
</body>
