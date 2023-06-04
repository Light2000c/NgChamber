<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="LearnPress | Education & Courses HTML Template" />
<meta name="keywords" content="academy, course, education, education html theme, elearning, learning," />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>NiDCC - Inspiring Business Leadership And Partnership</title>

<!-- Favicon and Touch Icons -->
<link href="/web/images/favicon.ico" rel="shortcut icon" type="image/png">
<link href="/web/images/apple-icon.png" rel="apple-touch-icon">
<link href="/web/images/apple-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="/web/images/apple-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="/web/images/apple-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="/web/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="/web/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="/web/css/animate.css" rel="stylesheet" type="text/css">
<link href="/web/css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="/web/css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="/web/css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="/web/css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="/web/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="/web/css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="/web/css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="/web/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="/web/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="/web/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="/web/css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link href="/personal/personal.css" rel="stylesheet" type="text/css">

{{-- ionic cdn --}}

{{-- bootstrap --}}
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- external javascripts -->
<script src="/web/js/jquery-2.2.4.min.js"></script>
<script src="/web/js/jquery-ui.min.js"></script>
<script src="/web/js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="/web/js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="/web/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="/web/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="/personal/mine.js"></script>
<script src="/personal/event.js"></script>
<script src="/personal/profile.js"></script>
<script src="/personal/step.js"></script>

{{-- ionic cdn --}}

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
  
  @include('sweetalert::alert')
  
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <img alt="" src="/web/images/preloaders/5.gif">
    </div>
    {{-- <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div> --}}
  </div>

  <!-- Header -->
  <header id="header" class="header">
    <div class="header-top bg-theme-color-2 sm-text-center auth">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="widget no-border m-0">
              <ul class="list-inline">
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-white"></i> <a class="text-white" href="tel:+12404449095">+1 (240) 444 9095</a> </li>
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-white"></i> <a class="text-white" href="mailto:info@nigeriadiasporachamber.com">info@nigeriadiasporachamber.com</a> </li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget no-border m-0">
              <ul class="list-inline text-right sm-text-center">
                @if(Auth::user())
                <li>
                  <a href="{{ route('profile') }}" class="text-white"><i class="fa fa-user" style="margin-right: 3px;"></i>{{ Auth::user()->fullname }}</a>
                </li>
                <li class="text-white">|</li>
                <li>
                  <form action="{{  route('logout') }}" method="post">
                    @csrf
                  <button class="btn" style="color: #4D7902;" type="submit" class="text-white">Logout</button>
                </form>
                </li>
                @else
                <li>
                  <a href="{{ route('login') }}" class="text-white">Login</a>
                </li>
                <li class="text-white">|</li>
                <li>
                  <a href="{{ route('register') }}" class="text-white">Register</a>
                </li>
                @endif
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
          <nav id="menuzord-right" class="menuzord default">
            <a class="menuzord-brand pull-left flip" href="javascript:void(0)">
              {{-- <img src="/logos/NIDCC LOGO DIMENSIONED.png" alt=""> --}}
               <img src="/logos/3d-logo.png" alt="">
               {{-- <img src="/web/images/logo-wide.png" alt=""> --}}
            </a>
            <ul class="menuzord-menu">
              <li class=""><a style="font-size: 14px;" href="{{ route('home') }}">Home</a>
              </li>
              <li><a style="font-size: 14px;">Membership</a>
                <ul class="dropdown">
                  <li><a style="font-size: 14px;" href="{{ route('benefits') }}">Membership Benefit</a></li>
                  <li><a style="font-size: 14px;" href="{{ route('plans') }}">Membership Plan</a></li>
                  </li>
                </ul>
              </li>
              </li>
              <li><a style="font-size: 14px;" href="javascript:void(0)">Topics</a>
                <div class="megamenu">
                  <div class="megamenu-row">
                    <div class="col3">
                      <ul class="list-unstyled list-dashed">
                        <li><a style="font-size: 14px;" href="{{ route('agriculture') }}">Agriculture</a></li>
                        <li><a style="font-size: 14px;" href="{{ route('oil') }}">Oil and Gas</a></li>
                        <li><a style="font-size: 14px;" href="{{ route('education') }}">Education</a></li>
                        <li><a style="font-size: 14px;" href="{{ route('health-care') }}">Health Care</a></li>
                        <li><a style="font-size: 14px;" href="{{ route('manufacturing') }}">Manufacturing</a></li>
                        <li><a style="font-size: 14px;" href="{{ route('trade') }}">Trade</a></li>
                        <li><a style="font-size: 14px;" href="{{ route('insurance') }}">Insurance</a></li>
                        <li><a style="font-size: 14px;" href="{{ route('improving') }}">Improving Government Services</a></li>
                        <li><a style="font-size: 14px;" href="{{ route('professional') }}">Professional Services</a></li>
                      </ul>
                    </div>
                    <div class="col3">
                      <ul class="list-unstyled list-dashed">
                        <li><a style="font-size: 14px;" href="{{ route('information') }}">Information Communication Technology</a></li>
                        <li><a style="font-size: 14px;" href="{{ route('water-sanitation') }}">Water Sanitation</a></li>
                        <li><a style="font-size: 14px;" href="{{ route('pharmaceuticals') }}">Pharmaceuticals</a></li>
                        <li><a style="font-size: 14px;" href="{{ route('mining') }}">Mining and Solid Minerals</a></li>
                        <li><a style="font-size: 14px;" href="{{ route('telecommunication') }}">Telecommunication</a></li>
                        <li><a style="font-size: 14px;" href="{{ route('business') }}">Small Business</a></li>
                        <li><a style="font-size: 14px;" href="{{ route('infrastructure') }}">Infrastructure</a></li>
                        <li><a style="font-size: 14px;" href="{{ route('employment') }}">Employment</a></li>
                        <li><a style="font-size: 14px;" href="{{ route('immigration') }}">Immigration</a></li>
                      </ul>
                    </div>
                    <div class="col3">
                      <ul class="list-unstyled list-dashed">
                        <li><a style="font-size: 14px;" href="{{ route('creative') }}">Creative Industry</a></li>
                        <li><a style="font-size: 14px;" href="{{ route('sport') }}">Sport</a></li>
                        <li><a style="font-size: 14px;" href="{{ route('renewable') }}">Renewable Energy</a></li>
                        <li><a style="font-size: 14px;" href="{{ route('transportation') }}">Transportation</a></li>
                        <li><a style="font-size: 14px;" href="{{ route('environment') }}">Environment</a></li>
                        <li><a style="font-size: 14px;" href="{{ route('diversity') }}">Diversity Equity and Inclusion</a></li>
                        <li><a style="font-size: 14px;" href="{{ route('corporate') }}">Corporate Social Responsibility</a></li>
                        <li><a style="font-size: 14px;" href="{{ route('climate') }}">Climate Change</a></li>
                      </ul>
                    </div>
                    <div class="col3">
                      <ul class="list-unstyled list-dashed">
                        <li><a style="font-size: 14px;" href="{{ route('hospitality') }}">Hospitality and Tourism</a></li>
                        <li><a style="font-size: 14px;" href="{{ route('banking') }}">Banking and Finance</a></li>
                        <li><a style="font-size: 14px;" href="{{ route('construction') }}">Construction</a></li>
                        <li><a style="font-size: 14px;" href="{{ route('estate') }}">Real Estate</a></li>
                        <li><a style="font-size: 14px;" href="{{ route('retail') }}">Retail and Wholesale</a></li>
                        <li><a style="font-size: 14px;" href="{{ route('taxes') }}">Taxes</a></li>
                        <li><a style="font-size: 14px;" href="{{ route('women') }}">Women and Youth</a></li>
                        <li><a style="font-size: 14px;" href="{{ route('research') }}">Research</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <li><a style="font-size: 14px;">NIDCC</a>
                <ul class="dropdown">
                  <li><a style="font-size: 14px;" href="{{ route('leaders') }}">Leadership</a></li>
                  <li><a style="font-size: 14px;" href="{{ route('ambassadors') }}">Patron And Ambassadors</a></li>
                  <li><a style="font-size: 14px;" href="{{ route('careers') }}">Careers</a></li>
                  <li><a style="font-size: 14px;" href="{{ route('donation') }}">Donations</a></li>
                  <li><a style="font-size: 14px;" href="{{ route('news') }}">News</a></li>
                  <li><a style="font-size: 14px;" href="{{ route('event') }}">Events</a>
                    <li><a style="font-size: 14px;" href="{{ route('contact') }}">Contact</a></li>
                  </li>
                </ul>
              </li>
              <li><a style="font-size: 14px;" href="{{ route('about') }}">About</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>


  @yield('content')


   <!-- Footer -->
   <footer id="footer" class="footer bg-black-222 foot-end" data-bg-img="/web/images/footer-bg.png">
    <div class="container pt-70 pb-40">
      <div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="widget dark">
            <img class="mt-10 mb-15" alt="" src="/logos/NIDCC LOGO DIMENSIONED 1.png">
            <p class="mb-10" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 18px;">NiDCC connect members with peers, provide access to opportunities and share resources to benefit members businesses and careers.</p>
            <ul class="styled-icons icon-dark mt-20">
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".1s" data-wow-offset="10"><a href="#" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s" data-wow-offset="10"><a href="#" data-bg-color="#02B0E8"><i class="fa fa-twitter"></i></a></li>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".3s" data-wow-offset="10"><a href="#" data-bg-color="#05A7E3"><i class="fa fa-skype"></i></a></li>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".4s" data-wow-offset="10"><a href="#" data-bg-color="#A11312"><i class="fa fa-google-plus"></i></a></li>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s" data-wow-offset="10"><a href="#" data-bg-color="#C22E2A"><i class="fa fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Useful Links</h5>
            <ul class="list angle-double-right list-border">
              <li><a href="{{ route('home') }}">Home</a></li>
              <li><a href="{{ route('about') }}">About</a></li>
              <li><a href="{{ route('contact') }}">Contact</a></li>
              <li><a href="{{ route('news') }}">News</a></li>
              <li><a href="{{ route('event') }}">Events</a></li>
              <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
              <li><a href="{{ route('terms-agreement') }}">Terms Of Service Agreement</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Quick Contact</h5>
            <ul class="list-border">
              <li><a href="tel:+12404449095">+1 (240) 444 9095</a></li>
              <li><a href="mailto:info@nigeriadiasporachamber.com">info@nigeriadiasporachamber.com</a></li>
              <li><a href="" class="lineheight-20">3519 International Ct NW 
                Washington, District Of Columbia 20008</a></li>
            </ul>


            <!-- Mailchimp Subscription Form Validation-->
            <script type="text/javascript">
              $('#footer-mailchimp-subscription-form').ajaxChimp({
                  callback: mailChimpCallBack,
                  url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
              });

              function mailChimpCallBack(resp) {
                  // Hide any previous response text
                  var $mailchimpform = $('#footer-mailchimp-subscription-form'),
                      $response = '';
                  $mailchimpform.children(".alert").remove();
                  if (resp.result === 'success') {
                      $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  } else if (resp.result === 'error') {
                      $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  }
                  $mailchimpform.prepend($response);
              }
            </script>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom bg-black-333">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6">
            <p class="font-11 text-black-777 m-0">All Rights Reserved by NiDCC</p>
          </div>
          <div class="col-md-6 text-right">
            <div class="widget no-border m-0">
              <ul class="list-inline sm-text-center mt-5 font-12">
                <li>
                  <a href="{{ route('privacy-policy') }}">Privacy Policy</a>
                </li>
                <li>|</li>
                <li>
                  <a href="{{ route('terms-and-conditions') }}">Terms and Conditions</a>
                </li>
                <li>|</li>
                <li>
                  <a href="">Faq</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->


{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> --}}
<script src="https://checkout.flutterwave.com/v3.js"></script>

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="/web/js/custom.js"></script>


<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
      (Load Extensions only on Local File Systems !
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="/web/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="/web/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="/web/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="/web/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="/web/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="/web/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="/web/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="/web/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="/web/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>


</body>
</html>
