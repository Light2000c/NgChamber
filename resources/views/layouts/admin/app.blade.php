<!DOCTYPE html>
<!--
Template Name: NobleUI - HTML Bootstrap 5 Admin Dashboard Template
Author: NobleUI
Website: https://www.nobleui.com
Portfolio: https://themeforest.net/user/nobleui/portfolio
Contact: nobleui123@gmail.com
Purchase: https://1.envato.market/nobleui_admin
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>NiDCC - Inspiring Business Leadership And Partnership</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="/web1/assets/vendors/core/core.css">
	<!-- endinject -->

	<!-- Plugin css for this page -->
  <link rel="stylesheet" href="/web1/assets/vendors/flatpickr/flatpickr.min.css">
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="/web1/assets/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="/web1/assets/vendors/flag-icon-css/css/flag-icon.min.css">

    <link rel="stylesheet" href="/web1/personal.css" />
	<!-- endinject -->

  <!-- Layout styles -->
	<link rel="stylesheet" href="/web1/assets/css/demo1/style.min.css">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="/web1/assets/images/favicon.ico" />


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  <script src="/personal/category.js"></script>
  {{-- <script src="personal/event.js"></script> --}}


</head>
<body>
@include('sweetalert::alert')

	<div class="main-wrapper">

		<!-- partial:partials/_sidebar.html -->
		<nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          {{-- Noble<span>UI</span> --}}
          <img src="/logos/NIDCC LOGO DIMENSIONED.png" alt="">
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="{{ route('adminDashboard') }}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">Activities</li>
          <li class="nav-item">
            <a href="{{ route('adminNews') }}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">news</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('adminEvent') }}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Events</span>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a href="" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Education</span>
            </a>
          </li> --}}

          <li class="nav-item">
            <a href="{{ route('adminCategory') }}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Category</span>
            </a>
          </li>

          {{-- <li class="nav-item">
            <a href="{{ route('adminServices') }}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Services</span>
            </a>
          </li> --}}


          {{-- <li class="nav-item nav-category">Product</li>
          <li class="nav-item">
            <a href="{{ route('adminProduct') }}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Products</span>
            </a>
         </li>
           <li class="nav-item">
            <a href="{{ route('adminOrders') }}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Order</span>
            </a>
          </li>
           <li class="nav-item">
            <a href="" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Wishlist</span>
            </a>
          </li> 

          <li class="nav-item">
            <a href="{{ route('admin-review') }}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Reviews</span>
            </a>
          </li>
           <li class="nav-item">
            <a href="{{ route('adminTransactions') }}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Transactions</span>
            </a>
          </li> --}}


          <li class="nav-item nav-category">People</li>
          <li class="nav-item">
            <a href="{{ route('adminUsers') }}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Users</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('adminTeam') }}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Team Members</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin-leaders') }}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Leaders</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin-ambassadors') }}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Ambassadors</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin-jobs') }}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Job</span>
            </a>
          </li>

          <li class="nav-item nav-category">Security</li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Change Password</span>
            </a>
          </li>

          <li class="nav-item nav-category">Auth</li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Logout</span>
            </a>
          </li>

        </ul>
      </div>
    </nav>
    <nav class="settings-sidebar">
      <div class="sidebar-body">
        <a href="#" class="settings-sidebar-toggler">
          <i data-feather="settings"></i>
        </a>
        <h6 class="text-muted mb-2">Sidebar:</h6>
        <div class="mb-3 pb-3 border-bottom">
          <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight" value="sidebar-light" checked>
            <label class="form-check-label" for="sidebarLight">
              Light
            </label>
          </div>
          <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark" value="sidebar-dark">
            <label class="form-check-label" for="sidebarDark">
              Dark
            </label>
          </div>
        </div>
        <div class="theme-wrapper">
          <h6 class="text-muted mb-2">Light Theme:</h6>
          <a class="theme-item active" href="../demo1/dashboard.html">
            <img src="/web1/assets/images/screenshots/light.jpg" alt="light theme">
          </a>
          <h6 class="text-muted mb-2">Dark Theme:</h6>
          <a class="theme-item" href="../demo2/dashboard.html">
            <img src="/web1/assets/images/screenshots/dark.jpg" alt="light theme">
          </a>
        </div>
      </div>
    </nav>
		<!-- partial -->

        <div class="page-wrapper">

			<!-- partial:partials/_navbar.html -->
			<nav class="navbar">
				<a href="#" class="sidebar-toggler">
					<i data-feather="menu"></i>
				</a>
				<div class="navbar-content">
					<form class="search-form">
						<div class="input-group">
              <div class="input-group-text">
                <i data-feather="search"></i>
              </div>
							<input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
						</div>
					</form>
					<ul class="navbar-nav">
						{{-- <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="flag-icon flag-icon-us mt-1" title="us"></i> <span class="ms-1 me-1 d-none d-md-inline-block">English</span>
							</a>
							<div class="dropdown-menu" aria-labelledby="languageDropdown">
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-us" title="us" id="us"></i> <span class="ms-1"> English </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-fr" title="fr" id="fr"></i> <span class="ms-1"> French </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-de" title="de" id="de"></i> <span class="ms-1"> German </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-pt" title="pt" id="pt"></i> <span class="ms-1"> Portuguese </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-es" title="es" id="es"></i> <span class="ms-1"> Spanish </span></a>
							</div>
            </li> --}}
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								{{-- <img class="wd-30 ht-30 rounded-circle" src="../assets/images/faces/face1.jpg" alt="profile"> --}}
                @if(Auth::user())
                {{ Auth::user()->fullname }}
                @endif
							</a>
							<div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
								<div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
									<div class="mb-3">
										<img class="wd-80 ht-80 rounded-circle" src="../assets/images/faces/face1.jpg" alt="">
									</div>
									<div class="text-center">
                                        @if(Auth::user())
										<p class="tx-16 fw-bolder">{{ Auth::user()->fullname }}</p>
                    <p class="tx-12 text-muted">{{ Auth::user()->email }}</p>
                                        @endif
									</div>
								</div>
                <ul class="list-unstyled p-1">
                  <li class="dropdown-item py-2">
                    <a href="pages/general/profile.html" class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="user"></i>
                      <span>Profile</span>
                    </a>
                  </li>
                  <li class="dropdown-item py-2">
                    <a href="javascript:;" class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="edit"></i>
                      <span>Edit Profile</span>
                    </a>
                  </li>
                  <li class="dropdown-item py-2">
                    <a href="javascript:;" class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="repeat"></i>
                      <span>Switch User</span>
                    </a>
                  </li>
                  <li class="dropdown-item py-2">
                    <a href="javascript:;" class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="log-out"></i>
                      <span>Log Out</span>
                    </a>
                  </li>
                </ul>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<!-- partial -->




        @yield('content')


			{{-- <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between px-4 py-3 border-top small">
				<p class="text-muted mb-1 mb-md-0">Copyright © 2023 <a href="" target="_blank">NiDCC</a>.</p>
			</footer> --}}

		</div>

        </div>

<!-- core:js -->
{{-- <script src="/web1/assets/vendors/core/core.js"></script> --}}
<!-- endinject -->

<!-- Plugin js for this page -->
<script src="/web1/assets/vendors/flatpickr/flatpickr.min.js"></script>
<script src="/web1/assets/vendors/apexcharts/apexcharts.min.js"></script>
<!-- End plugin js for this page -->

<!-- inject:js -->
<script src="/web1/assets/vendors/feather-icons/feather.min.js"></script>
<script src="/web1/assets/js/template.js"></script>
<!-- endinject -->

<!-- Custom js for this page -->
<script src="/web1/assets/js/dashboard-light.js"></script>
<!-- End custom js for this page -->



</body>
</html>
