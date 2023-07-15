@extends('layouts.user.app')

@section('content')
    <!-- Start main-content -->
    <div class="main-content" ng-app="profileApp" ng-controller="profileCtrl">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-2" data-bg-img="/logos/simple3.jpeg">
        <div class="container pt-60 pb-60">
          <!-- Section Content -->
          <div class="section-content">
            <div class="row">
              <div class="col-md-12 text-center">
                <h2 class="font-28 text-white" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: bold;">PROFILE</h2>
              </div>
            </div>
          </div>
        </div>      
      </section>
      <div>
      <ul class="breadcrumb">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li>Profile</li>
        <li>Edit Profile</li>
      </ul>
    </div>  

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
                            <li ><a  href="{{ route('transactions') }}">Transactions</a></li>
                            {{-- <li ><a  href="{{ route('edit-address') }}">Address</a></li>
                            <li><a  href="{{ route('manage-product') }}">Products</a></li>
                            <li ><a  href="{{ route('call-request') }}">Call Request</a></li>
                            <li><a  href="{{ route('wishlist') }}">Wishlist</a></li> --}}
                        </ul>
                    </div>

                    <div class="col-md-9">
                        <div class="tab-contents">
                            <div id="overview" class="" style="margin-bottom: 25px;">
                                <h3 style="color: #4D7902;">My Profile</h3>
                            </div>

                            <div class="row">
                                <div class="col-md-10">
                                    <div class="profile-box2 " style="margin-bottom: 25px; width: auto;">

                                        <form action="{{ route('edit-profile') }}" method="post">
                                            @csrf
                                            @method('put')
                                        <div class="">
                                            <div class="" style="display: flex; justify-content: space-between; margin-bottom: 20px;">
                                                <h4 style="color: #4D7902;">Personal Information</h4>
                                                <button class="btn btn-sm">Save</button>
                                            </div>
                                            <div class="">
                                                <div class="row">
                                                    <div class="col-md-6 form-group">
                                                        <label for="fullname">Full Name</label>
                                                        <input class="form-control" name="fullname" type="text"
                                                            value="{{ Auth::user()->fullname }}">
                                                            @error('fullname')
                                                                <small class="text-danger">{{ $message }}</small>
                                                            @enderror
                                                    </div>

                                                    <div class="col-md-6 form-group">
                                                        <label for="fullname">Email</label>
                                                        <input class="form-control" name="email" type="email"
                                                            value="{{ Auth::user()->email }}">
                                                            @error('email')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 form-group">
                                                        <label for="fullname">Phone</label>
                                                        <input class="form-control" name="phone" type="tel" value="{{ Auth::user()->phone }}">
                                                    </div>

                                                    <div class="col-md-6 form-group">
                                                        <label for="fullname">Address</label>
                                                        <input class="form-control" name="address"  type="text" value="{{ Auth::user()->address }}">
                                                    </div>
                                                </div>

                                           
                                                <div class="row">
                                                    <div class="col-md-6 form-group">
                                                        <label for="fullname">City</label>
                                                        <input class="form-control" name="city" type="text" value="{{ Auth::user()->city }}">

                                                    </div>

                                                    <div class="col-md-6 form-group">
                                                        <label for="fullname">State</label>
                                                        <input class="form-control" name="state"  type="text" value="{{ Auth::user()->state }}">
                                                    </div>
                                                </div>

                                                <div class="row" style="margin-bottom: 15px;">
                                                    <div class="col-md-8 form-group">
                                                        <label for="fullname">Country</label>
                                                        <input class="form-control" name="country" type="text" value="{{ Auth::user()->country }}">
                                                    </div>

                                                </div>

                                           


                                                <div class="" style="display: flex; justify-content: space-between; margin-bottom: 20px;">
                                                    <h4 style="color: #4D7902;">Business Information</h4>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6 form-group">
                                                        <label for="fullname">Business Name</label>
                                                        <input class="form-control" name="business_name" type="text"
                                                            value="{{ Auth::user()->business_name }}">
                                                            @error('business_name')
                                                                <small class="text-danger">{{ $message }}</small>
                                                            @enderror
                                                    </div>

                                                    <div class="col-md-6 form-group">
                                                        <label for="fullname">Business Email</label>
                                                        <input class="form-control" name="business_email" type="email"
                                                            value="{{ Auth::user()->business_email }}">
                                                            @error('business_email')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 form-group">
                                                        <label for="fullname">Business Phone</label>
                                                        <input class="form-control" name="business_phone" type="tel" value="{{ Auth::user()->business_phone }}">
                                                    </div>

        
                                                </div>

                                                <div class="form-group">
                                                    <label for="fullname">Bussiness Address</label>
                                                    <input class="form-control" name="business_address"  type="text" value="{{ Auth::user()->business_address }}">
                                                </div>

                                           
                                                <div class="row">
                                                        <div class="col-md-6 form-group">
                                                            <label for="city">Business City</label>
                                                            <input class="form-control" name="business_city" type="text" value="{{ Auth::user()->business_city }}">
                                                        </div>


                                                    <div class="col-md-6 form-group">
                                                        <label  for="fullname">Business State</label>
                                                        <input class="form-control" name="business_state"  type="text" value="{{ Auth::user()->business_state }}">
                                                    </div>
                                                </div>

                                        
                                                    <div class=" form-group" style="margin-bottom: 15px;">
                                                        <label for="fullname">Business Country</label>
                                                        <input class="form-control" name="business_country" type="text" value="{{ Auth::user()->business_country }}">
                                                    </div>

                                   

                                                    <div class=" form-group" style="margin-bottom: 15px;">
                                                        <label for="fullname">Business Type</label>
                                                        <input class="form-control" name="business_type" type="text" value="{{ Auth::user()->business_type }}">
                                                    </div>


                                           
                                                    <div class=" form-group" style="margin-bottom: 15px;">
                                                        <label for="fullname">Business Industry</label>
                                                        <input class="form-control" name="business_industry" type="text" value="{{ Auth::user()->business_industry }}">
                                                    </div>
                                             


                                        

                                               
                                                    <div class="form-group" style="margin-bottom: 20px">
                                                        <label for="fullname">Business Number</label>
                                                        <input class="form-control" name="business_number"  type="text" value="{{ Auth::user()->business_number }}">
                                                        @error('business_number')
                                                        <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                </div>


                                            </div>
                                        </div>
                                        </form>
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



