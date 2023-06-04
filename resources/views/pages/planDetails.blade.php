@extends('layouts.user.app')

@section('content')
    <!-- Start main-content -->
    <div class="main-content">
      <!-- Section: inner-header -->
      <section class="inner-header divider parallax layer-overlay overlay-dark-2" data-bg-img="/logos/simple3.jpeg">
        <div class="container pt-70 pb-20">
          <!-- Section Content -->
          <div class="section-content">
            <div class="row">
              <div class="col-md-12 text-center">
                <h2 class="title text-white">Plans</h3>
              </div>
            </div>
          </div>
        </div>
      </section>


  @if($plan == 'individual')
      <section>
        <div class="container pt-70 pb-40">
            <div class="section-title text-center">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="mt-0 line-height-1  text-uppercase mb-10 text-black-333 text-theme-color-2" style="text-align: start">Individual Membership <span class="text-theme-color-2"> Plan</span></h2>
                </div>
              </div>
            </div>  
            
            <div>
                <p>Individual Membership $275/year (non-profit $175)</p>
                <p>Best for solopreneurs and professionals seeking modest visibility and networking. Students and Young professionals under 25 yrs old, receive a discount of 50% with proof of age (Government issue ID only). One representative is registered as a Chamber member.</p> 
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-8">
                    <div class="membership-list">
                        <ul>
                            <li><i class="fa fa-check"></i> Business name and description, website, and social media links on our website directory </li>
                            <li><i class="fa fa-check"></i> Post your events on the Chamber’s online Calendar of Events </li>
                            <li><i class="fa fa-check"></i> Membership certificate, window sticker, and digital “Chamber Member” artwork rights </li>
                            <li><i class="fa fa-check"></i> Welcome in Chamber’s e-newsletter and on Facebook page </li>
                            <li><i class="fa fa-check"></i> Invitation to participate in special events and programs </li>
                            <li><i class="fa fa-check"></i> Opportunity to offer discounts to fellow Chamber members </li>
                            <li><i class="fa fa-check"></i> Discounts for paid events</li>
                            <li><i class="fa fa-check"></i> Advocacy for business interests at local, regional, and state levels </li>
                            <li><i class="fa fa-check"></i> Monthly e-newsletter with Chamber events and community news </li>
                            <li><i class="fa fa-check"></i> Member rates for all Chamber events for your representative </li>
                            <li><i class="fa fa-check"></i> Referrals from Chamber staff and volunteers </li>
                            <li><i class="fa fa-check"></i> 5 posting of company press releases and events on NiDCC website Connections </li>
                            <li><i class="fa fa-check"></i> Various events where you can interact with other members </li>
                            <li><i class="fa fa-check"></i> Quarterly multi-chamber offices events where you can network with members from other City-office members </li>
                            <li><i class="fa fa-check"></i> Invitation to a new member event in your first year </li>
                        </ul>
                      </div>
                </div>


                <div class="col-sm-6 col-md-4" style="">
                  <div class="schedule-box maxwidth500 membership-box bg-white mb-30" style="height: 300px; padding: 10px; display: flex; flex-direction: column; justify-content: space-between;">
                    <div> 
                    <h4 class="" style="font-weight: bolder;  color: #4D7902;">Individual Membership Plan </h4>
                       <h4>$275.00</h4>
                       <p>Pay with:</p>
                      </div>  
                       
                      <div class="">
                        <div>
                          <a href="{{ route('pay-with-paypal', 'individual') }}" class="btn btn-large btn-primary " style="width: 100%; margin-bottom: 15px;">Continue With Paypal</a>
                        </div>
                        <div>
                          <a href="{{ route('paystack', 'individual') }}" class="btn btn-large btn-primary" style="width: 100%; margin-bottom: 15px;">Continue With Paystack</a>
                        </div>
                        <div>
                          <a class="btn btn-large btn-primary" style="width: 100%; margin-bottom: 15px;">Continue With Stripe</a>
                        </div>

                      </div>
                 
                       
         
                   </div>
                   </div>
            </div>

        </section>
        @endif


        @if($plan == 'bronze')
        <section>
          <div class="container pt-70 pb-40">
              <div class="section-title text-center">
                <div class="row">
                  <div class="col-md-12">
                    <h2 class="mt-0 line-height-1  text-uppercase mb-10 text-black-333 text-theme-color-2" style="text-align: start">Bronze Membership <span class="text-theme-color-2"> Plan</span></h2>
                  </div>
                </div>
              </div>  
              
              <div>
                  <p>Bronze Membership $425/year (non-profit $300) </p>
                  <p>Best for small to medium-sized businesses seeking Chamber access & promotional exposure. Entrepreneurs and startup receive a 25% discount on membership dues. Additional Benefits Include… </p> 
              </div>
  
              <div class="row">
                  <div class="col-sm-6 col-md-8">
                      <div class="membership-list">
                          <ul>
                            <li><i class="fa fa-check"></i> Enhanced listing on website directory including logo and second category </li>
                            <li><i class="fa fa-check"></i> Support on your company’s ribbon-cuttings, grand-openings and open houses </li>
                            <li><i class="fa fa-check"></i> Free inclusion of your marketing materials in quarterly NiDCC newsletter </li>
                            <li><i class="fa fa-check"></i> Free inclusion of your marketing materials in event guest bags (when available) </li>
                            <li><i class="fa fa-check"></i>Eligible to host Business After Hours events and sponsor other signature Chamber events </li>
                            <li><i class="fa fa-check"></i> Eligible to place ads in the e-newsletter </li>
                            <li><i class="fa fa-check"></i> Opportunity to have a 30-minute introduction of the member business </li>
                            <li><i class="fa fa-check"></i> One-time use email list or mailing labels for your marketing purposes </li>
                            <li><i class="fa fa-check"></i> Meeting with Chamber staff to strategize around Chamber resources and opportunities </li>
                          </ul>
                        </div>
                  </div>
  
                  <div class="col-sm-6 col-md-4" style="">
                    <div class="schedule-box maxwidth500 membership-box bg-white mb-30" style="height: 300px; padding: 10px">
                         <h4 class="" style="font-weight: bolder;  color: #4D7902;">Bronze Membership Plan </h4>
                         <p style="font-weight: bolder;"><h4> $425/yearly</h4></p>
                         <p>Pay with:</p>
                         
                         <div class="" style="display: flex; margin-bottom: 10px;">
                          <div style="margin: 10px">
                      <div class="" style="display: flex; border: 1px #4D7902 solid; padding: 10px; border-radius: 12px;">
                          <div style="margin-right: 10px;"><input type="radio" name="pay" id=""></div>
                          <img src="/logos/paystack.svg" alt="" srcset="" width="80" height="50">
                        </div>
                        <small class="" style="text-align: center;">Paystack</small>
                      </div>
  
                      <div style="margin: 10px">
                        <div class="" style="display: flex; border: 1px #4D7902 solid; padding: 10px; border-radius: 12px;">
                          <div style="margin-right: 10px;"><input type="radio" name="pay" id=""></div>
                          <img src="/logos/stripe.svg" alt="" srcset="" width="80" height="50">
                        </div>
                        <small class="text-center" style="text-align: center;">Stripe</small>
                      </div>
                      </div>
                      
                      <div class="">
                          <a href="{{ route('paystack', 'bronze') }}" class="btn btn-md" style="background-color: #4D7902; color: whitesmoke;">Proceed To Payment</a>
                      </div>
           
                     </div>
                     </div>
              </div>
  
          </section>
          @endif




          @if($plan == 'gold')
          <section>
            <div class="container pt-70 pb-40">
                <div class="section-title text-center">
                  <div class="row">
                    <div class="col-md-12">
                      <h2 class="mt-0 line-height-1  text-uppercase mb-10 text-black-333 text-theme-color-2" style="text-align: start">Gold Membership <span class="text-theme-color-2"> Plan</span></h2>
                    </div>
                  </div>
                </div>  
                
                <div>
                    <p>Gold Investor $1,200/year (non-profit $800) </p>
                    <p>Best for medium to large companies and organizations seeking a higher profile opportunity to market and demonstrate investment in the Superior community. Additional Benefits Include… </p> 
                </div>
    
                <div class="row">
                    <div class="col-sm-6 col-md-8">
                        <div class="membership-list">
                            <ul>
                                <li><i class="fa fa-check"></i>  Featured once annually on Chamber Facebook page 
                                    <li><i class="fa fa-check"></i>  Up to two free one-time use email list or mailing labels for your marketing purposes </li>
                                    <li><i class="fa fa-check"></i>  Access to the Members directory </li>
                                    <li><i class="fa fa-check"></i>  Opportunity to host a workshop promoted to Chamber members </li>
                                    <li><i class="fa fa-check"></i>  Ability to participate in member-only committees </li>
                                    <li><i class="fa fa-check"></i>  Four free tickets to Annual Awards event </li>
                                    <li><i class="fa fa-check"></i>  Free table at annual Business Expo (if available) </li>
                                    <li><i class="fa fa-check"></i>  List “Hot Deals” on Chamber website </li>
                                    <li><i class="fa fa-check"></i>  List “Job Openings” on Chamber website </li>
                                    <li><i class="fa fa-check"></i>  Two invitations to quarterly exclusive President’s Breakfast </li>
                                    <li><i class="fa fa-check"></i>  Exclusive opportunities and event invitations throughout the year </li>
                                    <li><i class="fa fa-check"></i>  Plaque recognizing Gold Investor Level, appropriate for office or retail display. </li>
                            </ul>
                          </div>
                    </div>
    
                    <div class="col-sm-6 col-md-4" style="">
                        <div class="schedule-box maxwidth500 membership-box bg-white mb-30" style="height: 300px; padding: 10px">
                             <h4 class="" style="font-weight: bolder;  color: #4D7902;">Individual Membership Plan </h4>
                             <p style="font-weight: bolder;"><h4> $1,200/yearly</h4></p>
                             <p>Pay with:</p>
                             
                             <div class="" style="display: flex; margin-bottom: 10px;">
                              <div style="margin: 10px">
                          <div class="" style="display: flex; border: 1px #4D7902 solid; padding: 10px; border-radius: 12px;">
                              <div style="margin-right: 10px;"><input type="radio" name="pay" id=""></div>
                              <img src="/logos/paystack.svg" alt="" srcset="" width="80" height="50">
                            </div>
                            <small class="" style="text-align: center;">Paystack</small>
                          </div>
      
                          <div style="margin: 10px">
                            <div class="" style="display: flex; border: 1px #4D7902 solid; padding: 10px; border-radius: 12px;">
                              <div style="margin-right: 10px;"><input type="radio" name="pay" id=""></div>
                              <img src="/logos/stripe.svg" alt="" srcset="" width="80" height="50">
                            </div>
                            <small class="text-center" style="text-align: center;">Stripe</small>
                          </div>
                          </div>
                          
                          <div class="">
                              <a href="{{ route('paystack', 'gold') }}" class="btn btn-md" style="background-color: #4D7902; color: whitesmoke;">Proceed To Payment</a>
                          </div>
               
                         </div>
                         </div>
                </div>
    
            </section>
            @endif




            @if($plan == 'platinum')
            <section>
              <div class="container pt-70 pb-40">
                  <div class="section-title text-center">
                    <div class="row">
                      <div class="col-md-12">
                        <h2 class="mt-0 line-height-1  text-uppercase mb-10 text-black-333 text-theme-color-2" style="text-align: start">Platinum Membership <span class="text-theme-color-2"> Plan</span></h2>
                      </div>
                    </div>
                  </div>  
                  
                  <div>
                      <p>Platinum Investor $3,000/year (non-profit $1,800) </p>
                      <p>Our top membership level providing highest visibility and indication of community investment. Premier access and influence. Additional Benefits Include… </p> 
                  </div>
      
                  <div class="row">
                      <div class="col-sm-6 col-md-8">
                          <div class="membership-list">
                              <ul>
                                <li><i class="fa fa-check"></i> Featured once annually on Chamber Facebook page, twitter and Instagram </li>
                                <li><i class="fa fa-check"></i> First crack at sponsorships for Chamber’s signature events </li>
                                <li><i class="fa fa-check"></i> Logo appears on Chamber website home page, banners </li>
                                <li><i class="fa fa-check"></i> Logo appears on Ambassadors’ t-shirts </li>
                                <li><i class="fa fa-check"></i> Your logo repeats on pages throughout the Chamber’s website </li>
                                <li><i class="fa fa-check"></i> Annual meeting with Executive Director and Board Officer </li>
                                <li><i class="fa fa-check"></i> Six free tickets to Annual Awards event </li>
                                <li><i class="fa fa-check"></i> Opportunity to present one award at the Annual Awards event </li>
                                <li><i class="fa fa-check"></i> Company logo Welcome bags (When available) </li>
                                    <li><i class="fa fa-check"></i> Annual feature in Chamber’s e-newsletter </li>
                                <li><i class="fa fa-check"></i> Preferred seating at in-person Chamber events </li>
                                <li><i class="fa fa-check"></i> VIP tickets first right of purchase for special events </li>
                                <li><i class="fa fa-check"></i> Plaque recognizing Platinum Investor Level, appropriate for office or retail display. </li>
                              </ul>
                            </div>
                      </div>
      
                      <div class="col-sm-6 col-md-4" style="">
                        <div class="schedule-box maxwidth500 membership-box bg-white mb-30" style="height: 300px; padding: 10px">
                             <h4 class="" style="font-weight: bolder;  color: #4D7902;">Individual Membership Plan </h4>
                             <p style="font-weight: bolder;"><h4> $3000/yearly</h4></p>
                             <p>Pay with:</p>
                             
                             <div class="" style="display: flex; margin-bottom: 10px;">
                              <div style="margin: 10px">
                          <div class="" style="display: flex; border: 1px #4D7902 solid; padding: 10px; border-radius: 12px;">
                              <div style="margin-right: 10px;"><input type="radio" name="pay" id=""></div>
                              <img src="/logos/paystack.svg" alt="" srcset="" width="80" height="50">
                            </div>
                            <small class="" style="text-align: center;">Paystack</small>
                          </div>
      
                          <div style="margin: 10px">
                            <div class="" style="display: flex; border: 1px #4D7902 solid; padding: 10px; border-radius: 12px;">
                              <div style="margin-right: 10px;"><input type="radio" name="pay" id=""></div>
                              <img src="/logos/stripe.svg" alt="" srcset="" width="80" height="50">
                            </div>
                            <small class="text-center" style="text-align: center;">Stripe</small>
                          </div>
                          </div>
                          
                          <div class="">
                              <a href="{{ route('paystack', 'platinum') }}" class="btn btn-md" style="background-color: #4D7902; color: whitesmoke;">Proceed To Payment</a>
                          </div>
               
                         </div>
                         </div>
                  </div>
      
              </section>
              @endif



      @endsection
