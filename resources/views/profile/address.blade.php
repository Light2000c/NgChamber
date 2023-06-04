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
                            <li class="active"><a  href="{{ route('edit-address') }}">Address</a></li>
                            <li><a  href="{{ route('manage-product') }}">Products</a></li>
                            <li><a  href="{{ route('call-request') }}">Call Request</a></li>
                            <li><a  href="{{ route('wishlist') }}">Wishlist</a></li>
                        </ul>
                    </div>

                    <div class="col-md-9">
                        <div class="tab-contents">
                            <div id="overview" class="" style="margin-bottom: 25px;">
                                <h3>Address</h3>
                            </div>

                            <div class="row">
                                <div class="col-md-10">
                                    <div class="profile-box2 " style="margin-bottom: 25px; width: auto;">

                                        <div class="">
                                            <div class="" style="display: flex; justify-content: space-between;">
                                                <h4>Product</h4>
                                                <button class="btn btn-sm">Save</button>
                                            </div>
                                            <div class="">

                                                <div class="form-group">
                                                    <label for="address">Address</label>
                                                    <input class="form-control" name="address" type="text"
                                                        value="{{ old('address') }}" placeholder="Address">
                                                        @error('address')
                                                            <small>{{ $message }}</small>
                                                        @enderror
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 form-group">
                                                        <label for="city">City</label>
                                                        <input class="form-control" name="city" type="text"  value="{{ old('city') }}"
                                                            placeholder="City">
                                                            @error('city')
                                                            <small>{{ $message }}</small>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-6 form-group">
                                                        <label for="state">State</label>
                                                        <input class="form-control" name="state" type="text"  value="{{ old('state') }}"
                                                            placeholder="State">
                                                            @error('state')
                                                            <small>{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6 form-group">
                                                        <label for="product_price">Country</label>
                                                        <input class="form-control" name="country" type="text"  value="{{ old('country') }}"
                                                            placeholder="Product Price">
                                                            @error('country')
                                                            <small>{{ $message }}</small>
                                                        @enderror
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
