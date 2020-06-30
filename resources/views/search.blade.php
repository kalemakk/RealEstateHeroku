@extends('Layouts.client')
@section('content')
    <!-- Listing Grid View -->
    <section class="our-listing bgc-f7 pb30-991">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6">
                    <div class="breadcrumb_content style2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active text-thm" aria-current="page">Search</li>
                        </ol>
                        <h2 class="breadcrumb_title">Search Results</h2>
                    </div>
                </div>
                <div class="col-md-4 col-lg-6">
                    <div class="sidebar_switch text-right">
                        <p>Number of Results: {{$search->count()}}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @foreach($search as $item)
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
