@extends('Layouts.client')
@section('content')
    <!-- Inner Page Breadcrumb -->
    <section class="inner_page_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="breadcrumb_content">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                        <h4 class="breadcrumb_title">Contact Us</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Contact -->
    <section class="our-contact pb0 bgc-f7">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-8">
                    <div class="form_grid">
                        <h4 class="mb5">Send Us An Email</h4>
                        <p>Talk to Us in case of anything, we are honored to listen to you.</p>
                        <form action="{{url('mail')}}" class="contact_form">
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_name" name="name" class="form-control" required="required" type="text" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_email" name="email" class="form-control required email" required="required" type="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_phone" name="phone" class="form-control required phone" required="required" type="phone" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_subject" name="mail_subject" class="form-control required" required="required" type="text" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea id="form_message" name="mail_body" class="form-control required" rows="8" required="required" placeholder="Your Message"></textarea>
                                    </div>
                                    <div class="form-group mb0">
                                        <button type="submit" class="btn btn-lg btn-thm">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <div class="contact_localtion">
                        <h4>Contact Us</h4>
                        <p>In case you Need Us to Meet and Talk directly with You, Here are our contacts.</p>
                        <div class="content_list">
                            <h5>Address</h5>
                            <p>Kampala Rd Madison, <br>Uganda</p>
                        </div>
                        <div class="content_list">
                            <h5>Phone</h5>
                            <p>+256781116999</p>
                        </div>
                        <div class="content_list">
                            <h5>Mail</h5>
                            <p><a href="https://grandetest.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9ef7f0f8f1def8f7f0faf6f1ebedfbb0fdf1f3">[email&#160;protected]</a></p>
                        </div>
                        <h5>Follow Us</h5>
                        <ul class="contact_form_social_area">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
