@extends('Layouts.admin')
@section('content')
    <section class="our-dashbord dashbord bgc-f7 pb50">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-xl-2 dn-992 pl0"></div>
                <div class="col-sm-12 col-lg-8 col-xl-10 maxw100flex-992">
                    <div class="row">
                        <div class="col-lg-12 mb10">
                            <div class="breadcrumb_content style2">
                                <h2 class="breadcrumb_title">My Profile</h2>
                                <h2 class="breadcrumb_title text-lowercase">{{Auth::user()->name}}</h2>
                            </div>
                        </div>
                        <p>user</p>
                    </div>
                    <div class="row mt10">
                        <div class="col-lg-12">
                            <div class="copyright-widget text-center">
                                <p>© 2020 FindAHouse. Created By arnoldkk.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
