@extends('layouts.user.app')

@section('content')
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg6.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h3 class="font-28 text-white">Event Details 2</h2>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active text-gray-silver">Page Title</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <ul>
              <li>
                <h5>Topics:</h5>
                <p>{{ $event->title }}</p>
              </li>
              @if($event->host)
              <li>
                <h5>Host:</h5>
                <p>{{ $event->host }}</p>
              </li>
              @endif
              @if($event->loaction)
              <li>
                <h5>Location:</h5>
                <p>#{{  $event->location }}</p>
              </li>
              @endif
              <li>
                <h5>Start Date:</h5>
                <p>{{ $event->start_date }}</p>
              </li>
              @if($event->end_date)
              <li>
                <h5>End Date:</h5>
                <p>{{ $event->end_date }}</p>
              </li>
              @endif
              <li>
                <h5>Share:</h5>
                <div class="styled-icons icon-sm icon-gray icon-circled">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-md-8">
            <div class="owl-carousel-1col" data-nav="true">
              <div class="item"><img src="/event/{{ $event->image }}" style="width: 755px; height: 480px;" alt=""></div>
              {{-- <div class="item"><img src="https://placehold.it/755x480" alt=""></div>
              <div class="item"><img src="https://placehold.it/755x480" alt=""></div>
              <div class="item"><img src="https://placehold.it/755x480" alt=""></div>
              <div class="item"><img src="https://placehold.it/755x480" alt=""></div> --}}
            </div>
          </div>
        </div>

        <div class="row mt-60">
          <div class="col-md-6">
            <h4 class="mt-0">Event Description</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi id perspiciatis facilis nulla possimus quasi, amet qui. Ea rerum officia, aspernatur nulla neque nesciunt alias repudiandae doloremque, dolor, quam nostrum laudantium earum illum odio quasi excepturi mollitia corporis quas ipsa modi nihil, ad ex tempore.</p>
          </div>
          <div class="col-md-6">
            <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
          </div>
        </div>
      </div>
    </section>


  </div>
  <!-- end main-content -->
@endsection
