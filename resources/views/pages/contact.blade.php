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
                    <h2 class="font-28 text-white" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: bold;">CONTACT</h2>
                  </div>
                </div>
              </div>
            </div>      
          </section>
          <div>
          <ul class="breadcrumb">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Contact</li>
          </ul>
        </div> 

    <!-- Divider: Contact -->
    <section class="divider">
      <div class="container">
        <div class="row pt-30">
          <div class="col-md-6">
            <h3 class="line-bottom mt-0 mb-30" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Interested in discussing?</h3>

            <!-- Contact Form -->
            <form  action="{{ route('home') }}" method="post">
              @csrf


              @if(session('success'))
              @php
          alert()->success('success', session('success'))->persistent('Dismiss');
          @endphp
      
          @endif
      
      
          @if(session('error'))
          @php
      alert()->success('error', session('error'))->persistent('Dismiss');
      @endphp
      
      @endif
      
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Full Name <small>*</small></label>
                    <input name="fullname" class="form-control" type="text" placeholder="Full Name">
                    @error('fullname')
                      <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Email <small>*</small></label>
                    <input name="email" class="form-control required email" type="email" placeholder="example@gmail.com">
                    @error('email')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Subject <small>*</small></label>
                    <input name="subject" class="form-control required" type="text" placeholder="Subject">
                    @error('subject')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Phone</label>
                    <input name="phone" class="form-control" type="tel" placeholder="Phone">
                    @error('phone')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label>Message</label>
                <textarea name="message" class="form-control required" rows="5" placeholder="Message"></textarea>
                @error('message')
                <small class="text-danger">{{ $message }}</small>
              @enderror
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Send your message</button>
              </div>
            </form>
          </div>

          <div class="col-md-6">
            <h3 class="line-bottom mt-0" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Get in touch with us</h3>
            <p style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Have a question? Do not hesitate to reach out to us using the information we provided below.</p>
            <ul class="styled-icons icon-dark icon-sm icon-circled mb-20">
              {{-- <li><a href="#" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" data-bg-color="#02B0E8"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" data-bg-color="#4C75A3"><i class="fa fa-vk"></i></a></li>
              <li><a href="#" data-bg-color="#D9CCB9"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#" data-bg-color="#D71619"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#" data-bg-color="#A4CA39"><i class="fa fa-android"></i></a></li>
              <li><a href="#" data-bg-color="#4C75A3"><i class="fa fa-vk"></i></a></li> --}}
            </ul>

            <div class="icon-box media mb-0 pb-0" style="margin-bottom: 20px"> <a class="media-left pull-left flip mr-20" > <i class="fa fa-home" style="color: #4D7902; font-size: 30px;"></i></a>
              <div class="media-body">
                <h5 class="mt-0">Office Location</h5>
                <p>3519 International Ct NW 
                  Washington, District Of Columbia 20008</p>
              </div>
            </div>
            <div class="icon-box media mb-0 pb-0 pt-0 mt-0" style="margin-bottom: 20px"> <a class="media-left pull-left flip mr-15" > <i class="fa fa-phone" style="color: #4D7902; font-size: 30px;"></i></a>
              <div class="media-body">
                <h5 class="mt-0">Contact Number</h5>
                <p><a href="tel:+(240) 444 9095">+(240) 444 9095</a></p>
              </div>
            </div>
            <div class="icon-box media mb-0 pb-0 pt-0 mt-0" style="margin-bottom: 20px"> <a class="media-left pull-left flip mr-15" > <i class="fa fa-envelope" style="color: #4D7902; font-size: 30px;"></i></a>
              <div class="media-body">
                <h5 class="mt-0">Email Address</h5>
                <p><a href="mailto:info@nigeriadiasporachamber.com">info@nigeriadiasporachamber.com</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Google Map -->
    <section>
      <div class="container-fluid pt-0 pb-0">
        <div class="row">

          <!-- Google Map HTML Codes -->
          <div
            id="map-canvas-multipointer"
            data-mapstyle="default"
            data-height="500"
            data-zoom="12"
            data-marker="images/map-marker.png">
          </div>
          <!-- Google Map Javascript Codes -->
          <script src="http://maps.google.com/maps/api/js?key=AIzaSyAYWE4mHmR9GyPsHSOVZrSCOOljk8DU9B4"></script>
          <script src="js/google-map-init-multilocation.js"></script>

        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
@endsection
