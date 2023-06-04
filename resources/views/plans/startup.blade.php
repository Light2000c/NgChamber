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
      <li>Start-Up Membership</li>
    </ul>
  </div>  


      <section>
        <div class="container pt-70 pb-40 membership">
            <div class="section-title text-center">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="mt-0 line-height-1  text-uppercase mb-10 text-black-333 text-theme-color-2" style="text-align: start">Start-up <span class="text-theme-color-2"> Membership</span></h2>
                </div>
              </div>
            </div>  
            
            <div>
                <p>Start-up Membership $275/year (non-profit $175)  </p>
                <p>Best for solopreneurs and professionals seeking modest visibility and networking. Students and Young Professionals may receive a discount with proof of age (Government issue ID only). </p> 
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-8">
                    <div class="membership-list">
                        <h4>Visibility</h4>
                        <ul>
                          <li><i class="fa fa-check"></i>Business name and description, website, and social media links on our website directory.</li> 
                          <li><i class="fa fa-check"></i>Welcome to Chamber’s e-newsletter and Facebook page.</li> 
                          <li><i class="fa fa-check"></i>Invitation to participate in special events and programs. </li> 
                          <li><i class="fa fa-check"></i>Opportunity to offer discounts to fellow Chamber members.</li>  
                          <li><i class="fa fa-check"></i>Discounts for paid events.</li>  
                    </ul>

                    <h4>Resources</h4>
                    <ul>
                      <li><i class="fa fa-check"></i>Advocacy for business interests at local, regional, and global levels (as applicable).</li> 
                      <li><i class="fa fa-check"></i>Monthly e-newsletter with Chamber events and community news. </li> 
                      <li><i class="fa fa-check"></i>Member rates for all Chamber events for your representative. </li> 
                      <li><i class="fa fa-check"></i>Referrals for Chamber staff and volunteers. </li> 
                      <li><i class="fa fa-check"></i>Various events where you can interact with other members. </li> 
                      <li><i class="fa fa-check"></i>Quarterly multi-chamber office events where you can network with members from other City offices. members (Virtually/In-person as applicable).</li> 
                      <li><i class="fa fa-check"></i>Invitation to a new member event in your first year.   </li> 
                </ul>

                <h4>Additional benefits includes</h4>
                <ul>
                  <li><i class="fa fa-check"></i>Access to business networking opportunities with other members and stakeholders in the region or globally.</li>
                  <li><i class="fa fa-check"></i>Access to a range of business resources, including market research, legal and financial advice, and training and development programs.</li>
                  <li><i class="fa fa-check"></i>Advocacy support on issues that impact the business community. We would work with local and regional governments to advocate for policies that benefit businesses in the community.</li> 
            </ul>

                    </div>
                </div>

            </div>

            <div class="row mb-40">
                <div class="col-md-12 ">
                  <h2 class="mt-0 line-height-1 text-start text-capitalize mb-10 text-black-333">Start-up<span class="text-theme-color-2"> Registration Form</span></h2>
                </div>
              </div>

              <div>
                <x-registration  amount="275" plan="Start-up" />
              </div>

            </div>
        </section>




      @endsection
