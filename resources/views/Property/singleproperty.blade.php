@extends('Layouts.client')
@section('content')
    <div class="wrapper">
            <div class="preloader"></div>
            <!-- Listing Single Property -->
        <section class="listing-title-area">
            <div class="container">
                <div class="row mb30">
                    <div class="col-lg-7 col-xl-8">
                        <div class="single_property_title mt30-767">
                            <h2 class="text-capitalize">{{$single->property_name}}</h2>
                            <p class="text-capitalize">{{$single->property_location}}</p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-4">
                        <div class="single_property_social_share">
                            <div class="price float-left fn-400">
                                @if($single->property_category === "rent")
                                <h2>Sh.{{$single->property_price}}<small>/mo</small></h2>
                                    @else
                                    <h2>Sh.{{$single->property_price}}</h2>
                                @endif
                            </div>
                            <div class="spss style2 mt20 text-right tal-400">
                                <ul class="mb0">
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-share"></span></a></li>
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-printer"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_page_listing_style">

            <div class="container-fluid p0">
                <div class="row">
                    <div class="col-sm-6 col-lg-6 p0">
                        <div class="row m0">
                            <div class="col-lg-12 p0">
                                <div class="spls_style_one pr1 1px">
    {{--                                <img class="img-fluid w100" src="{{url('images/property/ls1.jpg')}}" alt="ls1.jpg">--}}
                                    <a href="{{url('images/property/ls1.jpg')}}"><img class="img-fluid w100" src="{{url('images/property/ls1.jpg')}}" alt="ls1.jpg"></a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6 p0">
                        <div class="row m0">
                            <div class="col-sm-6 col-lg-6 p0">
                                <div class="spls_style_one">
    {{--                                class="popup-img"--}}
                                    <a href="{{url('images/property/ls2.jpg')}}"><img class="img-fluid w100" src="{{url('images/property/ls2.jpg')}}" alt="ls2.jpg"></a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6 p0">
                                <div class="spls_style_one">
                                    <a href="{{url('images/property/ls3.jpg')}}"><img class="img-fluid w100" src="{{url('images/property/ls3.jpg')}}" alt="ls3.jpg"></a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6 p0">
                                <div class="spls_style_one">
                                    <a href="{{url('images/property/ls4.jpg')}}"><img class="img-fluid w100" src="{{url('images/property/ls4.jpg')}}" alt="ls4.jpg"></a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6 p0">
                                <div class="spls_style_one">
                                    <a href="{{url('images/property/ls5.jpg')}}"><img class="img-fluid w100" src="{{url('images/property/ls5.jpg')}}" alt="ls5.jpg"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="listing_single_description">
                                    <div class="lsd_list">
                                        <ul class="mb0">
                                            <li class="list-inline-item"><a href="#" class="text-capitalize">{{$single->property_type}}</a></li>
                                            <li class="list-inline-item"><a href="#" class="text-capitalize">{{$single->property_category}}</a></li>
                                            <li class="list-inline-item"><a href="#" class="text-capitalize">{{$single->property_location}}</a></li>
                                            <li class="list-inline-item"><a href="#" class="text-capitalize">Sq Ft: {{$single->property_size}}</a></li>
                                        </ul>
                                    </div>
                                    <h4 class="mb30">Description</h4>
                                    <p class="mb25">{{$single->property_description}}</p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="additional_details">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4 class="mb15">Property Details</h4>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <ul class="list-inline-item">
                                                <li><p>Property ID :</p></li>
                                                <li><p>Price :</p></li>
                                                <li><p>Property Size :</p></li>
                                                <li><p>Year Built :</p></li>
                                            </ul>
                                            <ul class="list-inline-item">
                                                <li><p><span>{{$single->property_id}}</span></p></li>
                                                @if($single->property_category ==='rent')
                                                <li><p><span>Sh.{{$single->property_price}}<small>/mo</small></span></p></li>
                                                @else
                                                    <li><p><span>Sh.{{$single->property_price}}</span></p></li>
                                                @endif
                                                    <li><p><span>{{$single->property_size}} Sq Ft</span></p></li>
                                                <li><p><span>{{$single->property_date_of_construction}}</span></p></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <ul class="list-inline-item">
                                                <li><p>Property Type :</p></li>
                                                <li><p>Property Usage :</p></li>
                                                <li><p>Property Location :</p></li>
                                                <li><p>Property Category :</p></li>
                                            </ul>
                                            <ul class="list-inline-item">
                                                <li><p><span class="text-capitalize">{{$single->property_type}}</span></p></li>
                                                <li><p><span class="text-capitalize">{{$single->property_usage}}</span></p></li>
                                                <li><p><span class="text-capitalize">{{$single->location->state}}</span></p></li>
                                                <li><p><span class="text-capitalize">{{$single->property_category}}</span></p></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="additional_details">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4 class="mb15">Additional details</h4>
                                        </div>
{{--                                        <div class="col-md-6 col-lg-6">--}}
{{--                                            <ul class="list-inline-item">--}}
{{--                                                <li><p>Deposit :</p></li>--}}
{{--                                                <li><p>Pool Size :</p></li>--}}
{{--                                                <li><p>Additional Rooms :</p></li>--}}
{{--                                            </ul>--}}
{{--                                            <ul class="list-inline-item">--}}
{{--                                                <li><p><span>20%</span></p></li>--}}
{{--                                                <li><p><span>300 Sqft</span></p></li>--}}
{{--                                                <li><p><span>Guest Bath</span></p></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-6 col-lg-6">--}}
{{--                                            <ul class="list-inline-item">--}}
{{--                                                <li><p>Last remodel year :</p></li>--}}
{{--                                                <li><p>Amenities :</p></li>--}}
{{--                                                <li><p>Equipment :</p></li>--}}
{{--                                            </ul>--}}
{{--                                            <ul class="list-inline-item">--}}
{{--                                                <li><p><span>1987</span></p></li>--}}
{{--                                                <li><p><span>Clubhouse</span></p></li>--}}
{{--                                                <li><p><span>Grill - Gas</span></p></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <h4 class="mt30 mb30">Similar Properties</h4>
                            </div>
{{--                            <x-similar :property_type="{{$single->property_type}}":property_category="{{$single->property_category}}"/>--}}

{{--                            <x-similar :mess="$mess":property_type="$property_type"/>--}}
{{--                            <x-similar :type="$type"/>--}}
                            <x-similar :type="$single->property_type"/>





                        </div>
                    </div>


                    <div class="col-lg-4 col-xl-4">
                        <div class="sidebar_listing_list">
                            <div class="sidebar_advanced_search_widget">
                                <div class="sl_creator">
                                    <h4 class="mb25">Listed By</h4>
                                    <div class="media">
                                        <img class="mr-3" src="{{url('images/team/lc1.png')}}" alt="lc1.png">
                                        <div class="media-body">
                                            <h5 class="mt-0 mb0">{{$single->user->name}}</h5>
                                            <p class="mb0">(123)456-7890</p>
                                            <p class="mb0"><a href="https://grandetest.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c0a9aea6af80a6a9aea4a8afb5b3a5eea3afad">[email&#160;protected]</a></p>
                                            <a class="text-thm" href="#">View My Listing</a>
                                        </div>
                                    </div>
                                </div>
                                <ul class="sasw_list mb0">
                                    <form action="{{url('mail')}}" class="contact_form">

                                    <li class="search_area">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="exampleInputName1" placeholder="Your Name">
                                        </div>
                                    </li>
                                    <li class="search_area">
                                        <div class="form-group">
                                            <input type="text" class="form-control"  name="phone" id="exampleInputName2" placeholder="Phone">
                                        </div>
                                    </li>
                                    <li class="search_area">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="exampleInputEmail" placeholder="Email">
                                        </div>
                                    </li>
                                    <li class="search_area">
                                        <div class="form-group">
                                            <textarea id="form_message" name="mail_body" class="form-control required" rows="5" required="required" placeholder="I'm interest in property {{$single->property_id}}">I'm interest in property {{$single->property_id}}</textarea>
                                        </div>
                                    </li>
                                        <input type="hidden" id="custId" name="mail_subject" value="Am in need of Property {{$single->property_id}}">
                                        <li>
                                        <div class="search_option_button">
                                            <button type="submit" class="btn btn-block btn-thm">Contact</button>
                                        </div>
                                        </li><br>

                                    </form>

                                    <li>
                                        <div class="">
                                            <a href="https://api.whatsapp.com/send?phone=256781116999"><button type="button" class="btn btn-block btn-transparent fa fa-whatsapp " style="color: #1c7430"> Chat on WhatsApp</button></a>

                                            {{--                                            <a href="https://api.whatsapp.com/send?phone=256781116999&text=am interested in property {{$single->property_id}}"><button type="button" class="btn btn-block btn-transparent fa fa-whatsapp " style="color: #1c7430"> Chat on WhatsApp</button></a>--}}
{{--                                            <a href="https://api.whatsapp.com/send?send?phone=&text=am interested in property {{$single->property_id}}"><button type="submit" class="btn btn-block btn-transparent fa fa-whatsapp " style="color: #1c7430"> Chat on WhatsApp</button></a>--}}
{{--                                            <a href="https://api.whatsapp.com/send?phone=256781116999">Send Message</a>--}}

                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="sidebar_feature_listing">
                            <h4 class="title">Recently Viewed</h4>
                            <div class="media">
                                <img class="align-self-start mr-3" src="{{url('images/blog/fls1.jpg')}}" alt="fls1.jpg">
                                <div class="media-body">
                                    <h5 class="mt-0 post_title">Nice Room With View</h5>
                                    <a href="#">$13,000/<small>/mo</small></a>
                                    <ul class="mb0">
                                        <li class="list-inline-item">Beds: 4</li>
                                        <li class="list-inline-item">Baths: 2</li>
                                        <li class="list-inline-item">Sq Ft: 5280</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="media">
                                <img class="align-self-start mr-3" src="{{url('images/blog/fls2.jpg')}}" alt="fls2.jpg">
                                <div class="media-body">
                                    <h5 class="mt-0 post_title">Villa called Archangel</h5>
                                    <a href="#">$13,000<small>/mo</small></a>
                                    <ul class="mb0">
                                        <li class="list-inline-item">Beds: 4</li>
                                        <li class="list-inline-item">Baths: 2</li>
                                        <li class="list-inline-item">Sq Ft: 5280</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="media">
                                <img class="align-self-start mr-3" src="{{url('images/blog/fls3.jpg')}}" alt="fls3.jpg">
                                <div class="media-body">
                                    <h5 class="mt-0 post_title">Sunset Studio</h5>
                                    <a href="#">$13,000<small>/mo</small></a>
                                    <ul class="mb0">
                                        <li class="list-inline-item">Beds: 4</li>
                                        <li class="list-inline-item">Baths: 2</li>
                                        <li class="list-inline-item">Sq Ft: 5280</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    </div>
@endsection
