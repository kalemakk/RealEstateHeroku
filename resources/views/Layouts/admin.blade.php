<!DOCTYPE html>
<html dir="ltr" lang="en">
@include('partials.admin.header')
<body>
<div class="wrapper">
    <div class="preloader"></div>
</div>
@include('partials.admin.nav')
@include('partials.admin.sidebar')
@yield('content')
<a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>
@include('partials.admin.scripts')
</body>
{{--@include('partials.admin.admintemp')--}}
</html>
