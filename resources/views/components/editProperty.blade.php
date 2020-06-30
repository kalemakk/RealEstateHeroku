<!-- Our Dashbord -->
<section class="our-dashbord dashbord bgc-f7 pb50">
    <div class="container-fluid ovh">
        <div class="row">
            <div class="col-lg-3 col-xl-2 dn-992 pl0"></div>
            <div class="col-lg-9 col-xl-10 maxw100flex-992">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dashboard_navigationbar dn db-992">
                            <div class="dropdown">
                                <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
                                <ul id="myDropdown" class="dropdown-content">
                                    <li><a href="page-dashboard.html"><span class="flaticon-layers"></span> Dashboard</a></li>
                                    <li><a href="page-message.html"><span class="flaticon-envelope"></span> Message</a></li>
                                    <li><a href="page-my-properties.html"><span class="flaticon-home"></span> My Properties</a></li>
                                    <li><a href="page-my-favorites.html"><span class="flaticon-heart"></span> My Favorites</a></li>
                                    <li><a href="page-my-savesearch.html"><span class="flaticon-magnifying-glass"></span> Saved Search</a></li>
                                    <li><a href="page-my-review.html"><span class="flaticon-chat"></span> My Reviews</a></li>
                                    <li><a href="page-my-packages.html"><span class="flaticon-box"></span> My Package</a></li>
                                    <li><a href="page-my-profile.html"><span class="flaticon-user"></span> My Profile</a></li>
                                    <li class="active"><a href="page-add-new-property.html"><span class="flaticon-filter-results-button"></span> Add New Listing</a></li>
                                    <li><a href="page-login.html"><span class="flaticon-logout"></span> Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb10">
                        <div class="breadcrumb_content style2">
                            <h2 class="breadcrumb_title">Add New Property</h2>
                            <p>We are glad to see you again!</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <form action="{{route('property.update',$property->id)}}" method="POST">
                            @csrf
                            <div class="my_dashboard_review">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="mb30">Adding Property</h4>
                                        <div class="my_profile_setting_input form-group">
                                            <label for="propertyTitle">Property Title</label>
                                            <input type="text" class="form-control" id="propertyTitle" name="property_name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="my_profile_setting_textarea">
                                            <label for="propertyDescription">Property Description</label>
                                            <textarea class="form-control" id="propertyDescription" value="{{$property->property_description}}" name="property_description" rows="7"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-6">
                                        <div class="my_profile_setting_input ui_kit_select_search form-group">
                                            <label>Date Of Construction</label>
                                            <input type="text" class="form-control" id="propertyDescription" name="property_date_of_construction">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-6">
                                        <div class="my_profile_setting_input ui_kit_select_search form-group">
                                            <label>Property Location</label>
                                            <select class="selectpicker" name="property_location" data-live-search="true" data-width="100%">
                                                <option data-tokens="luzira" value="luzira">Luzira</option>
                                                <option data-tokens="kajjasi" value="kajjasii">Kajjasi</option>
                                                <option data-tokens="wandegeya" value="wandegeya">Wandegeya</option>
                                                <option data-tokens="kasubi" value="kasubi">Kasubi</option>
                                                <option data-tokens="entebe" value="entebe">Entebe</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-xl-4">
                                        <div class="my_profile_setting_input ui_kit_select_search form-group">
                                            <label>Property Type</label>
                                            <select class="selectpicker" name="property_type" data-live-search="true" data-width="100%">
                                                <option data-tokens="apartment" value="apartment">Apartment</option>
                                                <option data-tokens="bungalow" value="bungalow">Bungalow</option>
                                                <option data-tokens="cottage" value="cottage">Cottage</option>
                                                <option data-tokens="duplex" value="duplex">Duplex</option>
                                                <option data-tokens="maisonette" value="maisonette">Maisonette</option>
                                                <option data-tokens="mansion" value="mansion">Mansion</option>
                                                <option data-tokens="penthouse" value="penthouse">Penthouse</option>
                                                <option data-tokens="rental_units" value="rental units">Rental Units</option>
                                                <option data-tokens="residential_land" value="residential land">Residential Land</option>
                                                <option data-tokens="semi_detached" value="semi deta">Semi Detached</option>
                                                <option data-tokens="shell_house" value="shell house">Shell House</option>
                                                <option data-tokens="storyed_house" value="storyed house">Storyed House</option>
                                                <option data-tokens="studio" value="studio">Studio</option>
                                                <option data-tokens="town_house" value="town house">Town House</option>
                                                <option data-tokens="villa" value="villa">Villa</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-xl-4">
                                        <div class="my_profile_setting_input ui_kit_select_search form-group">
                                            <label>Property Usage</label>

                                            <select class="selectpicker" name="property_usage" data-live-search="true" data-width="100%">
                                                <option data-tokens="residential" value="residential">For Residential</option>
                                                <option data-tokens="commercial" value="commercial">For Commercial</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-xl-4">
                                        <div class="my_profile_setting_input ui_kit_select_search form-group">
                                            <label>Property Category</label>
                                            <select class="selectpicker" name="property_category" data-live-search="true" data-width="100%">
                                                <option data-tokens="rent" value="rent">Rent</option>
                                                <option data-tokens="sale" value="sale">Sale</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-xl-4">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExamplePrice">Price</label>
                                            <input type="text" class="form-control" name="property_price" id="formGroupExamplePrice">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-xl-4">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleArea">Area Size(hectares)</label>
                                            <input type="text" class="form-control" name="property_size" id="formGroupExampleArea">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-xl-4">
                                        <div class="my_profile_setting_input ui_kit_select_search form-group">
                                            <label>Rooms</label>
                                            <select class="selectpicker" name="property_number_of_rooms" data-live-search="true" data-width="100%">
                                                <option data-tokens="Status1" value="1">1</option>
                                                <option data-tokens="Status2" value="2">2</option>
                                                <option data-tokens="Status3" value="3">3</option>
                                                <option data-tokens="Status4" value="4">4</option>
                                                <option data-tokens="Status5" value="5">5</option>
                                                <option data-tokens="Status6" value="many">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="my_dashboard_review mt30">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="mb30">Additional Information</h4>
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-2">
                                        <ul class="ui_kit_checkbox selectable-list">
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">Air Conditioning</label>
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
                                                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                    <label class="custom-control-label" for="customCheck3">Swimming Pool</label>
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
                                                    <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                    <label class="custom-control-label" for="customCheck5">Microwave</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-2">
                                        <ul class="ui_kit_checkbox selectable-list">
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                    <label class="custom-control-label" for="customCheck6">TV Cable</label>
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
                                                    <input type="checkbox" class="custom-control-input" id="customCheck8">
                                                    <label class="custom-control-label" for="customCheck8">Outdoor Shower</label>
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
                                                    <input type="checkbox" class="custom-control-input" id="customCheck10">
                                                    <label class="custom-control-label" for="customCheck10">Gym</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-2">
                                        <ul class="ui_kit_checkbox selectable-list">
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck11">
                                                    <label class="custom-control-label" for="customCheck11">Refrigerator</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck12">
                                                    <label class="custom-control-label" for="customCheck12">WiFi</label>
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
                                                    <input type="checkbox" class="custom-control-input" id="customCheck14">
                                                    <label class="custom-control-label" for="customCheck14">Sauna</label>
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
                            <div class="my_dashboard_review mt30">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="mb30">Property Media</h4>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="resume_uploader mb30">
                                            <h4>Property Image</h4>
{{--                                            <div class="form-group">--}}
{{--                                                <input type="file" name="file" class="form-control{{ $errors->has('file') ? ' is-invalid' : '' }}" >--}}
{{--                                                @if ($errors->has('file'))--}}
{{--                                                    <span class="invalid-feedback" role="alert">--}}
{{--                                                    <strong>{{ $errors->first('file') }}</strong>--}}
{{--                                                </span>--}}
{{--                                                @endif--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="my_profile_setting_input">
                                            <button type="submit" class="btn btn2 float-right">EDIT PROPERTY</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt50">
                    <div class="col-lg-12">
                        <div class="copyright-widget text-center">
                            <p>© 2020 Find House. Made with love.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
