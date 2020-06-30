@extends('Layouts.client')
@section('content')
    <!-- Listing Grid View -->
    <section class="our-listing bgc-f7 pb30-991">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="listing_sidebar">
                        <div class="sidebar_content_details style3">
                            <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
                            <div class="sidebar_listing_list style2 mb0">
                                <div class="sidebar_advanced_search_widget">
                                    <h4 class="mb25">Advanced Search <a class="filter_closed_btn float-right" href="#"><small>Hide Filter</small> <span class="flaticon-close"></span></a></h4>
                                    <ul class="sasw_list style2 mb0">
                                        <li>
                                            <div class="search_option_two">
                                                <div class="candidate_revew_select">
                                                    <select class="selectpicker  w100 show-tick">
                                                        <option>Property Type</option>
                                                        <option>Apartment</option>
                                                        <option>Bungalow</option>
                                                        <option >Cottage</option>
                                                        <option>Duplex</option>
                                                        <option>Maisonette</option>
                                                        <option>Mansion</option>
                                                        <option >Penthouse</option>
{{--                                                        <option>Rental Units</option>--}}
{{--                                                        <option>Residential Land</option>--}}
{{--                                                        <option>Semi Detached</option>--}}
{{--                                                        <option>Shell House</option>--}}
{{--                                                        <option>Storyed House</option>--}}
{{--                                                        <option>Studio</option>--}}
{{--                                                        <option>Town House</option>--}}
{{--                                                        <option>Villa</option>--}}

                                                    </select>

                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_two">
                                                <div class="candidate_revew_select">
                                                    <select class="selectpicker w100 show-tick">
                                                        <option>Property Type</option>
                                                        <option>Apartment</option>
                                                        <option>Bungalow</option>
                                                        <option>Condo</option>
                                                        <option>House</option>
                                                        <option>Land</option>
                                                        <option>Single Family</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="small_dropdown2">
                                                <div id="prncgs" class="btn dd_btn">
                                                    <span>Price</span>
                                                    <label for="exampleInputEmail2"><span class="fa fa-angle-down"></span></label>
                                                </div>
                                                <div class="dd_content2">
                                                    <div class="pricing_acontent">
                                                        <input type="text" class="amount" placeholder="$52,239">
                                                        <input type="text" class="amount2" placeholder="$985,14">
                                                        <div class="slider-range"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_two">
                                                <div class="candidate_revew_select">
                                                    <select class="selectpicker w100 show-tick">
                                                        <option>Bathrooms</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_two">
                                                <div class="candidate_revew_select">
                                                    <select class="selectpicker w100 show-tick">
                                                        <option>Bedrooms</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_two">
                                                <div class="candidate_revew_select">
                                                    <select class="selectpicker w100 show-tick">
                                                        <option>Garages</option>
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                        <option>Others</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_two">
                                                <div class="candidate_revew_select">
                                                    <select class="selectpicker w100 show-tick">
                                                        <option>Year built</option>
                                                        <option>2013</option>
                                                        <option>2014</option>
                                                        <option>2015</option>
                                                        <option>2016</option>
                                                        <option>2017</option>
                                                        <option>2018</option>
                                                        <option>2019</option>
                                                        <option>2020</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="min_area style2 list-inline-item">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputName2" placeholder="Min Area">
                                            </div>
                                        </li>
                                        <li class="max_area list-inline-item">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputName3" placeholder="Max Area">
                                            </div>
                                        </li>
                                        <li>
                                            <div id="accordion" class="panel-group">
                                                <div class="panel">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a href="#panelBodyRating" class="accordion-toggle link" data-toggle="collapse" data-parent="#accordion"><i class="flaticon-more"></i> Advanced features</a>
                                                        </h4>
                                                    </div>
                                                    <div id="panelBodyRating" class="panel-collapse collapse">
                                                        <div class="panel-body row">
                                                            <div class="col-lg-12">
                                                                <ul class="ui_kit_checkbox selectable-list float-left fn-400">
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                            <label class="custom-control-label" for="customCheck1">Air Conditioning</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                                            <label class="custom-control-label" for="customCheck4">Barbeque</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck10">
                                                                            <label class="custom-control-label" for="customCheck10">Gym</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                                            <label class="custom-control-label" for="customCheck5">Microwave</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                                            <label class="custom-control-label" for="customCheck6">TV Cable</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                                            <label class="custom-control-label" for="customCheck2">Lawn</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck11">
                                                                            <label class="custom-control-label" for="customCheck11">Refrigerator</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                                            <label class="custom-control-label" for="customCheck3">Swimming Pool</label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                                <ul class="ui_kit_checkbox selectable-list float-right fn-400">
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck12">
                                                                            <label class="custom-control-label" for="customCheck12">WiFi</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck14">
                                                                            <label class="custom-control-label" for="customCheck14">Sauna</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck7">
                                                                            <label class="custom-control-label" for="customCheck7">Dryer</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck9">
                                                                            <label class="custom-control-label" for="customCheck9">Washer</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck13">
                                                                            <label class="custom-control-label" for="customCheck13">Laundry</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck8">
                                                                            <label class="custom-control-label" for="customCheck8">Outdoor Shower</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck15">
                                                                            <label class="custom-control-label" for="customCheck15">Window Coverings</label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_button">
                                                <button type="submit" class="btn btn-block btn-thm">Search</button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-lg-6">
                    <div class="breadcrumb_content style2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active text-thm" aria-current="page">All Property</li>
                        </ol>
                        <h2 class="breadcrumb_title">All Property</h2>
                    </div>
                </div>
                <div class="col-md-4 col-lg-6">
                    <div class="sidebar_switch text-right">
                        <div id="main2">
                            <span id="open2" class="flaticon-filter-results-button filter_open_btn"> Show Filter</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                    @foreach($getall as $item)
                            <div class="col-md-6 col-lg-4">
                                <div class="feat_property home7">
                                    <a href="{{url('property')}}/{{$item->id}}">
                                        <div class="thumb">
                                            <img class="img-whp" src="{{url('images/property/fp2.jpg')}}" alt="fp2.jpg">
                                        </div>
                                    </a>
                                    <a href="{{url('property')}}/{{$item->id}}">
                                        <div class="details">
                                            <div class="tc_content">
                                                <p><h4 class="text-thm3 text-capitalize">{{$item->property_type}}</h4></p>
                                                <h4 style="color: #1D293E" class="text-capitalize">For {{$item->property_category}}</h4>
                                                @if($item->property_category === "rent")
                                                    <h4 class="text-thm2">Sh.{{$item->property_price}}<small class="text-thm2 font-weight-bolder">/mo</small></h4>
                                                @else
                                                    <h4 class="text-thm2">Sh.{{$item->property_price}}</h4>
                                                @endif
                                                <p class="text-thm3"><span class="flaticon-placeholder"></span> {{$item->property_location}}</p>
                                                <ul class="prop_details mb0 ">
                                                    <li class="list-inline-item"><span><h5 class="text-thm3">Rooms: {{$item->property_number_of_rooms}}</h5></span></li>
                                                    <li class="list-inline-item"><span></span></li>
                                                    <li class="list-inline-item"><span><h5 class="text-thm3">Sq Ft: {{$item->property_size}}</h5></span></li>
                                                </ul>
                                            </div>
                                            <div class="fp_footer">
                                                <ul class="fp_meta float-left mb0">
                                                    <li class="list-inline-item"><a href="#"><img src="{{url('images/property/pposter1.png')}}" alt="pposter1.png"></a></li>
                                                    <li class="list-inline-item text-capitalize"><a href="#">{{$item->user->name}}</a></li>
                                                </ul>
                                                <div class="fp_pdate float-right">4 years ago</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
