@extends('Layouts.admin')
@section('content')
{{--    <p>hello</p>--}}
{{--    @foreach($property as $pro)--}}
{{--        <p>{{$pro->id}}</p>--}}
{{--    @endforeach--}}

{{--    <x-adminproperty/>--}}

{{--    <x-Listing/>--}}

<!-- Our Dashbord -->
<section class="our-dashbord dashbord bgc-f7 pb50">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-xl-2 dn-992 pl0"></div>
            <div class="col-sm-12 col-lg-8 col-xl-10 maxw100flex-992">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dashboard_navigationbar dn db-992">
                            <div class="dropdown">
                                <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
                                <ul id="myDropdown" class="dropdown-content">
                                    <li><a href="page-dashboard.html"><span class="flaticon-layers"></span> Dashboard</a></li>
                                    <li><a href="page-message.html"><span class="flaticon-envelope"></span> Message</a></li>
                                    <li class="active"><a href="page-my-properties.html"><span class="flaticon-home"></span> My Properties</a></li>
                                    <li><a href="page-my-favorites.html"><span class="flaticon-heart"></span> My Favorites</a></li>
                                    <li><a href="page-my-savesearch.html"><span class="flaticon-magnifying-glass"></span> Saved Search</a></li>
                                    <li><a href="page-my-review.html"><span class="flaticon-chat"></span> My Reviews</a></li>
                                    <li><a href="page-my-packages.html"><span class="flaticon-box"></span> My Package</a></li>
                                    <li><a href="page-my-profile.html"><span class="flaticon-user"></span> My Profile</a></li>
                                    <li><a href="page-add-new-property.html"><span class="flaticon-filter-results-button"></span> Add New Listing</a></li>
                                    <li><a href="page-login.html"><span class="flaticon-logout"></span> Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-4 mb10">
                        <div class="breadcrumb_content style2 mb30-991">
                            <h2 class="breadcrumb_title">My Properties</h2>
                            <p>We are glad to see you again!</p>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xl-8">
                        <div class="candidate_revew_select style2 text-right mb30-991">
                            <ul class="mb0">
                                <li class="list-inline-item">
                                    <div class="candidate_revew_search_box course fn-520">
                                        <form class="form-inline my-2">
                                            <input class="form-control mr-sm-2" type="search" placeholder="Search Courses" aria-label="Search">
                                            <button class="btn my-2 my-sm-0" type="submit"><span class="flaticon-magnifying-glass"></span></button>
                                        </form>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <select class="selectpicker show-tick">
                                        <option>Featured First</option>
                                        <option>Recent</option>
                                        <option>Old Review</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="my_dashboard_review mb40">
                            <div class="property_table">
                                <div class="table-responsive mt0">
                                    <table class="table">
                                        <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Listing Title</th>
                                            <th scope="col">Date published</th>
                                            <th scope="col">Status</th>
                                            <th scope="col"></th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($getall as $prop)
                                            <tr>
                                                <th scope="row">
                                                    <div class="feat_property list favorite_page style2">
                                                        <div class="thumb">
                                                            <img class="img-whp" src="{{url('images/property/fp1.jpg')}}" alt="fp1.jpg">
                                                            <div class="thmb_cntnt">
                                                                <ul class="tag mb0">
                                                                    <li class="list-inline-item dn"></li>
                                                                    <li class="list-inline-item"><a href="#" class="text-capitalize">For {{$prop->property_category}}</a></li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="details">
                                                            <div class="tc_content">
                                                                <h4>{{$prop->property_name}}</h4>
                                                                <p><span class="flaticon-placeholder"></span> {{$prop->property_location}}</p>
                                                                <p>
                                                                    @if($prop->property_promotion === 1)
                                                                    <span class="font-weight-bolder">Promotion:ON</span>
                                                                        @else
                                                                        <span class="font-weight-bolder">Promotion:OFF</span>
                                                                    @endif
                                                                </p>
                                                            @if($prop->property_category ==='rent')
                                                                    <a class="fp_price text-thm" href="#">${{$prop->property_price}}<small>/mo</small></a>
                                                                @else
                                                                    <a class="fp_price text-thm" href="#">${{$prop->property_price}}</a>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </th>
{{--                                                <td>30 December, 2020{{ \Carbon\Carbon::parse($prop->created_at)->format('d/m/Y')}}--}}
                                                <td>{{ \Carbon\Carbon::parse($prop->created_at)->format('d/m/Y')}}</td>
                                                @if($prop->property_sold_status === 0)
                                                    <td><span class="status_tag badge2">NotYetAquired</span></td>
                                                @else
                                                    <td><span class="status_tag badge">Aquired</span></td>
                                                @endif
                                                <td></td>
                                                <td>
                                                    <ul class="view_edit_delete_list mb0">
                                                        <a href="{{url('property')}}/{{$prop->id}}/edit"><button type="button" class="text-thm3"><li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Edit"><span class="flaticon-edit"></span></li></button></a>
                                                        <form action="{{ route('property.destroy',$prop->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="text-thm6"><li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Delete"><span class="flaticon-garbage"></span></li></button>

{{--                                                            <button type="button" data-toggle="modal" data-target="#exampleModal"><li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Delete"><span class="flaticon-garbage"></span></li></button>--}}
{{--                                                            <li class="list-inline-item" data-target="#exampleModal" data-toggle="modal" data-placement="top" title="Delete"><span class="flaticon-garbage"></span></li>--}}

{{--                                                            <!-- Modal -->--}}
{{--                                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--                                                                <div class="modal-dialog" role="document">--}}
{{--                                                                    <div class="modal-content">--}}
{{--                                                                        <div class="modal-header">--}}
{{--                                                                            <h5 class="modal-title" id="exampleModalLabel">Delete Property</h5>--}}
{{--                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                                                                <span aria-hidden="true">&times;</span>--}}
{{--                                                                            </button>--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="modal-body">--}}
{{--                                                                            <div class="text-thm3">--}}
{{--                                                                                Property Name:<span class="text-thm6">{{$prop->property_name}}</span><br>--}}
{{--                                                                                Property Location:<span class="text-thm6">{{$prop->property_location}}</span>--}}
{{--                                                                            </div>--}}
{{--                                                                            Are you sure you want to DELETE the Property--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="modal-footer">--}}
{{--                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>--}}
{{--                                                                            <button type="submit" class="btn btn-primary">DELETE</button>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
                                                        </form>
                                                    </ul>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="mbp_pagination">
                                    {{--                                    {{ $getall->render() }}--}}

                                    <ul class="page_navigation">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span class="flaticon-left-arrow"></span> Prev</a>
                                        </li>
                                        {{--                                        {{ $getall->links() }}--}}

                                        {{--                                        <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
                                        {{--                                        <li class="page-item active" aria-current="page">--}}
                                        {{--                                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>--}}
                                        {{--                                        </li>--}}
                                        {{--                                        <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
                                        {{--                                        <li class="page-item"><a class="page-link" href="#">...</a></li>--}}
                                        {{--                                        <li class="page-item"><a class="page-link" href="#">29</a></li>--}}
                                        {{--                                        <li class="page-item">--}}
                                        {{--                                            <a class="page-link" href="#"><span class="flaticon-right-arrow"></span></a>--}}
                                        {{--                                        </li>--}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt10">
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
