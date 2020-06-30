<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="advanced custom search, agency, agent, business, clean, corporate, directory, google maps, homes, idx agent, listing properties, membership packages, property, real broker, real estate, real estate agent, real estate agency, realtor">
    <meta name="description" content="FindHouse - Real Estate HTML Template">
    <meta name="CreativeLayers" content="ATFN">
    <!-- css file -->
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{url('css/responsive.css')}}">
    <!-- Title -->
    <title>FindHouse - Real Estate HTML Template</title>
    <!-- Favicon -->
    <link href="{{url('images/favicon.ico')}}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="{{url('images/favicon.ico')}}" sizes="128x128" rel="shortcut icon" />
    <style>
        /** Home 8 Carousel */
        .bs_carousel_bg {
            -webkit-background-size: cover;
            background-size: cover;
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
        }
        .bs_carousel .bs_carousel_bg:after {
            background-color: rgba(29, 41, 62,0.6);
            bottom: 0;
            content: " ";
            display: block;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            z-index: 1;
        }
        .bs_carousel,
        .bs_carousel .carousel-inner,
        .bs_carousel .carousel-item {
            height: 100%;
        }
        .bs_carousel_prices {
            position: absolute;
            width: 50%;
            bottom: 15px;
            left: 0;
            height: 90px;
            z-index: 2;
            transform: scale(0, 1);
            -webkit-transition: transform .6s ease-in-out;
            -o-transition: transform .6s ease-in-out;
            transition: transform .6s ease-in-out;
            transform-origin: top right;
        }
        .bs_carousel_prices.pprty-price-active {
            transform: scale(1, 1);
        }
        .bs_carousel_prices .carousel-item {
            background-color: #000000;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }
        .bs_carousel_prices .carousel-item .pprty-price {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: #ffffff;
            font-size: 28px;
            line-height: 28px;
            height: 28px;
            overflow: hidden;
            left: calc((100% * 2 - 1140px) / 2 + 15px);
        }
        .bs_carousel_prices .carousel-item .pprty-price > span {
            display: block;
            transform: translateY(100%);
            -webkit-transition: all .2s ease-in-out;
            -o-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out;
        }
        .bs_carousel_prices.pprty-price-active .carousel-item.active .pprty-price > span {
            transform: translateY(0);
        }
        .bs_carousel_prices.pprty-price-active.pprty-first-time .carousel-item.active .pprty-price > span {
            -webkit-transition-delay: .6s;
            transition-delay: .6s;
        }
        .bs_carousel_prices .property-carousel-ticker {
            position: absolute;
            left: 210px;
            top: 50%;
            color: #ffffff;
            white-space: nowrap;
            font-weight: 700;
            opacity: 0;
            -webkit-transition: opacity .2s ease-in-out;
            -o-transition: opacity .2s ease-in-out;
            transition: opacity .2s ease-in-out;
        }
        .bs_carousel_prices.pprty-price-active .property-carousel-ticker {
            opacity: 1;
        }
        .bs_carousel_prices.pprty-price-active.pprty-first-time .property-carousel-ticker {
            -webkit-transition-delay: .6s;
            transition-delay: .6s;
        }
        .bs_carousel_prices .property-carousel-ticker > div {
            display: inline-block;
            line-height: 25px;
            vertical-align: bottom;
        }
        .bs_carousel_prices .property-carousel-ticker .property-carousel-ticker-counter {
            overflow: hidden;
            height: 24px;
        }
        .bs_carousel_prices .property-carousel-ticker .property-carousel-ticker-counter > span {
            display: block;
            font-size: 24px;
            -webkit-transition: all .4s ease-in-out;
            -o-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }
        .bs_carousel_prices .carousel-item:after {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            background-color: rgba(255,255,255,0.1);
            transform: scale(0, 1);
            transform-origin: 0% 50%;
            -webkit-transition: all 6.4s linear;
            -o-transition: all 6.4s linear;
            transition: all 6.4s linear;
        }
        .bs_carousel_prices.pprty-price-active .carousel-item.active:after {
            transform: scale(1, 1);
        }
        .bs_carousel_prices.pprty-price-active.pprty-first-time .carousel-item.active:after {
            -webkit-transition-delay: .6s;
            transition-delay: .6s;
        }
        .bs_carousel .property-carousel-controls {
            background-color: #ffffff;
            border-radius: 0 8px 0 0;
            bottom: 0;
            height: 90px;
            left: 0;
            line-height: 90px;
            overflow: hidden;
            position: absolute;
            text-align: center;
            width: 180px;
            z-index: 99;
        }
        .bs_carousel .property-carousel-controls a {
            background-color: #ffffff;
            color: #006c70;
            cursor: pointer;
            display: block;
            height: 90px;
            position: absolute;
            width: 90px;
        }
        .bs_carousel .property-carousel-controls a:hover{
            color: #ff5a5f;
        }
        .bs_carousel .property-carousel-controls a span{
            font-size: 23px;
        }
        .bs_carousel .property-carousel-controls a.property-carousel-control-prev {
            top: 0;
            left: 0;
        }
        .bs_carousel .property-carousel-controls a.property-carousel-control-next {
            top: 0;
            right: 0;
        }
        @keyframes arrowPCLeft {
            0% {
                -webkit-transform: translate(0, -50%);
                transform: translate(0, -50%);
            }
            25% {
                opacity: 0;
                -webkit-transform: translate(-30%, -50%);
                transform: translate(-30%, -50%);
            }
            50% {
                opacity: 0;
                -webkit-transform: translate(20%, -50%);
                transform: translate(20%, -50%);
            }
            100% {
                opacity: 1;
                -webkit-transform: translate(0, -50%);
                transform: translate(0, -50%);
            }
        }
        @keyframes arrowPCRight {
            0% {
                -webkit-transform: translate(0, -50%);
                transform: translate(0, -50%);
            }
            25% {
                opacity: 0;
                -webkit-transform: translate(30%, -50%);
                transform: translate(30%, -50%);
            }
            50% {
                opacity: 0;
                -webkit-transform: translate(-30%, -50%);
                transform: translate(-30%, -50%);
            }
            100% {
                opacity: 1;
                -webkit-transform: translate(0, -50%);
                transform: translate(0, -50%);
            }
        }
        .bs_carousel .property-carousel-controls a.property-carousel-control-prev:hover svg {
            -webkit-animation: arrowPCLeft 0.4s ease-in-out;
            -moz-animation: arrowPCLeft 0.4s ease-in-out;
            animation: arrowPCLeft 0.4s ease-in-out;
        }
        .bs_carousel .property-carousel-controls a.property-carousel-control-next:hover svg {
            -webkit-animation: arrowPCRight 0.4s ease-in-out;
            -moz-animation: arrowPCRight 0.4s ease-in-out;
            animation: arrowPCRight 0.4s ease-in-out;
        }
        .bs_carousel .carousel-item .bs-caption {
            color: #ffffff;
            left: 0;
            position: absolute;
            right: 0;
            top: 54%;
            transform: translateY(calc(-50% - 70px));
            z-index: 2;
        }
        .bs_carousel .main_title {
            color: #ffffff;
            font-family: "Nunito";
            font-size: 55px;
            font-weight: bold;
            line-height: 1.2;
            margin-bottom: 15px;
            margin-top: 120px;
            opacity: 0;
            -webkit-transform: translateY(20px);
            -moz-transform: translateY(20px);
            -o-transform: translateY(20px);
            transform: translateY(20px);
            -webkit-transition: all .6s ease-in-out;
            -moz-transition: all .6s ease-in-out;
            -o-transition: all .6s ease-in-out;
            transition: all .6s ease-in-out;
        }
        .bs_carousel .carousel-item.active .main_title {
            opacity: 1;
            transform: translateY(0);
        }
        .bs_carousel .parag {
            font-size: 18px;
            font-family: "Nunito";
            color: #ffffff;
            line-height: 1.2;
            margin-bottom: 0;
            opacity: 0;
            -webkit-transform: translateY(20px);
            -moz-transform: translateY(20px);
            -o-transform: translateY(20px);
            transform: translateY(20px);
            -webkit-transition: all .9s ease-in-out;
            -moz-transition: all .9s ease-in-out;
            -o-transition: all .9s ease-in-out;
            transition: all .9s ease-in-out;
        }
        .bs_carousel .carousel-item.active .parag {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
