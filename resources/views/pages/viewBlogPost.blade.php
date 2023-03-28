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
              <h2 class="title text-white">Blog Details</h2>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active text-white">Page Title</li>
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
          <div class="col-md-9">
            <div class="blog-posts single-post">
              <article class="post clearfix mb-0">
                <div class="entry-header">
                  <div class="post-thumb thumb"> <img src="/blog/{{ $blogs->image }}" alt="" class="img-responsive img-fullwidth"> </div>
                </div>
                <div class="entry-content">
                  <div class="entry-meta media no-bg no-border mt-15 pb-8">
                    <div class="media-body pl-5">
                      <div class="event-content pull-left flip">
                        <h3 class="entry-title text-white text-uppercase pt-0 mt-0"><a href="blog-single-right-sidebar.html">{{ $blogs->title }}</a></h3>
                    </div>
                    </div>
                  </div>
                  <div>
                    <h5><i class="fa fa-clock"></i> {{ $blogs->created_at }}</h5>
                    <h5><i class="fa fa-product"></i> {{ $blogs->category }}</h5>
                </div>
                  <p>{{ $blogs->description }}</p>
                  
                </div>
              </article>
            </div>
          </div>

          <div class="col-md-3">
            <div class="sidebar sidebar-left mt-sm-30">
              <div class="widget">
                <h5 class="widget-title line-bottom">Related Posts</h5>
                <div class="latest-posts">
                    @foreach ($related as $relate)
                  <article class="post media-post clearfix pb-0 mb-10">
                    <a class="post-thumb" href="#"><img src="/blog/{{ $relate->image }}" alt=""></a>
                    <div class="post-right">
                      <h5 class="post-title mt-0"><a href="#">{{ $relate->title }}</a></h5>
                    </div>
                  </article>               
                  @endforeach
                 
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
