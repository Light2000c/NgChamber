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
                  <h2 class="font-28 text-white" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: bold;">EVENTS</h2>
                </div>
              </div>
            </div>
          </div>      
        </section>
        <div>
        <ul class="breadcrumb">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li>Events</li>
        </ul>
      </div>  
  
      <!-- Section: Upcoming Events -->
      <section id="upcoming-events" class="divider parallax layer-overlay overlay-white-8" data-bg-img="images/bg/bg1.jpg">
        <div class="container pb-50 pt-80">
          <div class="section-content">
            <div class="row">

              @foreach ($events as $event)
              <div class="col-xs-12 col-sm-6 col-md-4 mb-30 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="pricing table-horizontal maxwidth400">
                  <div class="row">
                    <div class="col p-30 pl-sm-50">
                      <h4 class="mt-0 mb-5"><a  class="text-white" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">{{ Str::limit($event->title,23) }}</a></h4>
                      <ul class="list-inline mb-5 text-white">
                        <li class="pr-0" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><i class="fa fa-calendar mr-5" ></i> {{ $event->start_date }} </li>
                        {{-- <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>| New York</li> --}}
                      </ul>
                      <h5 class="mb-15 mt-15 text-white" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 16px; color: white;">{!! Str::limit($event->description, 62) !!}</h5>
                      <a class="text-white font-weight-600" href="{{ route('events-detail', $event->id) }}">Read More →</a>
                    </div>
                  </div>
                </div>
              </div>       
              @endforeach
                       
            </div>

            <div class="col-md-12">
              {{ $events->links('pagination::bootstrap-4') }}
            </div>
            
          </div>
        </div>
      </section>
    </div>
    <!-- end main-content -->
@endsection
