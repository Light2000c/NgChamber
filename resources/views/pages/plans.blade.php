@extends('layouts.user.app')

@section('content')
    <!-- Start main-content -->
    <div class="main-content">
      <!-- Section: inner-header -->
      <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg6.jpg">
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



      {{-- <section>
        <div class="container pt-70 pb-40">
            <div class="section-title text-center">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="mt-0 line-height-1  text-uppercase mb-10 text-black-333 text-theme-color-2" style="text-align: start">Membership <span class="text-theme-color-2"></span></h2>
                  <p></p>
                </div>
              </div>
            </div>  


            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <h5>Who?</h5>
                    <p>The members of the chamber of commerce are the individuals, businesses, and organizations that volunteer their time to help improve the socioeconomic climate in their communities to protect, promote and advance their businesses.</p>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <h5>Why</h5>
                    <p>The Chamber programs, events and initiatives are centered on activities that will benefit members who will be able to have an active role to advocate and promote businesses and careers.</p>
                    <ul>
                        <li>Policies for conducive business and trade environment. </li>
                        <li>Laws for sustainable and enabling environment for business and quality of life. </li>
                        <li>Federal and state reforms that are evidence-based to sectors service innovation. </li>
                        <li>The use of standard-based cyber risk management, regulation to strengthen. </li>
                        <li>High-quality education and skills training. </li>
                        <li>Expand domestic supply of power and promote investments in energy tech.</li>
                        <li>Diaspora civic participation in the US, Nigeria, Europe, Caribbean, Africa etc including in national development. </li>
                        <li>Availability and access to affordable healthcare, and expansion of telehealth/telemedicine.</li>
                        <li>Standard-based innovations to improve access to water and sanitation. </li>
                        <li> Projects that are structured as public-private partnerships. </li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <h5>Where</h5>
                    <p>The Chamber headquarters is based in Washington DC, with a possibility of having various offices in cities like New York, Houston, California, and Atlanta . Internationally, the chamber will have offices in Nigeria and other African countries, Europe, Asia, Oceania, and Americas. The chamber website will facilitate access to the network and resources. The programs and events will be virtual and in person.</p>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <h5>How</h5>
                    <p>The Chamber will have an on-boarding membership drive – at an annual discounted rate-for the first 6 months from the day of the launch. Afterwards, the membership fees will be regular fees. The Chamber must be present on social media and will have aside from the Chairman/CEO of the Chamber, the spokesperson for media and community. </p>
                </div>
            </div>

        </div> 
      </section> --}}


              <!-- Section: Planyts -->
              <section id="plans">
                <div class="container pt-70 pb-40">
                  <div class="section-title text-center">
                    <div class="row">
                      <div class="col-md-8 col-md-offset-2">
                        <h2 class="mt-0 line-height-1 text-center text-uppercase mb-10 text-black-333">Membership <span class="text-theme-color-2"> Plans</span></h2>
                        <p>NiDCC Membership Plans and Benefits</p>
                      </div>
                    </div>
                  </div>
               
                  <div class="section-content">
                    <div class="row">
                     
                      <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="schedule-box maxwidth500 membership-box bg-white mb-30" style="height: 660px; padding: 10px">
                          <div>
                          <div class="membership-header">
                            <h4>NiDCC Membership Plan</h4>
                          </div>
                          <div class="membership-name">
                          <p>Individual Membership</p>
                        </div>
                        <div class="membership-price">
                         <h4> <sup>$</sup>175/monthly</h4>
                        </div>
                        <div class="membership-select">
                          <button class="btn btn-sm">Select Plan</button>
                        </div>
                      </div>
  
                        <div class="membership-list">
                          <ul>
                            <li><i class="fa fa-check"></i> Business name and description, website, and social media links on our website directory </li>
                            <li><i class="fa fa-check"></i> Post your events on the Chamber’s online Calendar of Events </li>
                            <li><i class="fa fa-check"></i> Membership certificate, window sticker, and digital “Chamber Member” artwork rights </li>
                            <li><i class="fa fa-check"></i> Welcome in Chamber’s e-newsletter and on Facebook page </li>
                          </ul>
                        </div>
  
                          <div class="membership-more">
                            <hr>
                            <p><a href="{{ route('plan-details', 'individual') }}">See More Benefits <i class="fa fa-angle-double-right"></i></a></p>
                          </div>
  
                        </div>
                      </div>
  
                      <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="schedule-box maxwidth500 membership-box bg-white mb-30" style="height: 660px; padding: 10px">
                          <div>
                          <div class="membership-header">
                            <h4>NiDCC Membership Plan</h4>
                          </div>
                          <div class="membership-name">
                          <p>Bronze Membership</p>
                        </div>
                        <div class="membership-price">
                         <h4> <sup>$</sup>300/monthly</h4>
                        </div>
                        <div class="membership-select">
                          <button class="btn btn-sm">Select Plan</button>
                        </div>
                        </div>
  
                        <div class="membership-list">
                          <ul>
                            <li><i class="fa fa-check"></i> Enhanced listing on website directory including logo and second category </li>
                            <li><i class="fa fa-check"></i> Support on your company’s ribbon-cuttings, grand-openings and open houses </li>
                            <li><i class="fa fa-check"></i> Free inclusion of your marketing materials in quarterly NiDCC newsletter </li>
                            <li><i class="fa fa-check"></i> Free inclusion of your marketing materials in event guest bags (when available) </li>
                          </ul>
                        </div>
                          <div class="membership-more">
                            <hr>
                            <p><a href="{{ route('plan-details', 'bronze') }}">See More Benefits <i class="fa fa-angle-double-right"></i></a></p>
                          </div>
  
                        </div>
                      </div>
  
                      <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="schedule-box maxwidth500 membership-box bg-white mb-30" style="height: 660px; padding: 10px">
                          <div>
                          <div class="membership-header">
                            <h4>NiDCC Membership Plan</h4>
                          </div>
                          <div class="membership-name">
                          <p>Gold Membership</p>
                        </div>
                        <div class="membership-price">
                         <h4> <sup>$</sup>800/monthly</h4>
                        </div>
                        <div class="membership-select">
                          <button class="btn btn-sm">Select Plan</button>
                        </div>
                        </div>
  
                        <div class="membership-list">
                          <ul>
                            <li><i class="fa fa-check"></i>  Up to two free one-time use email list or mailing labels for your marketing purposes </li>
                            <li><i class="fa fa-check"></i>  Access to the Members directory </li>
                            <li><i class="fa fa-check"></i>  Opportunity to host a workshop promoted to Chamber members </li>
                            <li><i class="fa fa-check"></i>  Ability to participate in member-only committees </li>
                            <li><i class="fa fa-check"></i>  Four free tickets to Annual Awards event </li>
                          </ul>
                        </div>
                          <div class="membership-more">
                            <hr>
                            <p><a href="{{ route('plan-details', 'gold') }}">See More Benefits <i class="fa fa-angle-double-right"></i></a></p>
                          </div>
  
                        </div>
                      </div>
  
                      <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="schedule-box maxwidth500 membership-box bg-white mb-30" style="height: 660px; padding: 10px">
                          <div>
                          <div class="membership-header">
                            <h4>NiDCC Membership Plan</h4>
                          </div>
                          <div class="membership-name">
                          <p>Platinum Membership</p>
                        </div>
                        <div class="membership-price">
                         <h4> <sup>$</sup>1,800/monthly</h4>
                        </div>
                        <div class="membership-select">
                          <button class="btn btn-sm">Select Plan</button>
                        </div>
                        </div>
  
                        <div class="membership-list">
                          <ul>
                            <li><i class="fa fa-check"></i> Featured once annually on Chamber Facebook page, twitter and Instagram </li>
                            <li><i class="fa fa-check"></i> First crack at sponsorships for Chamber’s signature events </li>
                            <li><i class="fa fa-check"></i> Logo appears on Chamber website home page, banners </li>
                            <li><i class="fa fa-check"></i> Logo appears on Ambassadors’ t-shirts </li>
                            <li><i class="fa fa-check"></i> Your logo repeats on pages throughout the Chamber’s website </li>
                          </ul>
                        </div>
                          <div class="membership-more">
                            <hr>
                            <p><a href="{{ route('plan-details', 'platinum') }}">See More Benefits <i class="fa fa-angle-double-right"></i></a></p>
                          </div>
  
                        </div>
                      </div>
  
                    </div>
                  </div>
                </div>
              </section>

      @endsection