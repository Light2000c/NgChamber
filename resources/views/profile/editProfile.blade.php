@extends('layouts.user.app')

@section('content')
    <!-- Start main-content -->
    <div class="main-content" ng-app="profileApp" ng-controller="profileCtrl">
        <!-- Section: inner-header -->
        <section class="inner-header divider parallax layer-overlay overlay-dark-8" data-bg-img="images/bg/bg6.jpg">
            <div class="container pt-60 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="title text-white">Home</h2>
                            <ol class="breadcrumb text-center text-black mt-10">
                                <li class="active text-white">Profile</li>
                            </ol>
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
                            <li class="active"><a  href="{{ route('edit-profile') }}">My Profile</a></li>
                            <li ><a  href="{{ route('edit-address') }}">Address</a></li>
                            <li><a  href="{{ route('manage-product') }}">Products</a></li>
                            <li ><a  href="{{ route('call-request') }}">Call Request</a></li>
                            <li><a  href="{{ route('wishlist') }}">Wishlist</a></li>
                        </ul>
                    </div>

                    <div class="col-md-9">
                        <div class="tab-contents">
                            <div id="overview" class="" style="margin-bottom: 25px;">
                                <h3>My Profile</h3>
                            </div>

                            <div class="row">
                                <div class="col-md-10">
                                    <div class="profile-box2 " style="margin-bottom: 25px; width: auto; height: 350px; ">

                                        <div class="">
                                            <div class="" style="display: flex; justify-content: space-between;">
                                                <h4>Personal Infromation</h4>
                                                <button class="btn btn-sm">Save</button>
                                            </div>
                                            <div class="">
                                                <div class="row">
                                                    <div class="col-md-6 form-group">
                                                        <label for="fullname">Full Name</label>
                                                        <input class="form-control" type="text"
                                                            value="{{ Auth::user()->fullname }}">
                                                    </div>

                                                    <div class="col-md-6 form-group">
                                                        <label for="fullname">Email</label>
                                                        <input class="form-control" type="email"
                                                            value="{{ Auth::user()->email }}">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 form-group">
                                                        <label for="fullname">Phone</label>
                                                        <input class="form-control" type="tel" value="">
                                                    </div>

                                                    <div class="col-md-6 form-group">
                                                        <label for="fullname">Business Name</label>
                                                        <input class="form-control" type="text" value="">
                                                    </div>
                                                </div>

                                           
                                                <div class="row">
                                                    <div class="col-md-6 form-group">
                                                        <label for="fullname">Website Address</label>
                                                        <input class="form-control" type="tel" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-10">
                                    <div class="profile-box2 " style="margin-bottom: 25px; width: auto; height: 200px; ">

                                        <div class="">
                                            <div class=""
                                                style="display: flex; justify-content: space-between; margin-bottom: 25px;">
                                                <h4>Change Password</h4>
                                                <button class="btn btn-sm">Save</button>
                                            </div>
                                            <div class="">
                                                <div class="row">
                                                    <div class="col-md-4 form-group">
                                                        <input class="form-control" type="password"
                                                            placeholder="Current Password">
                                                    </div>

                                                    <div class="col-md-4 form-group">
                                                        <input class="form-control" type="password"
                                                            placeholder="New Password">
                                                    </div>

                                                    <div class="col-md-4 form-group">
                                                        <input class="form-control" type="password"
                                                            placeholder="Confirm New Password">
                                                    </div>
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
