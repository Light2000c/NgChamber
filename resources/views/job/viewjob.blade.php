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
    <li><a href="{{ route('careers') }}">Jobs</a></li>
    <li>{{ $job->title }}</li>
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
      <div class="col-md-9">
        
        <div>
            <h5 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 20px; margin-bottom: 20px;" >{{ Str::words($job->title,9) }}</h5>
          </div>

          <div class="job-description">
            {!! $job->description !!}
          </div>


      </div>
    </div>
  </div>
  </section>

   
  <!-- end main-content -->  

@endsection
