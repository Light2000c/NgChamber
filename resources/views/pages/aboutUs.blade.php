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
            <h2 class="font-28 text-white" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: bold;">ABOUT</h2>
          </div>
        </div>
      </div>
    </div>      
  </section>
  <div>
  <ul class="breadcrumb">
    <li><a href="{{ route('home') }}">Home</a></li>
    <li>About</li>
  </ul>
</div>    
    
    
    
 <!-- Section: About -->
 <section id="about">
  <div class="container mt-50 pb-70 pt-0">
    <div class="section-content">
      <div class="row mt-10">
        <div class="col-sm-12 col-md-6 mb-sm-20 wow fadeInUp" data-wow-duration="1s"
            data-wow-delay="0.5s">
            <h3 class="text-uppercase mt-0">About <span class="text-theme-color-2"> Us </span></h3>
            <p style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 18px;">Famous for its benevolence to the international community, Nigeria has continued to provide support in knowledge and resources to the rest of the world. As an emerging economy and the most populous black nation in the world, Nigeria serves as a model for other emerging economies in Africa and around the world.
              The Nigerians in Diaspora Chamber of Commerce (NiDCC) is a business community of professionals and industry experts in Nigeria, United States, and around the world that aims to provide resources and cultivate relationships between entrepreneurs and global business leaders with a view to impacting lives, growing businesses, and catalyzing development. NiDCC aims to position emerging generations of entrepreneurs, businesses, and individuals in connection with advanced global leaders to thrive as highly productive business members. We work for the transformation and advancement of women and youths in business as we fight for the future of emerging economies represented in NiDCC.
              NiDCC is a Washington DC corporation with a wide representation in Nigeria and spreads globally. </p>
             
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

    <div>
      <p style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 18px;">  The chamber is a gateway to networking, professional development, business advancement and governance advocacy. The administration of the chamber is done by committees set up to cover a wide spectrum of business activities in Nigeria, United States, and across all countries and businesses we represent as indicated but not limited in the list below.</p>
       
          <li style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 18px;">Economic Development (Agriculture, oil and gas, Banking and Finance, Digital Economy, and IT)</li>
          <li style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 18px;">Educational Development (Women and Youth Empowerment, Research, Management Consultancy)</li>
          <li style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 18px;">Health and Environment (Medicine, Pharmaceuticals, Security, Culture, Climate</li>
          <li style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 18px;">Governance Advocacy (Legislative Advocacy, International Diplomacy, Diaspora Community, Legal Support).</li>
        
    </div>

      {{-- <div>
       <p>We help the Diaspora community grow and thrive as professionals, business owners, and entrepreneurs. NiDCC will also encourage expansion of the Diaspora community in an efficient manner while assisting private businesses and organizations to be economically strong. The Chamber will encourage members, citizens, and business communities towards sustainable economic and social growth. We believe and work for the transformation and advancement of women and youths in business. We connect our members with leaders in business and government through high level networking events and special forums. We serve to educate, advocate, inform and connect our members with advance markets, fighting for the future of emerging economies represented in NiDCC.</p>
      </div> --}}
      <div class="row mt-20 mb-30">
        <div class="col-sm-12 col-md-6 mb-sm-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
          <h3 class="text-uppercase mt-15">Our <span class="text-theme-color-2">  Mission </span></h3>
          <p  style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 18px;">To harness the resources and competencies of entrepreneurs, businesses and global corporate stakeholders towards sustainable economic and social growth development and improve quality of life leading to the prosperity of members.</p>
        </div>
        <div class="col-sm-12 col-md-6 mb-sm-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
          <h3 class="text-uppercase mt-15">Our <span class="text-theme-color-2"> Vision </span></h3>
          <p  style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 18px;">To be a viable platform for global wealth redistribution that connects individuals and businesses through reputable business leadership and partnership.</p>
        </div>
      </div>

      <div class="mb-sm-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
        <h3 class="text-uppercase mt-15"><span class="text-theme-color-2">Objectives </span></h3>
        <li style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 18px;"> To facilitate Advocacy, dialogue, exchange of information between members and respective government officials and agencies in order to improve the business climate of the emerging economies concerned and protect members businesses.</li>
        <li style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 18px;"> Promote economic stability and the success of entrepreneurs, businesses and investors through improved skilling, training, and information sharing.</li>
        <li style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 18px;"> Create avenue for mutually beneficial interactions between and among businesses in Nigeria, other emerging economies, and the developed economies</li>
        <li style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 18px;"> Provide advisory to investors and entrepreneurs on bankable and profitable businesses opportunities among members.</li>
        <li style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 18px;"> Engage domestic and international policy makers to help formulate policies that will improve the welfare of individuals and businesses.</li>
        <li style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 18px;"> Promote international trade and support the digital economy by integrating emerging markets and advanced markets using digital technology.</li>
        <li style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 18px;"> Promote brands, talents, and innovations.</li>
        <li style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 18px;"> Serve as an advisory chamber for members, industries, and governments.</li>
      </div>
    </div>
  </div>
</section>
      @endsection