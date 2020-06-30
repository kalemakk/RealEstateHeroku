<section class="p0">
    <div class="container-fluid p0">
        <div class="home8-slider vh-100">
            <div id="bs_carousel" class="carousel slide bs_carousel" data-ride="carousel" data-pause="false" data-interval="7000">
                <div class="carousel-inner">
                    @foreach($getslide as $slide)
                        @if($slide->id === 1)
                            <div class="carousel-item active" data-slide="{{$slide->id -1}}" data-interval="false">
                        @else
                            <div class="carousel-item " data-slide="{{$slide->id -1}}" data-interval="false">
                        @endif
                        <div class="bs_carousel_bg" style="background-image: url({{url('images/home/4.jpg')}});"></div>
                        <div class="bs-caption">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7 col-lg-8">
                                        <div class="main_title text-capitalize">find your dream home</div>
                                        <p class="parag">From as low as $10 per day with limited time offer discounts</p>
                                    </div>
                                    <a href="{{route('property.show',$slide->id)}}">
                                        <div class="col-md-5 col-lg-4">
                                        <div class="feat_property home8">
                                            <div class="details">
                                                <a href="{{route('property.show',$slide->id)}}">

                                                <div class="tc_content">
                                                    <a href="{{route('property.show',$slide->id)}}">
                                                    <ul class="tag">
                                                        @if($slide->property_category === 'rent')
                                                            <li class="color-whitef7 bg-primary">For Rent</li>
                                                            @else
                                                            <li class="color-whitef7 bg-secondary">For Sale</li>
                                                        @endif
                                                    </ul>
                                                    <p class="text-thm text-capitalize">{{$slide->property_type}}</p>
                                                    <h4 class="text-capitalize">{{$slide->property_name}}</h4>
                                                    <p class="text-capitalize"><span class="flaticon-placeholder"></span> {{$slide->property_location}}</p>
                                                        <ul class="prop_details">
                                                            <li class="list-inline-item"><a href="{{route('property.show',$slide->id)}}">Rooms: {{$slide->property_number_of_rooms}}</a></li>
                                                            <li class="list-inline-item"><a href="{{route('property.show',$slide->id)}}">Property ID: {{$slide->property_id}}</a></li>
                                                            <li class="list-inline-item"><a href="{{route('property.show',$slide->id)}}">Sq Ft: {{$slide->property_size}}</a></li>
                                                        </ul>
                                                    @if($slide->property_category === 'rent')
                                                    <a class="fp_price" href="{{route('property.show',$slide->id)}}">Shs.{{$slide->property_price}}<small>/mo</small></a>
                                                        @else
                                                        <a class="fp_price" href="{{route('property.show',$slide->id)}}">Shs.{{$slide->property_price}}</a>
                                                    @endif
                                                    </a>
                                                </div>
                                                </a>
                                                <div class="fp_footer">
                                                    <ul class="fp_meta float-left mb0">
                                                        <li class="list-inline-item"><a href="#"><img src="{{url('images/property/pposter1.png')}}" alt="pposter1.png"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="text-capitalize">{{$slide->user->name}}</a></li>
                                                    </ul>
                                                    <div class="fp_pdate float-right">4 years ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="property-carousel-controls">
                    <a class="property-carousel-control-prev" role="button" data-slide="prev">
                        <span class="flaticon-left-arrow-1"></span>
                    </a>
                    <a class="property-carousel-control-next" role="button" data-slide="next">
                        <span class="flaticon-right-arrow"></span>
                    </a>
                </div>
            </div>
            <div class="carousel slide bs_carousel_prices" data-ride="carousel" data-pause="false" data-interval="false">
                <div class="carousel-inner"></div>
                <div class="property-carousel-ticker">
                    <div class="property-carousel-ticker-counter"></div>
                    <div class="property-carousel-ticker-divider">&nbsp;&nbsp;/&nbsp;&nbsp;</div>
                    <div class="property-carousel-ticker-total"></div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
