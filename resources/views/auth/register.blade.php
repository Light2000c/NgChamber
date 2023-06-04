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
<title>NiDCC</title>

<!-- Favicon and Touch Icons -->
<link href="/web/images/favicon.png" rel="shortcut icon" type="image/png">
<link href="/web/images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="/web/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="/web/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="/web/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

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
<link  href="/web/js/revolution-slider//web/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="/web/js/revolution-slider//web/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="/web/js/revolution-slider//web/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="/web/css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">
<link href="/personal/personal.css" rel="stylesheet" type="text/css">


<!-- external javascripts -->
<script src="/web/js/jquery-2.2.4.min.js"></script>
<script src="/web/js/jquery-ui.min.js"></script>
<script src="/web/js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="/web/js/jquery-plugin-collection.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <img alt="" src="/web/images/preloaders/5.gif">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>

  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    <section id="home" class="divider bg-lighter">
      <div class="display-table">
        <div class="display-table-cell">
          <div class="container">
            <div class="row">
              <div class="col-md-8 auth-image" style="align-self: center; margin-top: 50px;" >
                <img src="logos/auth.jpg" alt="" srcset="" > 
               </div>
              <div class="col-md-4 ">
                <div class="text-center mb-60 auth-logo"><a href="#" class=""><img alt="" src="/logos/NIDCC CHAMBERS LOGO.png" style="width: 130px; height: auto;"></a></div>
                <h4 class="mt-0 pt-5" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #7C9C47; font-size: 23px">Register</h4>
                <hr>
                <p style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 15px;">Register With Us To Get Started...</p>
                <form  class="clearfix"  action="{{ route('register') }}" method="post">
                    @csrf

                    @if(session('error'))
                    <div class="alert alert-danger alert-dismissible" role="alert">
              <strong>Error!</strong> {{ session('error') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
           </div>
           @endif

                <div class="row">
                    <div class="form-group col-md-12">
                      <label for="form_username_email">Full Name</label>
                      <input id="form_username_email" name="fullname" value="{{ old('fullname') }}" class="form-control" type="text" placeholder="FirstName LastName">
                      @error('fullname')
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-md-12">
                      <label for="form_username_email">Email</label>
                      <input id="form_username_email" name="email" value="{{ old('email') }}" class="form-control" type="email" placeholder="example@gmail.com" required>
                      @error('email')
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-md-12">
                      <label for="form_password">Password</label>
                      <input id="form_password" name="password" class="form-control" type="password" placeholder="Create a Password">
                      @error('password')
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label for="form_password">Confirm Password</label>
                      <input id="form_password" name="password_confirmation" class="form-control" type="password" placeholder="Confirm Password">
                    </div>
                  </div>

                  <div>
                  <div class="row">
                    <div class="form-group col-md-12" style="display: flex;">
                      <div style="margin-right: 15px;">
                     <input id="form_password" name="agreement-to-terms-and-conditions"  type="checkbox">
                    </div>
                    <div><label style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 15px;">I agree to <a href="{{ route('terms-and-conditions') }}" style="color: #7C9C47;">Terms & Conditions</label></div>
                    </div>
                  </div>
                  @error('agreement-to-terms-and-conditions')
                  <div class="text-danger" style="margin-top: -20%"><small>{{ $message}}</small></div>
                  @enderror
                </div>
                  <!-- <div class="form-group pull-right mt-10">
                    <button type="submit" class="btn btn-dark btn-sm">Login</button>
                  </div> -->
                  <div class="clear text-right pt-10">
                    <a class="text-theme-colored font-weight-600 font-12" href="#">Forgot Your Password?</a>
                  </div>
                  <div class="clear text-center pt-10">
                    <button class="btn btn-dark btn-lg btn-block no-border mt-15 mb-15" type="submit" style="background-color: #7C9C47;">Sign Up</button>
                  </div>
                  <div class="clear text-center pt-10">
                    <h5 class="">Already have an account? <a class="text-theme-colored font-weight-600 font-14" href="{{ route('login') }}" >Sign In</a></h5>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

<!-- Footer -->
  <footer id="footer" class="footer text-center bg-lighter">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="mb-0">Copyright ©2015 Medinova. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="/web/js/custom.js"></script>

</body>
</html>
