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
        <li>Associate Membership</li>
      </ul>
    </div>  
    


      <section>
        <div class="container pt-70 pb-40 membership">
            <div class="section-title text-center">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="mt-0 line-height-1  text-uppercase mb-10 text-black-333 text-theme-color-2" style="text-align: start">Associate <span class="text-theme-color-2"> Membership</span></h2>
                </div>
              </div>
            </div>  
            
            <div>
                <p>Association $1,500/year (non-profit $800)  </p>
                <p>Best for medium to large companies and organizations seeking a higher profile opportunity to market and demonstrate investment in the Superior community. Additional.</p> 
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-8">
                    <div class="membership-list">
                        <ul>
                            <li><i class="fa fa-check"></i>Access to business networking opportunities and resources, even if the member is not located within the chamber's geographical area of operation. This can be especially valuable for businesses with a global focus.</li>
                                <li><i class="fa fa-check"></i>Discounts on chamber events and other services, such as advertising and sponsorship opportunities.</li>
                                    <li><i class="fa fa-check"></i>Access to resources and services designed to support international business, such as market research, legal and financial advice, and networking opportunities with other international businesses.</li>
                        </ul>
                      </div>
                </div>

            </div>

            <div class="row mb-40">
                <div class="col-md-12 ">
                  <h2 class="mt-0 line-height-1 text-start text-capitalize mb-10 text-black-333">Associate Membership  <span class="text-theme-color-2"> Registration Form</span></h2>
                </div>
              </div>

              <div>
                <x-registration  amount="1500" plan="Corporate" />
              </div>

            </div>
        </section>




      @endsection
