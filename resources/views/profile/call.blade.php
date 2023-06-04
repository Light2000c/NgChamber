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
                            <li><a  href="{{ route('edit-profile') }}">My Profile</a></li>
                            <li ><a  href="{{ route('edit-address') }}">Address</a></li>
                            <li><a  href="{{ route('manage-product') }}">Products</a></li>
                            <li class="active"><a  href="{{ route('call-request') }}">Call Request</a></li>
                            <li><a  href="{{ route('wishlist') }}">Wishlist</a></li>
                        </ul>
                    </div>

                    <div class="col-md-9">
                        <div class="tab-contents">
                            <div id="overview" class="" style="margin-bottom: 25px;">
                                <h3>Call Request</h3>
                            </div>


                            <div class="row">
                                <div class="col-md-10">
                                    <div class="profile-box2 "style="margin-bottom: 25px; width: auto; height: 200px; ">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col">Request ID</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Phone Number</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <div>

                                                        <div class="alert alert-info">
                                                            <strong>Info!</strong> You don't have any call request yet.
                                                        </div>
                                                    </div>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
        </section>
    @endsection
