@extends('layouts.user.app')

@section('content')
   <!-- Start main-content -->
   <div class="main-content">
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
            <li><a href="{{ route('event') }}">Events</a></li>
            <li>{{ $event->title }}</li>
          </ul>
        </div>  

    <!-- Section: Blog -->
    <section>
      <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row">
          <div class="col-md-9 pull-right flip sm-pull-none">
            <div class="blog-posts single-post">
              <article class="post clearfix mb-0">
                @if($event->image)
                <div class="entry-header">
                  <div class="post-thumb thumb"> <img src="/events/{{ $event->image }}" alt="" class="img-responsive img-fullwidth"> </div>
                </div>
                @endif
                <div class="entry-content">
                  <div class="entry-meta media no-bg no-border mt-15 pb-20">
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h3 class="entry-title text-white text-uppercase pt-0 mt-0"><a href="blog-single-right-sidebar.html" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">{{ $event->title }}</a></h3>
                        {{-- <span class="mb-10 text-gray-darkgray mr-10 font-13">Jan 19 Tues</span>                       --}}
                      </div>
                    </div>
                  </div>

                   {{-- <div>
                    {!! $news->description !!}
                   </div> --}}
                   <div style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: bold;">
                  {{ $event->description }}
                   </div>
                </div>
              </article>
            </div>
          </div>
          <div class="col-md-3">
            <div class="sidebar sidebar-left mt-sm-30">
              <div class="widget">
                @if($event->location )
                <h5 class="widget-title line-bottom" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 18px;">Location</h5>
                <p style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; ">{{ $event->location }}</p>
                @endif
                @if($event->host )
                <h5 class="widget-title line-bottom" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 18px;">Host</h5>
                <p style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">{{ $event->host }}</p>
                @endif
                @if($event->location )
                <h5 class="widget-title line-bottom" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 18px;">Start Date</h5>
                <p style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">{{ $event->start_date }}</p>
                @endif
                @if($event->end_date )
                <h5 class="widget-title line-bottom" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 18px;">End Date</h5>
                <p style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">{{ $event->end_date }}</p>
                @endif
              </div>
           
            </div>
          </div>
        </div>
      </div>
    </section> 
  </div>  
  <!-- end main-content -->
@endsection
