@extends('Layouts.admin')
@section('content')
{{--    <x-editProperty/>--}}
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
                            <h2 class="breadcrumb_title">Edit Property</h2>
                            <p>We are glad to see you again!</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                            {{Form::model($property, ['route' => ['property.update', $property->id],'method' => 'PUT', 'files' => true])}}
                            <div class="my_dashboard_review">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="mb30">Edit Property</h4>
                                        <div class="my_profile_setting_input form-group">
                                            <label for="propertyTitle">Property Title</label>
                                            <input type="text" class="form-control" id="propertyTitle" name="property_name" value="{{$property->property_name}}" >
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="my_profile_setting_textarea">
                                            <label for="propertyDescription">Property Description</label>
                                            <textarea class="form-control" id="propertyDescription"  name="property_description" rows="7" >{{$property->property_description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-6">
                                        <div class="my_profile_setting_input ui_kit_select_search form-group">
                                            <label>Date Of Construction</label>
                                            <input type="text" class="form-control" id="propertyDescription" name="property_date_of_construction" value="{{$property->property_date_of_construction}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-6">
                                        <div class="my_profile_setting_input ui_kit_select_search form-group">
                                            <label>Property Location</label>
                                            {{Form::select('property_location', ['luzira' => 'Luzira','entebe' => 'Entebe', 'kajjasi' => 'Kajjasi', 'wandegeya' => 'Wandegeya', 'kasubi' => 'Kasubi'], $property->property_location,['class'=>'selectpicker'])}}
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-xl-4">
                                        <div class="my_profile_setting_input ui_kit_select_search form-group">
                                            <label>Property Type</label>
                                            {{Form::select('property_type', ['apartment' => 'Apartment', 'bungalow' => 'Bungalow', 'cottage' => 'Cottage', 'duplex' => 'Duplex'], $property->property_type,['class'=>'selectpicker'])}}
{{--                                            --}}
{{--                                            <select class="selectpicker" name="property_type" data-live-search="true" data-width="100%">--}}
{{--                                                <option selected="selected" value="{{$property->property_type}}"></option>--}}
{{--                                                <option value="apartment">Apartment</option>--}}
{{--                                                <option value="bungalow">Bungalow</option>--}}
{{--                                                <option value="cottage">Cottage</option>--}}
{{--                                                <option value="duplex">Duplex</option>--}}
{{--                                                <option value="maisonette">Maisonette</option>--}}
{{--                                                <option value="mansion">Mansion</option>--}}
{{--                                                <option value="penthouse">Penthouse</option>--}}
{{--                                                <option value="rental units">Rental Units</option>--}}
{{--                                                <option value="residential land">Residential Land</option>--}}
{{--                                                <option value="semi deta">Semi Detached</option>--}}
{{--                                                <option value="shell house">Shell House</option>--}}
{{--                                                <option value="storyed house">Storyed House</option>--}}
{{--                                                <option value="studio">Studio</option>--}}
{{--                                                <option value="town house">Town House</option>--}}
{{--                                                <option value="villa">Villa</option>--}}
{{--                                            </select>--}}
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-xl-4">
                                        <div class="my_profile_setting_input ui_kit_select_search form-group">
                                            <label>Property Usage</label>
                                            {{Form::select('property_usage', ['residential' => 'For Residential', 'commercial' => 'For Commercial'], $property->property_usage,['class'=>'selectpicker'])}}
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-xl-4">
                                        <div class="my_profile_setting_input ui_kit_select_search form-group">
                                            <label>Property Category</label>
                                            {{Form::select('property_category', ['rent' => 'Rent', 'sale' => 'Sale'], $property->property_category,['class'=>'selectpicker'])}}

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-xl-4">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExamplePrice">Price</label>
                                            <input type="text" class="form-control" value="{{$property->property_price}}" name="property_price" id="formGroupExamplePrice">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-xl-4">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleArea">Area Size(hectares)</label>
                                            <input type="text" class="form-control" value="{{$property->property_size}}" name="property_size" id="formGroupExampleArea">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-xl-4">
                                        <div class="my_profile_setting_input ui_kit_select_search form-group">
                                            <label for="formGroupExampleArea">Room</label>
                                            <input type="text" class="form-control" value="{{$property->property_number_of_rooms}}" name="property_number_of_rooms" id="formGroupExampleArea">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="shortcode_widget_switch">
                                            <div class="my_profile_setting_input ui_kit_select_search form-group">
                                                <label>Property Promotion</label>
                                                {{Form::select('property_promotion', [true => 'ON', false => 'OFF'], $property->property_promotion,['class'=>'selectpicker'])}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-xl-4">
                                        <div class="my_profile_setting_input ui_kit_select_search form-group">
                                            <label>Property Status</label>
                                            {{Form::select('property_sold_status', [true => 'Aquired', false => 'NotYetAquired'], $property->property_sold_status,['class'=>'selectpicker'])}}
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
                                            <div class="form-group">
                                                <input type="file" name="file" class="form-control{{ $errors->has('file') ? ' is-invalid' : '' }}" >
                                                @if ($errors->has('file'))
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('file') }}</strong>
                                                </span>
                                                @endif
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="my_profile_setting_input">

                                            {!! Form::submit('EDIT PROPERTY', ['class' => 'btn btn2 float-right']) !!}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        {!! Form::close() !!}
{{--                        </form>--}}
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

@endsection
