<div class="header_top home6 dn-992">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="home1-advnc-search home10 mt20">
                    <ul class="h1ads_1st_list mb0">
                        <form action="{{url('search')}}">


                        <li class="list-inline-item">
                            <div class="search_option_two home2">
                                <div class="candidate_revew_select">
                                    <select class="selectpicker w100 show-tick " name="property_type">
                                        <option>Property Type</option>
                                        <option value="apartment">Apartment</option>
                                        <option data-tokens="bungalow">Bungalow</option>
                                        <option data-tokens="cottage">Cottage</option>
                                        <option data-tokens="duplex">Duplex</option>
                                        <option data-tokens="maisonette">Maisonette</option>
                                        <option data-tokens="mansion">Mansion</option>
                                        <option data-tokens="penthouse">Penthouse</option>
                                        <option data-tokens="rental_units">Rental Units</option>
                                        <option data-tokens="residential_land">Residential Land</option>
                                        <option data-tokens="semi_detached">Semi Detached</option>
                                        <option data-tokens="shell_house">Shell House</option>
                                        <option data-tokens="storyed_house">Storyed House</option>
                                        <option data-tokens="studio">Studio</option>
                                        <option data-tokens="town_house">Town House</option>
                                        <option data-tokens="villa">Villa</option>

                                    </select>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="search_option_two home2">
                                <div class="candidate_revew_select">
                                    <select class="selectpicker w100 show-tick" name="property_category">
                                        <option selected value="">Property Category</option>
                                        <option value="rent">Rent</option>
                                        <option value="sale">Sale</option>
                                    </select>
                                </div>
                            </div>
                        </li>

                        <li class="list-inline-item">
                            <div class="small_dropdown2">
                                <div id="prncgs" class="btn dd_btn">
                                    <span>Price</span>
                                    <label for="exampleInputEmail2"><span class="fa fa-angle-down"></span></label>
                                </div>
                                <div class="dd_content2 home2">
                                    <div class="pricing_acontent">
                                        <input type="text" class="amount" placeholder="Shs.52,239">
                                        <input type="text" class="amount2" placeholder="Shs.985,14">
                                        <div class="slider-range"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="custome_fields_520 list-inline-item">
                            <div class="navbered">
                                <div class="mega-dropdown">
                                    <span id="show_advbtn" class="dropbtn">Advanced Options <i class="flaticon-more pl10 flr-520"></i></span>
                                    <div class="dropdown-content home2">
{{--                                        <div class="row p15">--}}
{{--                                            <div class="col-lg-12">--}}
{{--                                                <h4 class="text-thm3">Additional Information</h4>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-xxs-6 col-sm col-lg col-xl">--}}
{{--                                                <ul class="ui_kit_checkbox selectable-list">--}}
{{--                                                    <li>--}}
{{--                                                        <div class="custom-control custom-checkbox">--}}
{{--                                                            <input type="checkbox" class="custom-control-input" id="customCheck1">--}}
{{--                                                            <label class="custom-control-label" for="customCheck1">Air Conditioning</label>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <div class="custom-control custom-checkbox">--}}
{{--                                                            <input type="checkbox" class="custom-control-input" id="customCheck2">--}}
{{--                                                            <label class="custom-control-label" for="customCheck2">Lawn</label>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <div class="custom-control custom-checkbox">--}}
{{--                                                            <input type="checkbox" class="custom-control-input" id="customCheck3">--}}
{{--                                                            <label class="custom-control-label" for="customCheck3">Swimming Pool</label>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-xxs-6 col-sm col-lg col-xl">--}}
{{--                                                <ul class="ui_kit_checkbox selectable-list">--}}
{{--                                                    <li>--}}
{{--                                                        <div class="custom-control custom-checkbox">--}}
{{--                                                            <input type="checkbox" class="custom-control-input" id="customCheck10">--}}
{{--                                                            <label class="custom-control-label" for="customCheck10">Gym</label>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <div class="custom-control custom-checkbox">--}}
{{--                                                            <input type="checkbox" class="custom-control-input" id="customCheck11">--}}
{{--                                                            <label class="custom-control-label" for="customCheck11">Refrigerator</label>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <div class="custom-control custom-checkbox">--}}
{{--                                                            <input type="checkbox" class="custom-control-input" id="customCheck12">--}}
{{--                                                            <label class="custom-control-label" for="customCheck12">WiFi</label>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-xxs-6 col-sm col-lg col-xl">--}}
{{--                                                <ul class="ui_kit_checkbox selectable-list">--}}
{{--                                                    <li>--}}
{{--                                                        <div class="custom-control custom-checkbox">--}}
{{--                                                            <input type="checkbox" class="custom-control-input" id="customCheck13">--}}
{{--                                                            <label class="custom-control-label" for="customCheck13">Laundry</label>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <div class="custom-control custom-checkbox">--}}
{{--                                                            <input type="checkbox" class="custom-control-input" id="customCheck14">--}}
{{--                                                            <label class="custom-control-label" for="customCheck14">Sauna</label>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <div class="custom-control custom-checkbox">--}}
{{--                                                            <input type="checkbox" class="custom-control-input" id="customCheck15">--}}
{{--                                                            <label class="custom-control-label" for="customCheck15">Window Coverings</label>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        <div class="row p15 pt0-xsd">
                                            <div class="col-lg-11 col-xl-10">
                                                <ul class="apeartment_area_list mb0">
                                                    <li class="list-inline-item">
                                                        <div class="candidate_revew_select">
                                                            <select class="selectpicker w100 show-tick">
                                                                <option>Rooms</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                                <option>6</option>
                                                                <option>7</option>
                                                                <option>8</option>
                                                            </select>
                                                        </div>
                                                    </li>
{{--                                                    <li class="list-inline-item">--}}
{{--                                                        <div class="candidate_revew_select">--}}
{{--                                                            {{Form::date('property_date_of_construction',['placeholder' => 'date'])}}--}}


{{--                                                            <select class="selectpicker w100 show-tick">--}}
{{--                                                                <option>Year built</option>--}}
{{--                                                                <option>1998</option>--}}
{{--                                                                <option>1999</option>--}}
{{--                                                                <option>2000</option>--}}
{{--                                                                <option>2001</option>--}}
{{--                                                                <option>2002</option>--}}
{{--                                                                <option>2003</option>--}}
{{--                                                                <option>2004</option>--}}
{{--                                                                <option>2005</option>--}}
{{--                                                                <option>2006</option>--}}
{{--                                                                <option>2007</option>--}}
{{--                                                                <option>2008</option>--}}
{{--                                                                <option>2009</option>--}}
{{--                                                                <option>2010</option>--}}
{{--                                                                <option>2011</option>--}}
{{--                                                                <option>2012</option>--}}
{{--                                                                <option>2013</option>--}}
{{--                                                                <option>2014</option>--}}
{{--                                                                <option>2015</option>--}}
{{--                                                                <option>2016</option>--}}
{{--                                                                <option>2017</option>--}}
{{--                                                                <option>2018</option>--}}
{{--                                                                <option>2019</option>--}}
{{--                                                                <option>2020</option>--}}
{{--                                                            </select>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}






                                                    <li class="list-inline-item">
                                                        <div class="candidate_revew_select">
                                                            <select class="selectpicker w100 show-tick">
{{--                                                                <select class="selectpicker" name="property_location" data-live-search="true" data-width="100%">--}}
                                                                    <option selected="selected" value="">Select Location</option>
                                                                    @foreach($district as $locate)
                                                                        <optgroup label="{{$locate->name}}">
                                                                            @foreach($locate->locations as $state)
                                                                                <option class="text-capitalize" value="{{$state->state}}">{{$state->state}}</option>
                                                                            @endforeach
                                                                        </optgroup>
                                                                    @endforeach
                                                                </select>

{{--                                                                --}}
{{--                                                                <option>Built-up Area</option>--}}
{{--                                                                <option>Luzira</option>--}}
{{--                                                                <option>Kajjasi</option>--}}
{{--                                                                <option>Wandegeya</option>--}}
{{--                                                                <option>Kasubi</option>--}}
{{--                                                                <option>Enteebe</option>--}}
{{--                                                            </select>--}}
                                                        </div>
                                                    </li>

                                                    <li class="list-inline-item">
                                                        <div class="candidate_revew_select">
                                                            <select class="selectpicker w100 show-tick">
                                                                <option>Property Usage</option>
                                                                <option data-tokens="residential">For Residential</option>
                                                                <option data-tokens="commercial">For Commercial</option>
                                                            </select>
                                                        </div>
                                                    </li>


                                                </ul>
                                            </div>
                                            <div class="col-lg-1 col-xl-2">
                                                <div class="mega_dropdown_content_closer">
                                                    <h5 class="text-thm text-right mt15"><span id="hide_advbtn" class="curp">Hide</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item float-right fn-lg">
                            <div class="search_option_button">
                                <button type="submit" class="btn btn-thm">Search</button>
                            </div>
                        </li>
                        </form>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
