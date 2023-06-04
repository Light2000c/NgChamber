@extends('layouts.user.app')

@section('content')
    <!-- Start main-content -->
    <div class="main-content" ng-app="profileApp" ng-controller="profileCtrl">
        <!-- Section: inner-header -->
        <section class="inner-header divider parallax layer-overlay overlay-dark-2" data-bg-img="logos/simple3.jpeg">
            <div class="container pt-60 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="title text-white">Profile</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>

            <div class="container mt-30 mb-30 pt-30 pb-30">
                <div class="row">
                    <div class="col-md-3 p-15">
                        <div class="pb-15">
                            <h4>Welcome Clinton!</h4>
                            <p>Welcome to your profile page</p>
                            <p>Manage your products, subscriptions, wishlist.</p>
                        </div>

                        <ul class="nav nav-pills nav-stacked">
                            <li ><a href="{{ route('profile') }}">Overview</a></li>
                            <li ><a  href="{{ route('edit-profile') }}">My Profile</a></li>
                            <li ><a  href="{{ route('edit-address') }}">Address</a></li>
                            <li ><a  href="{{ route('manage-product') }}">Products</a></li>
                            <li ><a  href="{{ route('call-request') }}">Call Request</a></li>
                            <li class="active"><a  href="{{ route('wishlist') }}">Wishlist</a></li>
                        </ul>
                    </div>

                    <div class="col-md-9">
                        <div class="tab-contents">
                            <div id="overview" class="" style="margin-bottom: 25px;">
                                <h3>Wishlist</h3>
                            </div>


                            <div class="row">
                                <div class="col-md-10">
                                    <div class="profile-box2 pt-30 pb-30"style="margin-bottom: 25px; width: auto;">
                                    <div>

                                <div class="row" style="border: 1px #4D7902 solid; padding: 10px; margin-bottom: 15px; margin-left: 15px; margin-right: 15px;">
                                    <div class="col-md-3 align-self-center">
                                        <img class="img-fluid" src="/products/1679054339-.png" alt="" srcset="" style="width: 100px; height: 100px;">
                                    </div>
                                    <div class="col-md-7">
                                        <h5>Black One Hand Bag</h5>
                                        <p>$60</p>
                                    </div>
                                    <div class="col-md-2 align-self-center">
                                        <i class="fa fa-close" style="font-size: 25px; color: #7C9C47;"></i>
                                    </div>
                                </div>

                                <div class="row" style="border: 1px #4D7902 solid; padding: 10px; margin-bottom: 15px;  margin-left: 15px; margin-right: 15px;">
                                    <div class="col-md-3 align-self-center">
                                        <img class="img-fluid" src="/products/1679748677-.jpg" alt="" srcset="" style="width: 100px; height: 100px; ">
                                    </div>
                                    <div class="col-md-7">
                                        <h5>Philip Blender with Multiple Cups - Black</h5>
                                        <p>$500</p>
                                    </div>
                                    <div class="col-md-2 align-self-center">
                                        <i class="fa fa-close" style="font-size: 25px; color: #7C9C47;"></i>
                                    </div>
                                </div>


                                <div class="row" style="border: 1px #4D7902 solid; padding: 10px; margin-bottom: 15px;  margin-left: 15px; margin-right: 15px;">
                                    <div class="col-md-3 align-self-center">
                                        <img class="img-fluid" src="/products/1679751105-.jpg" alt="" srcset="" style="width: 100px; height: 100px;">
                                    </div>
                                    <div class="col-md-7">
                                        <h5>Black Spinning Comfortable Chair</h5>
                                        <p>$300</p>
                                    </div>
                                    <div class="col-md-2 align-self-center">
                                        <i class="fa fa-close" style="font-size: 25px; color: #7C9C47;"></i>
                                    </div>
                                </div>

                            </div>

                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
        </section>
    @endsection
