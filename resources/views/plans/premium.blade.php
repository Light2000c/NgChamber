@extends('layouts.user.app')

@section('content')
    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider parallax layer-overlay overlay-dark-2" data-bg-img="/logos/simple3.jpeg">
            <div class="container pt-60 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="font-28 text-white"
                                style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: bold;">
                                MEMBERSHIP PLANS</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div>
            <ul class="breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('plans') }}">Membership Plan</a></li>
                <li>Premium Membership</li>
            </ul>
        </div>


        <section>
            <div class="container pt-70 pb-40 membership">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="mt-0 line-height-1  text-uppercase mb-10 text-black-333 text-theme-color-2"
                                style="text-align: start">Premium <span class="text-theme-color-2"> Membership</span></h2>
                        </div>
                    </div>
                </div>

                <div>
                    <p>Premium Investor $3,000/year (non-profit $1,800) </p>
                    <p>Our elite membership level provides the highest visibility and indication of community investment.
                        Premier access and influence. Additional Benefits Include.</p>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-md-8">
                        <div class="membership-list">
                            <ul>
                                <li><i class="fa fa-check"></i>Featured once annually on the Chamber's Facebook page,
                                    Twitter and Instagram.
                                <li><i class="fa fa-check"></i>First crack at sponsorships for Chamber’s signature events.
                                <li><i class="fa fa-check"></i>Logo appears on Chamber website home page, and banners.
                                <li><i class="fa fa-check"></i>Logo appears on Ambassadors’ t-shirts.
                                <li><i class="fa fa-check"></i>Your logo repeats on pages throughout the Chamber’s event
                                    banner.
                                <li><i class="fa fa-check"></i>Annual meeting with President/CEO and Board Officers.
                                <li><i class="fa fa-check"></i>Opportunity to present award at the Annual Awards event.
                                    Company logo Welcome bags (When available). Annual feature in Chamber’s e-newsletter.
                                </li>
                                <li><i class="fa fa-check"></i>Preferred seating at in-person Chamber events. VIP tickets
                                    first right of purchase for special events. </li>
                                <li><i class="fa fa-check"></i>Plaque recognizing Premium Investor Level, appropriate for
                                    the office or retail display.</li>
                                <li><i class="fa fa-check"></i>Premium access to exclusive events and networking
                                    opportunities with influential leaders in the community. </li>
                                <li><i class="fa fa-check"></i>Personalized business support services, such as marketing and
                                    public relations support, legal and financial advice, and custom research services.</li>
                                <li><i class="fa fa-check"></i>Increased visibility through enhanced marketing and
                                    promotional support.</li>
                                <li><i class="fa fa-check"></i>Discounts on chamber events and other services, such as
                                    advertising and sponsorship opportunities.</li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="row mb-40">
                    <div class="col-md-12 ">
                        <h2 class="mt-0 line-height-1 text-start text-capitalize mb-10 text-black-333">Premium Membership
                            <span class="text-theme-color-2"> Registration Form</span></h2>
                    </div>
                </div>

                <div>
                    <x-registration amount="3000" plan="Premium" />
                </div>

            </div>
        </section>
    @endsection
