<div>
<!-- Feature Properties -->
    <section id="feature-property" class="feature-property bgc-f7 pb30">
        <div class="container">
            <div class="col-lg-12">
                <div class="main-title mb40">
                    <h2>Featured Properties</h2>
                    <p>New Properties <a class="float-right" href="{{route('property.index')}}">View All Property<span class="flaticon-next"></span></a></p>
                </div>
            </div>
            <div class="row">
                @foreach($allProperty as $item)
                <div class="col-md-6 col-lg-4">
                        <div class="feat_property home7">
{{--                            <a href="{{url('property')}}/{{$item->id}}">--}}
                                <a href="{{ route('property.show',$item->id) }}">

                                <div class="thumb">
                                    <img class="img-whp" src="{{url('images/property/fp2.jpg')}}" alt="fp2.jpg">
                                </div>
                            </a>
                            <a href="{{ route('property.show',$item->id) }}">
                            <div class="details">
                                <div class="tc_content">
                                    <p><h4 class="text-thm3 text-capitalize">{{$item->property_type}}</h4></p>
                                    <h4 style="color: #1D293E" class="text-capitalize">For {{$item->property_category}}</h4>
                                    @if($item->property_category === "rent")
                                    <h4 class="text-thm2">Sh.{{$item->property_price}}<small class="text-thm2 font-weight-bolder">/mo</small></h4>
                                    @else
                                        <h4 class="text-thm2">Sh.{{$item->property_price}}</h4>
                                    @endif
                                        <p class="text-thm3"><span class="flaticon-placeholder"></span> {{$item->location->state}}, {{$item->location->district->name}}</p>
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
        <div class="col-lg-12">
            <div class="main-title mb40">
               <p><a class="float-right" href="{{route('property.index')}}">View All Property<span class="flaticon-next"></span></a></p>
            </div>
        </div>
    </section>

</div>




