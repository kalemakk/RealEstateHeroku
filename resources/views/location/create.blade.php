@extends('Layouts.admin')
@section('content')

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
                        <div class="col-lg-12">
                            <form action="{{route('location.store')}}" method="POST">
                                @csrf
                                <div class="my_dashboard_review">
                                    <div class="row">
                                        <div class="col-lg-6 col-xl-6">
                                            <h4 class="mb30">Add Location</h4>
                                            <div class="my_profile_setting_input form-group">


                                                {{Form::label('location_name', 'Property Location', ['class' => 'awesome'])}}
                                                {{Form::text('location_name',null, ['class' => 'form-control'])}}


{{--                                                <label for="propertyLocation">Property Location</label>--}}
{{--                                                <input type="text" class="form-control" id="propertyLocation" name="location_name">--}}
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xl-6">
                                            <div class="my_profile_setting_input ui_kit_select_search form-group">
                                                <label>District</label>
                                                <select class="selectpicker" name="location_district" data-live-search="true" data-width="100%">
                                                    <option selected="selected" value="">No District selected</option>
                                                    @foreach($district as $dist)
                                                    <option class="text-capitalize" value="{{$dist->name}}">{{$dist->name}}</option>
                                                    @endforeach
{{--                                                    <option value="masindi">Masindi</option>--}}
{{--                                                    <option value="jinja">Jinja</option>--}}
{{--                                                    <option value="mukono">Mukono</option>--}}
{{--                                                    <option value="hoima">Hoima</option>--}}
{{--                                                    <option value="mbarara">Mbarara</option>--}}
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-xl-12">
                                            {{Form::label('location_image', 'Location Image', ['class' => 'font-weight-bolder'])}}
                                            {{Form::file('location_image')}}
                                        </div>


                                        <div class="col-xl-12 ">
                                            <div class="my_profile_setting_input">
                                                <button type="submit" class="btn btn2 float-right">SAVE LOCATION</button>
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
                                <p>© 2020 Find A House.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

@endsection
