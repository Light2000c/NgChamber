@extends('layouts.user.app')

@section('content')
    <!-- Start main-content -->
    <div class="main-content">
      <!-- Section: inner-header -->
      <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg6.jpg">
        <div class="container pt-70 pb-20">
          <!-- Section Content -->
          <div class="section-content">
            <div class="row">
              <div class="col-md-12 text-center">
                <h2 class="title text-white">Events</h3>
              </div>
            </div>
          </div>
        </div>
      </section>
  
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
                      <h4 class="mt-0 mb-5"><a href="#" class="text-white">{{ Str::limit($event->title,23) }}</a></h4>
                      <ul class="list-inline mb-5 text-white">
                        <li class="pr-0"><i class="fa fa-calendar mr-5"></i> {{ $event->start_date }} </li>
                        {{-- <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>| New York</li> --}}
                      </ul>
                      <p class="mb-15 mt-15 text-white">{{ Str::limit($event->description, 62) }}</p>
                      <a class="text-white font-weight-600" href="#">Read More →</a>
                    </div>
                  </div>
                </div>
              </div>       
              @endforeach

              {{-- <div class="col-xs-12 col-sm-6 col-md-4 mb-30 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="pricing table-horizontal maxwidth400">
                  <div class="row">
                    <div class="col p-30 pl-sm-50">
                      <h4 class="mt-0 mb-5"><a href="#" class="text-white">Upcoming Events Title</a></h4>
                      <ul class="list-inline mb-5 text-white">
                        <li class="pr-0"><i class="fa fa-calendar mr-5"></i> June 26, 2016 |</li>
                        <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>New York</li>
                      </ul>
                      <p class="mb-15 mt-15 text-white">Lorem ipsum dolor sit amet, consectetur adi isicing elit. Quas eveniet, nemo dicta. Ullam nam. </p>
                      <a class="text-white font-weight-600" href="#">Read More →</a>
                    </div>
                  </div>
                </div>
              </div>  --}}

                                         
            </div>

            <div class="col-md-12">
              <nav>
                  <ul class="pagination">
                    <li> <a aria-label="Previous" href="#"> <span aria-hidden="true">«</span> </a> </li>
                    <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">...</a></li>
                  <li> <a aria-label="Next" href="#"> <span aria-hidden="true">»</span> </a> </li>
                </ul>
              </nav>
            </div>
            
          </div>
        </div>
      </section>
    </div>
    <!-- end main-content -->
@endsection
