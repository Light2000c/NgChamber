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
              <h2 class="title text-white">Event Detail</h2>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="#">Home</a></li>
                <li><a href="#">Event</a></li>
                <li class="active text-white">This is event title</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Blog -->
    <section>
      <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row">
          <div class="col-md-9 pull-right flip sm-pull-none">
            <div class="blog-posts single-post">
              <article class="post clearfix mb-0">
                {{-- <div class="entry-header">
                  <div class="post-thumb thumb"> <img src="/news/{{ $news->image }}" alt="" class="img-responsive img-fullwidth"> </div>
                </div> --}}
                <div class="entry-content">
                  <div class="entry-meta media no-bg no-border mt-15 pb-20">
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h3 class="entry-title text-white text-uppercase pt-0 mt-0"><a href="blog-single-right-sidebar.html">This Is The Event Title</a></h3>
                        <span class="mb-10 text-gray-darkgray mr-10 font-13">Jan 19 Tues</span>                       
                      </div>
                    </div>
                  </div>

                   {{-- <div>
                    {!! $news->description !!}
                   </div> --}}
                   <div>
                   Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure deserunt repudiandae animi magnam illum minus a cum voluptatum delectus facilis id nobis facere omnis asperiores, ab corrupti neque. Iure, perspiciatis repudiandae nesciunt similique officiis beatae unde nulla in saepe explicabo reiciendis maxime consequatur facilis, soluta pariatur cupiditate doloremque consectetur aliquam! Dicta voluptatibus veritatis, in possimus laudantium aut laborum assumenda rerum quae accusantium soluta ut, harum omnis ducimus placeat unde iste laboriosam. Quas, magni velit! Vitae voluptatibus harum incidunt illum ea nulla est. Quis alias eius deleniti laborum ut, repellendus provident dignissimos consequuntur enim id dolor ab facilis unde magnam similique. Saepe accusantium magni et sed, eligendi adipisci eos voluptates autem aliquid, ipsam quasi possimus minus aut numquam nulla perferendis veniam.
                   </div>
                </div>
              </article>
            </div>
          </div>
          <div class="col-md-3">
            <div class="sidebar sidebar-left mt-sm-30">
              <div class="widget">
                <h5 class="widget-title line-bottom">Search box</h5>
                <div class="search-form">
                  <form>
                    <div class="input-group">
                      <input type="text" placeholder="Click to Search" class="form-control search-input">
                      <span class="input-group-btn">
                      <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                      </span>
                    </div>
                  </form>
                </div>
              </div>
           
            </div>
          </div>
        </div>
      </div>
    </section> 
  </div>  
  <!-- end main-content -->
@endsection
