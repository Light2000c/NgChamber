@extends('layouts.user.app')

@section('content')
   <!-- Start main-content -->
   <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-8" data-bg-img="images/bg/bg6.jpg">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title text-white">Profile</h2>
              <ol class="breadcrumb text-center text-black mt-10">
                <li class="active text-white">Edit Profile</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container mt-30 mb-30 pt-30 pb-30">
        <form action="{{ route('edit-profile') }}" method="post">
          @csrf
        <div class="col-sm-6 col-md-12" >
        <div class="row">
           <div class="col-md-6">
            <div class="" style="display: flex; justify-content: center;">
                <div class="" style="width: 200px; height: 200px; border-radius: 50%; border: 1px black solid; margin-top: 20px; background-image: url('https://ionicframework.com/docs/img/demos/avatar.svg'); background-size: contain; right: 0; bottom: 0;">
                
                </div>
            </div>
           </div>
           <div class="col-md-6">

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
             <div class="form-group">
              <label for="fullname">Full Name</label>
              <input class="form-control" name="fullname" type="text" value="{{ Auth::user()->fullname }}">
              @error('fullname')
                <small class="text-danger">{{ $message }}</small>
              @enderror
             </div>

             <div class="form-group">
                <label for="fullname">Email</label>
                <input class="form-control" name="email" type="email" value="{{ Auth::user()->email }}">
                @error('email')
                <small class="text-danger">{{ $message }}</small>
              @enderror
               </div>


           </div>
        </div>

        <div style="background-color: whitesmoke; padding-top: 10px; padding-bottom: 10px; padding-left: 10px; margin-top: 20px; margin-bottom: 15px;">
          <h5 class="" style="">Business Information</h5>
        </div>

        <div class="row">

          <div class="col-md-12">
            <div class="form-group">
             <label for="fullname">Business Name</label>
             <input class="form-control" type="text" name="business_name" type="text" value="{{ Auth::user()->business_name }}" @if(Auth::user() && Auth::user()->is_paid_user == 0) disabled @endif>
             @error('business_name')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="form-group">
              <label for="fullname">Article of Registration</label>
              <input class="form-control" type="text" name="article_of_registration" type="text" value="{{ Auth::user()->article_of_registration }}" @if(Auth::user() && Auth::user()->is_paid_user == 0) disabled @endif>
              @error('article_of_registration')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="row">
              <div class="col-md-6">
            <div class="form-group">
               <label for="fullname">Phone Number</label>
               <input class="form-control" type="text" name="phone" type="text" value="{{ Auth::user()->phone }}" @if(Auth::user() && Auth::user()->is_paid_user == 0) disabled @endif>
               @error('phone')
               <small class="text-danger">{{ $message }}</small>
             @enderror
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
               <label for="fullname">Website Address</label>
               <input class="form-control" type="text" name="website" type="text" value="{{ Auth::user()->website }}" @if(Auth::user() && Auth::user()->is_paid_user == 0) disabled @endif>
               @error('website')
                <small class="text-danger">{{ $message }}</small>
              @enderror
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
          <div class="form-group">
             <label for="fullname">WhatsApp Direct Chat Link</label>
             <input class="form-control" type="text" name="whatsapp" type="email" value="{{ Auth::user()->whatsapp }}" @if(Auth::user() && Auth::user()->is_paid_user == 0) disabled @endif>
             @error('whatsApp')
             <small class="text-danger">{{ $message }}</small>
           @enderror
            </div>
          </div>

          <div class="col-md-6">

          </div>
        </div>

            

               <div>
                <button class="btn btn-primary btn-lg">Save Changes</button>
               </div>

          </div>
       </div>



    </div>
 </form>
      </div>
    </section> 
  </div>  
  <!-- end main-content -->  

@endsection
