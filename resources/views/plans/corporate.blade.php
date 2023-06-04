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
              <h2 class="font-28 text-white" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: bold;">MEMBERSHIP PLANS</h2>
            </div>
          </div>
        </div>
      </div>      
    </section>
    <div>
    <ul class="breadcrumb">
      <li><a href="{{ route('home') }}">Home</a></li>
      <li><a href="{{ route('plans') }}">Membership Plan</a></li>
      <li>Corporate Membership</li>
    </ul>
  </div>  


      <section>
        <div class="container pt-70 pb-40 membership">
            <div class="section-title text-center">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="mt-0 line-height-1  text-uppercase mb-10 text-black-333 text-theme-color-2" style="text-align: start">Corporate  <span class="text-theme-color-2"> Membership</span></h2>
                </div>
              </div>
            </div>  
            
            <div>
                <p>Corporate $1,500/year (non-profit $800)  </p>
                <p>Best for medium to large companies and organizations seeking a higher profile opportunity to market and demonstrate investment in the Superior community.</p> 
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-8">
                    <div class="membership-list">
                        <ul>
                          <li><i class="fa fa-check"></i>Featured once annually on the Chamber Facebook page.</li>
                          <li><i class="fa fa-check"></i>Opportunity to host a workshop promoted to Chamber members. </li>
                          <li><i class="fa fa-check"></i>Ability to participate in member-only committees.</li>
                          <li><i class="fa fa-check"></i>List “Hot Deals” on the Chamber website. </li>
                          <li><i class="fa fa-check"></i>List “Job Openings” on the Chamber website. </li>
                          <li><i class="fa fa-check"></i>Two invitations to the quarterly exclusive President’s Breakfast.</li>
                          <li><i class="fa fa-check"></i>Exclusive opportunities and event invitations throughout the year. </li>
                          <li><i class="fa fa-check"></i>Plaque recognizing Corporate Level Investor, appropriate for the office or retail display.</li>
                          <li><i class="fa fa-check"></i>Access to exclusive events and networking opportunities with other large businesses and influential leaders in the community.</li>
                          <li><i class="fa fa-check"></i>Personalized business support services, including government relations and public affairs, business research and analysis, and talent attraction and retention services.</li>
                          <li><i class="fa fa-check"></i>Increased visibility through enhanced marketing and promotional support, including logo placement on the chamber's website, marketing materials, and event signage.</li>
                        </ul>
                      </div>
                </div>

            </div>

            <div class="row mb-40">
                <div class="col-md-12 ">
                  <h2 class="mt-0 line-height-1 text-start text-capitalize mb-10 text-black-333">Corporate Membership  <span class="text-theme-color-2"> Registration Form</span></h2>
                </div>
              </div>

              <div>
                <x-registration  amount="1500" plan="Corporate" />
              </div>

            </div>
        </section>




      @endsection
