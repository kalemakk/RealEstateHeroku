<!-- Wrapper End -->
@include('partials.admin.scripts')
{{--<script data-cfasync="false" src="{{url('cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script type="text/javascript" src="{{url('js/jquery-3.3.1.js')}}"></script>--}}
{{--<script type="text/javascript" src="js/jquery-migrate-3.0.0.min.js"></script>--}}
{{--<script type="text/javascript" src="js/popper.min.js"></script>--}}
{{--<script type="text/javascript" src="js/bootstrap.min.js"></script>--}}
{{--<script type="text/javascript" src="js/jquery.mmenu.all.js"></script>--}}
{{--<script type="text/javascript" src="js/ace-responsive-menu.js"></script>--}}
{{--<script type="text/javascript" src="js/bootstrap-select.min.js"></script>--}}
{{--<script type="text/javascript" src="js/isotop.js"></script>--}}
{{--<script type="text/javascript" src="js/snackbar.min.js"></script>--}}
{{--<script type="text/javascript" src="js/simplebar.js"></script>--}}
{{--<script type="text/javascript" src="js/parallax.js"></script>--}}
{{--<script type="text/javascript" src="js/scrollto.js"></script>--}}
{{--<script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>--}}
{{--<script type="text/javascript" src="js/jquery.counterup.js"></script>--}}
{{--<script type="text/javascript" src="js/wow.min.js"></script>--}}
{{--<script type="text/javascript" src="js/progressbar.js"></script>--}}
{{--<script type="text/javascript" src="js/slider.js"></script>--}}
{{--<script type="text/javascript" src="js/timepicker.js"></script>--}}
{{--<!-- Custom script for all pages -->--}}
{{--<script type="text/javascript" src="js/script.js"></script>--}}
<script>
    var bsCarouselItems = 1;
    if($('.bs_carousel .carousel-item').length){
        $('.bs_carousel .carousel-item').each(function(index, element) {
            if (index == 0) {
                $('.bs_carousel_prices').addClass('pprty-price-active pprty-first-time');
            }
            $('.bs_carousel_prices .property-carousel-ticker-counter').append('<span>0' + bsCarouselItems + '</span>');
            bsCarouselItems += 1;
        });
    }

    $('.bs_carousel_prices .property-carousel-ticker-total').append('<span>0' + $('.bs_carousel .carousel-item').length + '</span>');

    if($('.bs_carousel').length){
        $('.bs_carousel').on('slide.bs.carousel', function(carousel) {
            $('.bs_carousel_prices').removeClass('pprty-first-time');
            $('.bs_carousel_prices').carousel(carousel.to);
        });
    }

    if($('.bs_carousel').length){
        $('.bs_carousel').on('slid.bs.carousel', function(carousel) {
            var tickerPos = (carousel.to) * 25;
            $('.bs_carousel_prices .property-carousel-ticker-counter > span').css('transform', 'translateY(-' + tickerPos + 'px)');
        });
    }

    if($('.bs_carousel .property-carousel-control-next').length){
        $('.bs_carousel .property-carousel-control-next').on('click',function(e) {
            $('.bs_carousel').carousel('next');
        });
    }

    if($('.bs_carousel .property-carousel-control-prev').length){
        $('.bs_carousel .property-carousel-control-prev').on('click',function(e) {
            $('.bs_carousel').carousel('prev');
        });
    }
    if($('.bs_carousel').length){
        $('.bs_carousel').carousel({
            interval: 6000,
            pause: "true"
        });
    }
</script>
