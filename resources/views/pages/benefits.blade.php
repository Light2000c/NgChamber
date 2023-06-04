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
                                MEMBERSHIP BENEFITS</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div>
            <ul class="breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Membership Benefits</li>
            </ul>
        </div>




        <!-- Section: Planyts -->
        <section id="plans" class="benefits">
            <div class="container pt-70 pb-40">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="mt-0 line-height-1 text-center text-capitalize mb-10 text-black-333">NiDCC MEMBERSHIP
                                <span class="text-theme-color-2"> BENEFITS</span></h2>
                        </div>
                    </div>
                </div>

                <div style="margin-bottom: 70px;">

                    <div>
                        <p>Membership in NiDCC offers your business a global representation, making you part of a dynamic
                            and influential community that is shaping the future of Nigeria, Africa, and the global economy.
                            You will have access to a vibrant and dynamic network of professionals, entrepreneurs, and
                            businesses around the world. You will have opportunities to connect with the Diaspora community,
                            to promote your business, and to explore potential partnerships and collaborations. As a global
                            member, you will have the opportunity to tap into valuable resources and have access to a range
                            of benefits designed to support your business and professional goals.</p>

                        <p>The NiDCC is committed to promoting the interests of the Diaspora community and to facilitating
                            collaboration between emerging economies and the global economy. </p>

                        <p>Regionally and globally, NiDCC offers a range of benefits to businesses and organizations of all
                            sizes and industries. These benefits include access to business networking opportunities,
                            resources and services designed to support business growth, advocacy support, discounts on
                            chamber events and other services, and increased visibility through marketing and promotional
                            support. By joining NiDCC, businesses and organizations can connect with their local and global
                            business community and gain access to valuable resources and opportunities for growth.</p>


                        <ul style="margin-left: 25px;">
                            <li style="margin-bottom: 10px;"><b>Networking Opportunities:</b> The NiDCC provides a platform
                                for networking with members of the Diaspora community around the world. You will have
                                opportunities to connect with professionals, entrepreneurs, and businesses in your region
                                and beyond.</li>
                            <li style="margin-bottom: 10px;"><b>Business Development Resources:</b> The NiDCC offers a range
                                of resources to support the development of your business, including access to funding
                                opportunities, training and development programs, and business advisory services.</li>
                            <li style="margin-bottom: 10px;"><b>Promotional Activities:</b> The NiDCC provides opportunities
                                to promote your business through its website, social media channels, chamber directory, and
                                other marketing channels. You will also have opportunities to participate in trade, tours,
                                shows and other promotional events.</li>
                            <li style="margin-bottom: 10px;"><b>Advocacy and Representation:</b> The NiDCC advocates on
                                behalf of its members on issues related to trade, investment, and economic development. As a
                                global member, you will have a voice in shaping the NiDCC’s advocacy agenda and in promoting
                                the interests of our members locally and globally.</li>
                            <li style="margin-bottom: 10px;"><b>Access to Mentoring and Business Advisory Services:</b>
                                NiDCC offers mentoring and advisory services to businesses. Our experienced business
                                professionals and industry experts can provide guidance on business planning, marketing,
                                finance, and other critical areas of operation.</li>
                            <li style="margin-bottom: 10px;"><b>Access to Incubation and Acceleration Programs:</b> NiDCC
                                offers incubation and acceleration programs designed to support businesses in their early
                                stages. These programs can provide access to funding, workspace, equipment, and other
                                resources necessary to launch and grow a new business.</li>
                            <li style="margin-bottom: 10px;"><b>Access to Business Funding and Investment Opportunities:</b>
                                NiDCC has relationships with banks, investors, and other financial institutions that can
                                provide start-up businesses with access to funding and investment opportunities.</li>
                            <li style="margin-bottom: 10px;"><b>Access to Business Training and Development Programs:</b>
                                NiDCC offer a range of training and development programs designed to support business growth
                                and success. These programs can provide businesses with the knowledge and skills necessary
                                to succeed in their respective industries.</li>
                            <li style="margin-bottom: 10px;"><b>Access to Professional Networking Opportunities:</b> NiDCC
                                provides numerous opportunities for start-up businesses to connect with other business
                                professionals and industry experts. These connections can be invaluable in terms of
                                generating leads, building partnerships, and gaining exposure for the business.</li>
                            <li style="margin-bottom: 10px;"><b>Access to Cost Savings Opportunities:</b> NiDCC offers a
                                range of cost savings opportunities for businesses, including discounts, advertising, and
                                other services necessary for business operation.</li>

                        </ul>

                        <p>Global membership of the NiDCC is open to individuals and businesses around the world who are interested in connecting with the Diaspora community and promoting economic development in Nigeria and other emerging markets as well as opportunities to network, promote your business, and shape the future of your communities.</p>
                    </div>

                    {{-- <div>
                      <h4>MEMBERSHIP PLANS</h4>
                      <p>New businesses, solo entrepreneurs, or home-based businesses. This level of membership provides basic services such as member-only promotions and referrals, lobby materials display, web page listing, and one complimentary breakfast/luncheon reservation when applicable. For those who seek to build their business through networking and word of mouth, this category works very well. </p>
                    </div>

                    <div>
                      <h4>Start-up Membership $275/year (non-profit $175) </h4>
                      <p>Best for solopreneurs and professionals seeking modest visibility and networking. Students and Young Professionals may receive a discount with proof of age (Government issue ID only).</p>

                      <ul style="margin-left: 25px;">
                        <li style="margin-bottom: 10px;"></li>
                    </ul>

                    </div>


                    <div>
                      <h4>Start-up Membership $275/year (non-profit $175) </h4>
                      <p>Best for solopreneurs and professionals seeking modest visibility and networking. Students and Young Professionals may receive a discount with proof of age (Government issue ID only).</p>

                      <h4>Visibility </h4>
                      <ul style="margin-left: 25px;">
                        <li style="margin-bottom: 10px;"> - Business name and description, website, and social media links on our website directory.</li>
                          <li style="margin-bottom: 10px;"> - Welcome to Chamber’s e-newsletter and Facebook page.</li>
                            <li style="margin-bottom: 10px;"> - Invitation to participate in special events and programs. </li>
                              <li style="margin-bottom: 10px;"> - Opportunity to offer discounts to fellow Chamber members. </li>
                                <li style="margin-bottom: 10px;"> - Discounts for paid events.</li>
                    </ul>

                    <h4>Resources </h4>
                    <ul style="margin-left: 25px;">
                      <li style="margin-bottom: 10px;"> - Business name and description, website, and social media links on our website directory.</li>
                      <li style="margin-bottom: 10px;"> - Welcome to Chamber’s e-newsletter and Facebook page.</li>
                      <li style="margin-bottom: 10px;"> - Invitation to participate in special events and programs. </li>
                      <li style="margin-bottom: 10px;"> - Opportunity to offer discounts to fellow Chamber members. </li>
                      <li style="margin-bottom: 10px;"> - Discounts for paid events.</li>
                  </ul>

                  <h4>Additional benefits includes:</h4>
                  <ul style="margin-left: 25px;">
                    <li style="margin-bottom: 10px;"> - Access to business networking opportunities with other members and stakeholders in the region or globally.</li>
                    <li style="margin-bottom: 10px;"> - Access to a range of business resources, including market research, legal and financial advice, and training and development programs.</li>
                    <li style="margin-bottom: 10px;"> - Advocacy support on issues that impact the business community. We would work with local and regional governments to advocate for policies that benefit businesses in the community.</li>
                </ul>
                    </div>


                    <div>
                      <h4>Small Business Membership $500/year (non-profit $300)  </h4>
                      <p>Best for small to medium-sized businesses seeking Chamber access & promotional exposure. Additional Benefits Include</p>

                      <ul style="margin-left: 25px;">
                        <li style="margin-bottom: 10px;"> - Support your company’s ribbon cuttings, grand openings, and open houses. </li>
                        <li style="margin-bottom: 10px;"> - Inclusion of your marketing materials in event guest bags (when available).</li>
                        <li style="margin-bottom: 10px;"> - Eligible to host Business After Hours events and sponsor other signature Chamber events. </li>
                        <li style="margin-bottom: 10px;"> - Opportunity to have a 5-minute introduction to the member business. </li>
                        <li style="margin-bottom: 10px;"> - Meeting with Chamber staff to strategize around Chamber resources and opportunities. </li>
                        <li style="margin-bottom: 10px;"> - Access to resources and services designed specifically for small businesses, including business planning assistance, access to capital, and marketing and branding support.</li>
                        <li style="margin-bottom: 10px;"> - Discounts on chamber events and other services, such as advertising and sponsorship opportunities. </li>
                        <li style="margin-bottom: 10px;"> - Networking opportunities with other small businesses and established businesses in the community. </li>
                    </ul>

                    </div>


                    <div>
                      <h4>Corporate $1,500/year (non-profit $800)  </h4>
                      <p>Best for medium to large companies and organizations seeking a higher profile opportunity to market and demonstrate investment in the Superior community. Additional Benefits Include; </p>

                      <ul style="margin-left: 25px;">
                        <li style="margin-bottom: 10px;"> - Featured once annually on the Chamber Facebook page.</li>
                        <li style="margin-bottom: 10px;"> - Opportunity to host a workshop promoted to Chamber members. </li>
                        <li style="margin-bottom: 10px;"> - Ability to participate in member-only committees.</li>  
                        <li style="margin-bottom: 10px;"> - List “Hot Deals” on the Chamber website. </li>
                        <li style="margin-bottom: 10px;"> - List “Job Openings” on the Chamber website. </li>
                        <li style="margin-bottom: 10px;"> - Two invitations to the quarterly exclusive President’s Breakfast. </li>
                        <li style="margin-bottom: 10px;"> - Exclusive opportunities and event invitations throughout the year. </li>
                        <li style="margin-bottom: 10px;"> - Plaque recognizing Corporate Level Investor, appropriate for the office or retail display.</li>
                        <li style="margin-bottom: 10px;"> - Access to exclusive events and networking opportunities with other large businesses and influential leaders in the community.</li>
                        <li style="margin-bottom: 10px;"> - Personalized business support services, including government relations and public affairs, business research and analysis, and talent attraction and retention services.</li>
                        <li style="margin-bottom: 10px;"> - Increased visibility through enhanced marketing and promotional support, including logo placement on the chamber's website, marketing materials, and event signage.</li>
                    </ul>

                    </div>

                    <div>
                      <h4>Premium Investor $3,000/year (non-profit $1,800)  </h4>
                      <p>Our elite membership level provides the highest visibility and indication of community investment. Premier access and influence. Additional Benefits Include.</p>

                      <ul style="margin-left: 25px;">
                        <li style="margin-bottom: 10px;"> - Featured once annually on the Chamber's Facebook page, Twitter and Instagram. </li>
                        <li style="margin-bottom: 10px;"> - First crack at sponsorships for Chamber’s signature events. </li>
                        <li style="margin-bottom: 10px;"> - Logo appears on Chamber website home page, and banners. </li>
                        <li style="margin-bottom: 10px;"> - Logo appears on Ambassadors’ t-shirts. </li>
                        <li style="margin-bottom: 10px;"> - Your logo repeats on pages throughout the Chamber’s event banner. </li>
                        <li style="margin-bottom: 10px;"> - Annual meeting with President/CEO and Board Officers. </li> 
                        <li style="margin-bottom: 10px;"> - Opportunity to present award at the Annual Awards event.  Company logo Welcome bags (When available).  Annual feature in Chamber’s e-newsletter. </li>
                        <li style="margin-bottom: 10px;"> - Preferred seating at in-person Chamber events.  VIP tickets first right of purchase for special events. </li>
                        <li style="margin-bottom: 10px;"> - Plaque recognizing Premium Investor Level, appropriate for the office or retail display.</li>
                        <li style="margin-bottom: 10px;"> - Premium access to exclusive events and networking opportunities with influential leaders in the community. </li>
                        <li style="margin-bottom: 10px;"> - Personalized business support services, such as marketing and public relations support, legal and financial advice, and custom research services.</li>
                        <li style="margin-bottom: 10px;"> - Increased visibility through enhanced marketing and promotional support.</li>
                        <li style="margin-bottom: 10px;"> - Discounts on chamber events and other services, such as advertising and sponsorship opportunities.</li>
                    </ul>

                    </div> --}}



            </div>
        </section>
    @endsection
