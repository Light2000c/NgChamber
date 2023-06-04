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
        <li>Small Business Membership</li>
      </ul>
    </div>  


      <section>
        <div class="container pt-70 pb-40 membership">
            <div class="section-title text-center">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="mt-0 line-height-1  text-uppercase mb-10 text-black-333 text-theme-color-2" style="text-align: start">Small Business <span class="text-theme-color-2"> Membership</span></h2>
                </div>
              </div>
            </div>  
            
            <div>
                <p>Small Business Membership $500/year (non-profit $300) </p>
                <p>Best for small to medium-sized businesses seeking Chamber access & promotional exposure. Additional Benefits Include.</p> 

            </div>

            <div class="row">
                <div class="col-sm-6 col-md-8">
                    <div class="membership-list">
                        <ul>
                          <li><i class="fa fa-check"></i>Support your company’s ribbon cuttings, grand openings, and open houses. </li>
                          <li><i class="fa fa-check"></i>Inclusion of your marketing materials in event guest bags (when available).</li>
                          <li><i class="fa fa-check"></i>Eligible to host Business After Hours events and sponsor other signature Chamber events. </li>
                          <li><i class="fa fa-check"></i>Opportunity to have a 5-minute introduction to the member business. </li>
                          <li><i class="fa fa-check"></i>Meeting with Chamber staff to strategize around Chamber resources and opportunities. </li>
                          <li><i class="fa fa-check"></i>Access to resources and services designed specifically for small businesses, including business planning assistance, access to capital, and marketing and branding support.</li>
                          <li><i class="fa fa-check"></i>Discounts on chamber events and other services, such as advertising and sponsorship opportunities.</li>
                          <li><i class="fa fa-check"></i>Networking opportunities with other small businesses and established businesses in the community.</li>
                        </ul>
                      </div>
                </div>

            </div>

            <div class="row mb-40">
                <div class="col-md-12 ">
                  <h2 class="mt-0 line-height-1 text-start text-capitalize mb-10 text-black-333">Small Business  <span class="text-theme-color-2"> Registration Form</span></h2>
                </div>
              </div>

              <div>
                <x-registration  amount="500" plan="Small" />
              </div>

            </div>
        </section>




      @endsection
