@extends('layouts.user.app')

@section('content')
   <!-- Start main-content -->
   <div class="main-content" ng-app="profileApp" ng-controller="profileCtrl">
   <!-- Section: inner-header -->
   <section class="inner-header divider parallax layer-overlay overlay-dark-2" data-bg-img="/logos/simple3.jpeg">
    <div class="container pt-60 pb-60">
      <!-- Section Content -->
      <div class="section-content">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="font-28 text-white" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: bold;">JOBS</h2>
          </div>
        </div>
      </div>
    </div>      
  </section>
  <div>
  <ul class="breadcrumb">
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('careers') }}">Careers</a></li>
    <li>Internship</li>
  </ul>
</div>  


    @if(session('info'))
    @php
alert()->info('info', session('info'))->persistent('Dismiss');
@endphp

@endif

    <section>

      <div class="container mt-30 mb-30 pt-30 pb-30">
      <div class="row" >
      <div class="col-md-3 p-15">
        {{-- <div class="pb-15">
         <h4>Welcome {{ Auth::user()->fullname }}!</h4>
         <p>Manage your account.</p>
        </div> --}}

        <ul class="nav nav-pills nav-stacked">
          <li ><a style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 20px;" href="{{ route('normal-jobs') }}">Jobs</a></li>
          <li class="active"><a style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 20px;" href="{{ route('intern-jobs') }}">Internship</a></li>
        </ul>
      </div>

      <div class="col-md-9">
      <div class="tab-contents">
        <div id="overview" class="" style="margin-bottom: 25px;">
          <h3  style="color: #4D7902;">Interships</h3>
        </div>

        {{-- <div class="alert alert-success" role="alert">
          <h4 class="alert-heading">Well done!</h4>
          <p style="font-size: 18px">Thankyou for join us. For you to complete your registration, Please Click the link below to purchase a Membership plan</p>
          <hr>
          <p class="mb-0" style="font-size: 18px; font-weight: bold;"><a href="{{ route('plans') }}">Purchase Plan <i class="fa fa-arrow-right" style="margin-left: 3px;"></i></a></p>
        </div> --}}

        <div class="row">
          <div class="col-md-10">
            <div>
            
                @if($jobs->count())
              @foreach ($jobs as $job)
             <div class="" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); height: 150px; padding: 10px; border-radius: 10px; margin-bottom: 10px; display:flex; justify-content:space-between; flex-direction:column;">
              <div>
              <h5 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 18px;" >{{ Str::words($job->title,9) }}</h5>
            </div>

              <div class="" style="display: flex; justify-content: end;">
                 <a href="{{ route('view-job', $job) }}" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 16px; text-align: right; font-weight: bold; color: #4D7902;">Job Details <i class="fa fa-arrow-right" style="margin-left: 4px;"></i></a>
              </div>
             </div>
             @endforeach
             @else
             <div class="alert alert-secondary" role="alert" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 20px; font-size: bold;">
                Intership jobs to show at the moment!
              </div>
             @endif

            </div>
            <div>
              {{ $jobs->links('pagination::bootstrap-5') }}
             </div>
          </div>

        </div>

      </div>
      </div>

    </div>
  </div>
  </section>

   
  <!-- end main-content -->  

@endsection
