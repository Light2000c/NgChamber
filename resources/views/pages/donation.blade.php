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
                            <h2 class="font-28 text-white"
                                style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: bold;">
                                DONATION</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div>
            <ul class="breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Donation</li>
            </ul>
        </div>


        @if (session('info'))
            @php
                alert()
                    ->info('info', session('info'))
                    ->persistent('Dismiss');
            @endphp
        @endif

        <section>

            <div class="container mt-30 mb-30 pt-30 pb-30">

                {{-- <div class="section-title text-center">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="mt-0 line-height-1 text-center text-capitalize mb-10 text-black-333">
                        <span class="text-theme-color-2"> DONATIONS</span></h2>
                </div>
            </div>
        </div> --}}

                <div class="row">

                    <div class="col-md-6" style="">

                        <div>
                            <p
                                style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 17px; font-weight: bold;">
                                - Support NiDCC with your donations</p>
                        </div>

                        <h3 class="text-theme-color-2"
                            style="'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 40px;">Every
                            Little Contribution Leads To A Big Change</h3>

                        <p
                            style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 18px;">
                            Your contribution can go a long way in supporting our chamber of commerce. Every dollar counts,
                            and your donation, no matter the amount, helps us make a difference.</p>
                        <p
                            style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 18px;">
                            Consider becoming a monthly donor and provide sustained support to our ongoing projects. Monthly
                            contributions offer stability and enable us to plan for the future with confidence.</p>

                        <p
                            style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 18px;">
                            Spread the word about our organization and create your own fundraising campaign. Engage your
                            friends, family, and social network to amplify the impact of your generosity.</p>
                    </div>

                    <div class="cols-sm-6 col-md-5" style="background-image: url('logos/empty-banner.jpg')">

                        <div style="padding: 15px";>
                            <div style="">
                                <form action="{{ route('donation-pay') }}" method="post">
                                    @csrf
                                    <div class="form-group">

                                        <div class="form-group">
                                            <label for=""
                                                style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 17px; font-weight:bold; color: #4D7902;">Full
                                                Name</label>
                                            <input class="form-control" type="text" name="name"
                                                value="{{ old('name') }}" placeholder="Full Name">
                                            @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>


                                        <div class="form-group">
                                            <label for=""
                                                style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 17px; font-weight:bold; color: #4D7902;">
                                                Email</label>
                                            <input class="form-control" type="email" name="email"
                                                value="{{ old('email') }}" placeholder="Enter Your Email">
                                            @error('email')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>


                                        <div class="form-group">
                                            <label for=""
                                                style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 17px; font-weight:bold; color: #4D7902;">Amount</label>
                                            <input class="form-control" type="number" name="amount"
                                                value="{{ old('amount') }}" placeholder="Amount in USD">
                                            @error('amount')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group" style="margin-top: 20px;">
                                            <button class="btn btn-large" type="submit"
                                                style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 17px; font-weight:bold; background-color: #4D7902; color: whitesmoke;">Donate
                                                Now</button>
                                        </div>
                                        <input type="hidden" name="currency" value="NGN">
                                        <input type="hidden" name="metadata" value=""> {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                        <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                                        {{-- required --}}

                                        {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        <div class="alert alert-success" role="alert" style=" margin-top: 30px;">
                                            <h5
                                                style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 17px; font-weight:bold;">
                                                Donate Using Bank Transfer</h5>
                                            <div>
                                                <div
                                                    style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 17px; color: black;">
                                                    <p><b>NiDCC Business Bank Account </b> </p>
                                                    <p><b>Account Number: </b> 446053370079</p>
                                                    <p><b>Bank: </b> Bank of America</p>
                                                    <p><b>ACH Routing Number </b> 052001633</p>
                                                    <p><b>Office Address </b> 3519 International CT NW Washington, DC 20008</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
        </section>
    @endsection
