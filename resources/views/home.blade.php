@extends('layouts.user.app')


@section('content')
    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: home -->

        <section class="background-video">
            <div class="begin">
                <div class="video-container">
                    {{-- <video id="background-video" autoplay loop muted poster="https://assets.codepen.io/6093409/river.jpg">
                <source src="https://assets.codepen.io/6093409/river.mp4" type="video/mp4">
              </video> --}}
                    <video id="background-video" autoplay loop muted poster="logos/loading.jpeg">
                        <source src="logos/190802_12_ConstructionandMarinaDrone_18_preview.mp4" type="video/mp4">
                    </video>
                    <div class="tick-border">
                      <marquee behavior="" direction="" style="margin-top: 5px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 18px; color: whitesmoke"> NiDCC presents "CONNECTING THE DOTS on the 3rd of June, 2023, to be streamed live on all social media platforms. Go to the events section, to register and get more information</marquee>
                    </div>
                </div>
                <div class="text-overlay" id="text-overlay">
                    <h2 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 50px;">INSPIRING BUSINESS LEADERSHIP AND PARTNERSHIP</h2>
                    {{-- <h2 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 40px;">AND PARTNERSHIP</h2> --}}
                    <a class="btn btn-large" href="{{ route('register') }}"
                        style="color: #4D7902; background-color: whitesmoke; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 18px; font-weight: bold;">Join Us Now</a>
                </div>
            </div>
        </section>


        {{-- small screen --}}
        <section id="home" class="background-image">

            <!-- Slider Revolution Start -->
            <div class="rev_slider_wrapper" style="margin-bottom: 100px;">
                <div class="rev_slider" data-version="5.0">
                    <ul>

                        <!-- SLIDE 1 -->
                        <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default"
                            data-easein="default" data-easeout="default" data-masterspeed="default"
                            data-thumb="/web/images/bg/bg5.jpg" data-rotate="0" data-saveperformance="off"
                            data-title="Slide 1" data-description="">
                            {{-- data-thumb="/logos/WEBSITE BANNER 6.jpg" data-rotate="0" data-saveperformance="off"
                            data-title="Slide 1" data-description=""> --}}
                            <!-- MAIN IMAGE -->
                            <img src="/web/images/bg/bg5.jpg" alt="" data-bgposition="center center"
                                data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10"
                                data-no-retina>
                            {{-- <img src="/logos/WEBSITE BANNER 6.jpg" alt="" data-bgposition="center center"
                                data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10"
                                data-no-retina> --}}
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway" id="rs-1-layer-1"
                                data-x="['left']" data-hoffset="['30']" data-y="['middle']" data-voffset="['-110']"
                                data-fontsize="['64']" data-lineheight="['110']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-transform_idle="o:1;s:500"
                                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                style="z-index: 7; white-space: nowrap; font-weight:700;">WELCOME
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption tp-resizeme text-lowwercase text-white font-raleway bg-theme-colored-transparent border-left-theme-color-2-6px pl-20 pr-20"
                                id="rs-1-layer-2" data-x="['left']" data-hoffset="['35']" data-y="['middle']"
                                data-voffset="['-25']" data-fontsize="['35']" data-lineheight="['54']" data-width="none"
                                data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;s:500"
                                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                style="z-index: 7; white-space: nowrap; font-weight:600; ">TO NiDCC
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption tp-resizeme text-white mt-20 mb-20" id="rs-1-layer-3 mt-10" data-x="['left']"
                                data-hoffset="['35']" data-y="['middle']" data-voffset="['35']" data-fontsize="['30']"
                                data-lineheight="['28']" data-width="none" data-height="none" data-whitespace="nowrap"
                                data-transform_idle="o:1;s:500" data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1400"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;"
                                style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">We aims to
                                promote and protect the interests of our <br> members
                                and the local business community.
                            </div>

                            <div class="tp-caption tp-resizeme mt-50" id="rs-1-layer-4" data-x="['left']"
                                data-hoffset="['35']" data-y="['middle']" data-voffset="['100']" data-width="none" data-fontsize="['27']"
                                data-height="['120']" data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1400"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a
                                    class="btn btn-colored btn-lg btn-flat btn-theme-colored border-left-theme-color-2-6px pl-20 pr-20"
                                    href="#" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">JOIN NOW</a>
                            </div>


                            <!-- SLIDE 3 -->
                        <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default"
                            data-easein="default" data-easeout="default" data-masterspeed="default"
                            data-thumb="logos/bg-new.jpeg" data-rotate="0" data-saveperformance="off" data-title="Slide 3"
                            data-description="">
                            <!-- MAIN IMAGE -->
                            {{-- <img src="/web/images/bg/bg1.jpg" alt="" data-bgposition="center top" --}}
                            {{-- <img src="logos/bg3.jpeg" alt="" data-bgposition="center top" data-bgfit="cover" --}}
                              <img src="logos/bg-new.jpeg" alt="" data-bgposition="center top" data-bgfit="cover"
                                data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-right-theme-color-2-6px pr-20 pl-20"
                                id="rs-3-layer-1" data-x="['right']" data-hoffset="['30']" data-y="['middle']"
                                data-voffset="['-90']" data-fontsize="['50']" data-lineheight="['72']" data-width="none"
                                data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;s:500"
                                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                style="z-index: 7; white-space: nowrap; font-weight:600;">Advance Your Career
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway" id="rs-3-layer-2"
                                data-x="['right']" data-hoffset="['35']" data-y="['middle']" data-voffset="['-25']"
                                data-fontsize="['32']" data-lineheight="['54']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-transform_idle="o:1;s:500"
                                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                style="z-index: 7; white-space: nowrap; font-weight:600;">For A Better Business Strategy
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption tp-resizeme text-white text-right mt-10" id="rs-3-layer-3"
                                data-x="['right']" data-hoffset="['35']" data-y="['middle']" data-voffset="['30']"
                                data-fontsize="['30']" data-lineheight="['28']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-transform_idle="o:1;s:500"
                                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1400"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;"
                                style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">NiDCC offer
                                workshops or training programs that <br> cover topics  such as leadership and more.

                            <!-- LAYER NR. 4 -->
                            {{-- <div class="tp-caption tp-resizeme" id="rs-3-layer-4" data-x="['right']"
                                data-hoffset="['35']" data-y="['middle']" data-voffset="['95']" data-width="none"
                                data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1400"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a
                                    class="btn btn-colored btn-lg btn-flat btn-theme-colored btn-theme-colored border-right-theme-color-2-6px pl-20 pr-20"
                                    href="#">Read More</a>
                            </div> --}}
                        </li>

                    </ul>
                </div>
                <!-- end .rev_slider -->
            </div>
            <div class="tick-border">
                <marquee behavior="" direction="" style="margin-top: 5px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 18px; color: whitesmoke"> NiDCC presents "CONNECTING THE DOTS on the 3rd of June, 2023, to be streamed live on all social media platforms. Go to the events section, to register and get more information</marquee>
              </div>
            <!-- end .rev_slider_wrapper -->
            <script>
                $(document).ready(function(e) {
                    $(".rev_slider").revolution({
                        sliderType: "standard",
                        sliderLayout: "auto",
                        dottedOverlay: "none",
                        delay: 5000,
                        navigation: {
                            keyboardNavigation: "off",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            onHoverStop: "off",
                            touch: {
                                touchenabled: "on",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false
                            },
                            arrows: {
                                style: "zeus",
                                enable: true,
                                hide_onmobile: true,
                                hide_under: 600,
                                hide_onleave: true,
                                hide_delay: 200,
                                hide_delay_mobile: 1200,
                                tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                                left: {
                                    h_align: "left",
                                    v_align: "center",
                                    h_offset: 30,
                                    v_offset: 0
                                },
                                right: {
                                    h_align: "right",
                                    v_align: "center",
                                    h_offset: 30,
                                    v_offset: 0
                                }
                            },
                            bullets: {
                                enable: true,
                                hide_onmobile: true,
                                hide_under: 600,
                                style: "metis",
                                hide_onleave: true,
                                hide_delay: 200,
                                hide_delay_mobile: 1200,
                                direction: "horizontal",
                                h_align: "center",
                                v_align: "bottom",
                                h_offset: 0,
                                v_offset: 30,
                                space: 5,
                                tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title"></span>'
                            }
                        },
                        responsiveLevels: [1240, 1024, 778],
                        visibilityLevels: [1240, 1024, 778],
                        gridwidth: [1170, 1024, 778, 480],
                        gridheight: [650, 768, 960, 720],
                        lazyType: "none",
                        parallax: {
                            origo: "slidercenter",
                            speed: 1000,
                            levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                            type: "scroll"
                        },
                        shadow: 0,
                        spinner: "off",
                        stopLoop: "on",
                        stopAfterLoops: 0,
                        stopAtSlide: -1,
                        shuffle: "off",
                        autoHeight: "off",
                        fullScreenAutoWidth: "off",
                        fullScreenAlignForce: "off",
                        fullScreenOffsetContainer: "",
                        fullScreenOffset: "0",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        }
                    });
                });
            </script>
            <!-- Slider Revolution Ends -->

        </section>




        <!-- Section: Sevices -->
        {{-- <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-sm-6 col-md-4 maxwidth500 mb-sm-40 wow fadeInUp" data-margin-top="-160px" data-wow-duration="1s" data-wow-delay="0.1s">
              <img class="img-fullwidth" src="/web/images/services/bg-1.jpg" alt="">
              <div class="bg-silver-light border-1px p-20 pt-0 pb-30 mb-sm-180">
                   
                    <h4 class=" letter-space-1 mt-10">Online<span class="text-theme-color-2"> Learning</span></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero omnis unde nesciunt?</p>
                <a href="#" class="btn btn-sm btn-theme-colored">Read more</a>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 maxwidth500 mb-sm-40 wow fadeInUp" data-margin-top="-160px" data-wow-duration="1s" data-wow-delay="0.1s">
              <img class="img-fullwidth" src="/web/images/services/bg-2.jpg" alt="">
              <div class="bg-silver-light border-1px p-20 pt-0 pb-30 mb-sm-180">
                    <h4 class="letter-space-1 mt-10">Graduation<span class="text-theme-color-2"> Degree</span></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero omnis unde nesciunt?</p>
                <a href="#" class="btn btn-sm btn-theme-colored">Read more</a>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 maxwidth500 mb-sm-0 wow fadeInUp" data-margin-top="-160px" data-wow-duration="1s" data-wow-delay="0.1s">
              <img class="img-fullwidth" src="/web/images/services/bg-3.jpg" alt="">
              <div class="bg-silver-light border-1px p-20 pt-0 pb-30">
                  <h4 class=" letter-space-1 mt-10">Experience<span class="text-theme-color-2"> Yourself</span></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero omnis unde nesciunt?</p>
                <a href="#" class="btn btn-sm btn-theme-colored">Read more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}

        <!-- Section: About -->
        <section id="about">
            <div class="container mt-60 pb-70 pt-0">
                <div class="section-content">
                    <div class="row mt-10">
                        <div class="col-sm-12 col-md-6 mb-sm-20 wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay="0.5s">
                            <h3 class="text-uppercase mt-0">About <span class="text-theme-color-2"> Us </span></h3>
                            <p style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 18px;">Famous for its benevolence to the international community, Nigeria has continued to provide
                                support in knowledge and resources to the rest of the world. As an emerging economy and the
                                most populous black nation in the world, Nigeria serves as a model for other emerging
                                economies in Africa and around the world. The Nigerians in Diaspora Chamber of Commerce
                                (NiDCC) is a business community of professionals and industry experts in Nigeria, United
                                States, and around the world that aims to provide resources and cultivate relationships
                                between entrepreneurs and global business leaders with a view to impacting lives, growing
                                businesses, and catalyzing development. NiDCC aims to position emerging generations of..</p>
                            <a class="btn btn-colored btn-theme-colored btn-lg text-uppercase font-13 mt-0"
                                href="{{ route('about') }}">Read More</a>
                        </div>
                        <div class="col-sm-12 col-md-6 mt-0 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="video-popup">
                                <a href="" data-lightbox-gallery="youtube-video" title="Video">
                                    <img alt="" src="/logos/about-us.jpeg"
                                        class="img-responsive img-fullwidth mt-10 ml-30 ml-xs-0 ml-sm-0">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Divider: why choose us 1 -->
        {{-- <section class="divider parallax" data-bg-img="/web/images/bg/bg1.jpg" data-parallax-ratio="0.7"> --}}
        {{-- <section class="divider parallax" data-bg-img="logos/bg4.jpeg" data-parallax-ratio="0.7">
            <div class="container pt-0 pb-0">
                <div class="row">
                    <div class="col-md-8 col-md-offset-4">
                        <div class="bg-white-transparent-8 pb-10 p-40">
                            <h2 class="mb-20 mt-30 line-height-1 text-center text-uppercase">Why <span
                                    class="text-theme-color-2"> Choose Us?</span></h2>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="icon-box p-15 mb-0 mb-sm-0 mt-sm-0">
                                        <a class="icon pull-left sm-pull-none flip" href="#">
                                            <i class="fa fa-building text-theme-colored font-50"></i>
                                        </a>
                                        <div class="ml-70 ml-sm-0">
                                            <h4 class="icon-box-title mt-15 mb-5">Networking Opportunities</h4>
                                            <p>NiDCC provide opportunities for members to network with other businesses in the local community. This can lead to new business partnerships, collaborations, and referrals.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="icon-box p-15 mb-30 mb-sm-0 mt-sm-0">
                                        <a class="icon pull-left sm-pull-none flip" href="#">
                                            <i class="fa fa-book text-theme-colored font-50"></i>
                                        </a>
                                        <div class="ml-70 ml-sm-0">
                                            <h4 class="icon-box-title mt-15 mb-5">Credibility and Reputation</h4>
                                            <p>Being a member of a NiDCC can boost a business's credibility and reputation in the local community. This can be especially important for small businesses that are just starting out.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="icon-box p-15 mb-0 mb-sm-0 mt-sm-0">
                                        <a class="icon pull-left sm-pull-none flip" href="#">
                                            <i class="fa fa-users text-theme-colored font-50"></i>
                                        </a>
                                        <div class="ml-70 ml-sm-0">
                                            <h4 class="icon-box-title mt-15 mb-5">Access to Resources</h4>
                                            <p>We offer a range of resources and services to help businesses grow and succeed. This includes marketing and advertising, business education and training, and access to government officials and policymakers.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="icon-box p-15 mb-30 mb-sm-0 mt-sm-0">
                                        <a class="icon pull-left sm-pull-none flip" href="#">
                                            <i class="fa fa-money text-theme-colored font-50"></i>
                                        </a>
                                        <div class="ml-70 ml-sm-0">
                                            <h4 class="icon-box-title mt-15 mb-5">Advocacy and Support</h4>
                                            <p>NiDCC advocate on behalf of their members to ensure that their voices are heard by policymakers and government officials. They also offer support to businesses during challenging times, such as economic downturns or natural disasters.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}


        <!-- Section: courses -->
        {{-- <section id="courses">
            <div class="container pt-70 pb-40">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="mt-0 line-height-1 text-center text-uppercase mb-10 text-black-333">Our <span
                                    class="text-theme-color-2"> Services</span></h2>
                            <p>Chamber of commerce is a business organization that aims to promote and protect the interests of its members and the local business community. Some of the services offered by a chamber of commerce include
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row multi-row-clearfix">
                    <div class="col-md-12">
                        <div class="owl-carousel-3col owl-nav-top" data-dots="true">
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="/web/images/project/p1.jpg">
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h5 class="font-14 font-weight-500 mb-5">Advocacy</h5>
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a
                                                href="page-courses-accounting-technologies.html">Advocacy</a></h4>
                                        <p>The chamber of commerce lobbies on behalf of its members to ensure that laws and regulations do not hinder business growth. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="/web/images/project/p2.jpg">
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h5 class="font-14 font-weight-500 mb-5">Networking</h5>
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a
                                                href="page-courses-accounting-technologies.html">Networking</a></h4>
                                        <p>Chambers of commerce provide opportunities for members to network and build relationships with other businesses in the local community. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="/web/images/project/p2.jpg">
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h5 class="font-14 font-weight-500 mb-5">Business Referrals</h5>
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a
                                                href="page-courses-accounting-technologies.html">Business Referrals</a></h4>
                                        <p>Chambers of commerce provide referrals to member businesses, helping to generate more leads and sales. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="/web/images/project/p4.jpg">
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h5 class="font-14 font-weight-500 mb-5">Business Education</h5>
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a
                                                href="page-courses-accounting-technologies.html">Business Education</a></h4>
                                        <p>Chambers of commerce offer workshops, seminars, and other educational programs to help businesses stay up-to-date on the latest trends and best practices. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="/web/images/project/p5.jpg">
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h5 class="font-14 font-weight-500 mb-5">Marketing and Promotion</h5>
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a
                                            href="page-courses-accounting-technologies.html">Marketing and Promotion</a></h4>
                                    <p>Chambers of commerce help promote member businesses through various channels, such as online directories, social media, and local events. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="/web/images/project/p4.jpg">
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h5 class="font-14 font-weight-500 mb-5">Community Involvement</h5>
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a
                                                href="page-courses-accounting-technologies.html">Community Involvement</a></h4>
                                        <p>Chambers of commerce often play a role in community development, helping to improve the quality of life for residents and businesses in the area. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}




        <!-- Section: Blog -->
        {{-- <section id="blog">
                    <div class="container pt-70">
                        <div class="section-title text-center">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <h2 class="mt-0 line-height-1 text-uppercase">Recent <span class="text-theme-color-2">
                                            News</span></h2>
                                    <p>Stay Informed with the latest news we provide based on our topic <br> such as Agriculture, Education, Health Care, Employment, Sports and more.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="owl-carousel-3col owl-nav-top mb-sm-0" data-dots="true">
                                    @foreach ($news as $new)
                                        <div class="item">
                                            <article class="post clearfix maxwidth600 mb-sm-30 wow fadeInRight"
                                                data-wow-delay=".2s">
                                                <div class="entry-header">
                                                    <div class="post-thumb thumb"> <img src="news/{{ $new->image }}"
                                                            alt="" class="img-responsive img-fullwidth" style="height: 200px"> </div>
                                                </div>
                                                <div class="entry-content border-1px p-20">
                                                    <h4 class="entry-title mt-0 pt-0"><a
                                                            href="{{ route('news-details', $new->id) }}">{{ Str::limit($new->title, 30) }}</a></h4>
                                                    <span class="text-theme-colored mr-10 font-14">| {{ $new->created_at }}</i>
                                                    </span>
                                                    <p class="text-left mb-20 mt-5 font-13">{!! Str::limit($new->description, 90) !!} </p>
                                                    <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left"
                                                        href="{{ route('news-details', $new->id) }}">Read more</a>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </article>
                                        </div>
                                    @endforeach
            
                                </div>
                            </div>
                        </div>
                    </div>
                </section> --}}


        <!-- Section: events -->
        {{-- <section > --}}
        <section id="events" class="divider parallax layer-overlay overlay-dark-8" data-stellar-background-ratio="0.5"
            data-bg-img="logos/bg5.jpeg">
            <div class="container pt-70 pb-40">
                <div class="section-title mb-30">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            {{-- <h2 class="mt-0 line-height-1 text-uppercase">Upcoming <span class="text-theme-color-2">
                                Events</span></h2> --}}
                            <h3 class="mt-0 line-height-1 text-center mb-10 text-white text-uppercase">Upcoming Events</h3>
                            <p class="text-white" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 18px;">NiDCC keeps you updated with upcoming events.</p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        @foreach ($events as $event)
                            {{-- <div class="col-xs-12 col-sm-6 col-md-4 mb-30 wow fadeInRight" data-wow-duration="1s"
                                data-wow-delay="0.5s">
                                <div class="pricing table-horizontal maxwidth400">
                                    <div class="row">
                                        <div class="col p-30 pl-sm-50">
                                            <h4 class="mt-0 mb-5"><a href="#"
                                                    class="text-white">{{ Str::limit($event->title, 23) }}</a></h4>
                                            <ul class="list-inline mb-5 text-white">
                                                <li class="pr-0"><i class="fa fa-calendar mr-5"></i>
                                                    {{ $event->start_date }} </li>
                                            </ul>
                                            <p class="mb-15 mt-15 text-white">{{ Str::limit($event->description, 62) }}</p>
                                            <a class="text-white font-weight-600" href="#">Read More →</a>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-xs-12 col-sm-6 col-md-4 mb-30 wow fadeInRight" data-wow-duration="1s"
                                data-wow-delay="0.5s">
                                <div class="pricing table-horizontal maxwidth400">
                                    <div class="row">
                                        <div class="col p-30 pl-sm-50">
                                            <h4 class="mt-0 mb-5"><a class="text-white"
                                                    style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">{{ Str::limit($event->title, 23) }}</a>
                                            </h4>
                                            <ul class="list-inline mb-5 text-white">
                                                <li class="pr-0"
                                                    style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><i
                                                        class="fa fa-calendar mr-5"></i> {{ $event->start_date }} </li>
                                                {{-- <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>| New York</li> --}}
                                            </ul>
                                            <p class="mb-15 mt-15 text-white"
                                                style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 16px;">
                                                {{ Str::limit($event->description, 62) }}</p>
                                            <a class="text-white font-weight-600"
                                                href="{{ route('events-detail', $event->id) }}">Read More →</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="col-xs-12 col-sm-6 col-md-4 mb-30 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                  <div class="pricing table-horizontal maxwidth400">
                    <div class="row">
                      <div class="col p-30 pl-sm-50">
                        <h4 class="mt-0 mb-5"><a href="#" class="text-white">Upcoming Events Title</a></h4>
                        <ul class="list-inline mb-5 text-white">
                          <li class="pr-0"><i class="fa fa-calendar mr-5"></i> June 26, 2016 |</li>
                          <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>New York</li>
                        </ul>
                        <p class="mb-15 mt-15 text-white">Lorem ipsum dolor sit amet, consectetur adi isicing elit. Quas eveniet, nemo dicta. Ullam nam. </p>
                        <a class="text-white font-weight-600" href="#">Read More →</a>
                      </div>
                    </div>
                  </div>
                </div> --}}

                    </div>
                </div>
            </div>
        </section>

        <section>
            <x-reasons />
        </section>




        <!-- Divider: Funfact -->
        {{-- <section class="divider parallax layer-overlay" data-bg-img="/web/images/bg/bg6.jpg" data-parallax-ratio="0.7">
            <div class="container pt-70 pb-60">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center">
                            <i class="fa fa-users mt-5 text-white"></i>
                            <h2 data-animation-duration="2000" data-value="50"
                                class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
                            <h4 class="text-white text-uppercase">Registered Members</h4>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center">
                            <i class="fa fa-briefcase mt-5 text-white"></i>
                            <h2 data-animation-duration="2000" data-value="75"
                                class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
                            <h4 class="text-white text-uppercase">Businesses</h4>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center">
                            <i class="fa fa-book mt-5 text-white"></i>
                            <h2 data-animation-duration="2000" data-value="204"
                                class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
                            <h4 class="text-white text-uppercase">Resources</h4>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center">
                            <i class="fa  fa-graduation-cap mt-5 text-white"></i>
                            <h2 data-animation-duration="2000" data-value="2324"
                                class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
                            <h4 class="text-white text-uppercase">Learners</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        {{-- <section>
        <x-leaders />
    </section> --}}


        <!-- Section: Planyts -->
        {{-- <section id="plans">
            <div class="container pt-70 pb-40">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="mt-0 line-height-1 text-center text-uppercase mb-10 text-black-333">Membership <span
                                    class="text-theme-color-2"> Plans</span></h2>
                            <p>NiDCC Membership Plans and Benefits</p>
                        </div>

                        <div>
                            <x-plans />
                        </div>
                    </div>
                </div>

               

            </div>
        </section> --}}


        <!-- Section: Client Say -->
        {{-- <section class="divider parallax layer-overlay overlay-dark-4" data-background-ratio="0.5"
            data-bg-img="/web/images/bg/bg2.jpg">
            <div class="container pt-60 pb-60">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-uppercase mt-0 pb-0  text-center text-white">What People Say</h2>
                        <div class="owl-carousel-1col" data-dots="true">
                            <div class="item">
                                <div class="testimonial-wrapper text-center">
                                    <div class="content pt-10">
                                        <p class="lead text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Neque est quasi, quas ipsam, expedita placeat facilis odio illo ex
                                            accusantium eaque itaque officiis et sit. Vero quo, impedit neque.</p>
                                        <h4 class="author text-white mb-0">Catherine Grace</h4>
                                        <h6 class="title text-white mt-0 mb-15">Designer</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-wrapper text-center">
                                    <div class="content pt-10">
                                        <p class="lead text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Neque est quasi, quas ipsam, expedita placeat facilis odio illo ex
                                            accusantium eaque itaque officiis et sit. Vero quo, impedit neque.</p>
                                        <h4 class="author text-white mb-0">Catherine Grace</h4>
                                        <h6 class="title text-white mt-0 mb-15">Designer</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-wrapper text-center">
                                    <div class="content pt-10">
                                        <p class="lead text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Neque est quasi, quas ipsam, expedita placeat facilis odio illo ex
                                            accusantium eaque itaque officiis et sit. Vero quo, impedit neque.</p>
                                        <h4 class="author text-white mb-0">Catherine Grace</h4>
                                        <h6 class="title text-white mt-0 mb-15">Designer</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}



        <!-- Section: Contact -->
        {{-- <section id="contact" class="bg-lighter">
            <div class="container pt-70 pb-40">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-5">
                            <h3 class="line-bottom text-uppercase mt-0 mb-30 mt-sm-20">Find Our Location</h3>
                       
                            <div data-address="121 King Street, Melbourne Victoria 3000 Australia"
                                data-popupstring-id="#popupstring1" class="map-canvas autoload-map"
                                data-mapstyle="style8" data-height="353" data-latlng="-37.817314,144.955431"
                                data-title="sample title" data-zoom="12" data-marker="images/map-marker.png">
                            </div>
                            <div class="map-popupstring hidden" id="popupstring1">
                                <div class="text-center">
                                    <h3>Health Zone Office</h3>
                                    <p>121 King Street, Melbourne Victoria 3000 Australia</p>
                                </div>
                            </div>
                            
                            <script src="http://maps.google.com/maps/api/js?key=AIzaSyAYWE4mHmR9GyPsHSOVZrSCOOljk8DU9B4"></script>
                            <script src="js/google-map-init.js"></script>
                        </div>
                        <div class="col-md-7">
                            <h3 class="line-bottom text-uppercase mt-0 mb-30 mt-sm-20">Send Us a Message</h3>
                            <!-- Contact Form -->

                            <form  action="{{ route('home') }}" method="post">
                                @csrf

                                @if (session('success'))
                                @php
                            alert()->success('success', session('success'))->persistent('Dismiss');
                            @endphp
                        
                            @endif
                        
                        
                            @if (session('error'))
                            @php
                        alert()->success('error', session('error'))->persistent('Dismiss');
                        @endphp
                        
                        @endif
                        
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group mb-30">
                                            <input name="fullname" class="form-control" type="text"
                                                placeholder="Full Name">
                                                @error('fullname')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-30">
                                            <input type="email" name="email" class="form-control" type="email"
                                                placeholder="example@gmail.com">
                                                @error('email')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group mb-30">
                                            <input name="subject" class="form-control required" type="text"
                                                placeholder="Enter Subject">
                                                @error('subject')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-30">
                                            <input name="phone" class="form-control" type="tel"
                                                placeholder="Enter Phone">
                                                @error('phone')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-15">
                                    <textarea name="message" class="form-control" rows="5" placeholder="Enter Message"></textarea>
                                    @error('message')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group mb-30">
                                    <button type="submit"
                                        class="btn btn-flat btn-theme-colored text-uppercase mt-20 mb-sm-30 border-left-theme-color-2-4px"
                                        data-loading-text="Please wait...">Send your message</button>
                                </div>
                            </form>
                        
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <!-- Trigger the modal with a button -->
        {{-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> --}}




        <!-- Divider: Clients -->
        {{-- <section class="clients bg-theme-colored">
      <div class="container pt-10 pb-10 pb-sm-0 pt-sm-0">
        <div class="row">
          <div class="col-md-12">
            <!-- Section: Clients -->
            <div class="owl-carousel-6col transparent text-center owl-nav-top">
              <div class="item"> <a href="#"><img src="/web/images/clients/w1.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="/web/images/clients/w2.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="/web/images/clients/w3.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="/web/images/clients/w4.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="/web/images/clients/w5.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="/web/images/clients/w6.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="/web/images/clients/w3.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="/web/images/clients/w4.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="/web/images/clients/w5.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="/web/images/clients/w6.png" alt=""></a></div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}

    </div>
    <!-- end main-content -->
@endsection
