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
            <h2 class="font-28 text-white" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: bold;">NEWS</h2>
          </div>
        </div>
      </div>
    </div>      
  </section>
  <div>
  <ul class="breadcrumb">
    <li><a href="{{ route('home') }}">Home</a></li>
    <li>News</li>
  </ul>
</div>  


    <!-- Section: Blog -->
    <section>
      <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row multi-row-clearfix">
          <div class="blog-posts">
            <div class="col-md-9">
              <div class="list-dashed">

                @foreach ($news as $new)
                <article class="post clearfix mb-30 pb-30">
                  <div class="row">
                    <div class="col-sm-5">
                      <div class="entry-header">
                        <div class="post-thumb"> <img class="img-responsive img-fullwidth" src="/news/{{ $new->image }}" alt=""> </div>
                      </div>
                    </div>
                    <div class="col-sm-7">
                      <div class="entry-content mt-0">
                        <a href="{{ route('news-details', $new) }}">
                        <h4 class="entry-title mt-0 pt-0" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">{{ $new->title }}</h4>
                        </a>
                        <ul class="list-inline font-12 mb-20 mt-10">
                          <li><a  class="text-theme-colored" style="color: #4D7902; text-transform: capitalize; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">{{ $new->category }} | </a></li>
                          <li><span class="text-theme-colored" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" >{{ $new->created_at }}</span></li>
                        </ul>
                        <div class="mb-30" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 16px;">{!! Str::limit($new->description,170) !!}</div>
                      </div>
                    </div>
                  </div>
                </article>
                @endforeach
              </div>
            </div>

            <div class="col-md-3">
              <div class="widget">
                <h4 class="widget-title line-bottom">Categories</h4>
                <div class="categories">
                  <ul class="list list-border angle-double-right">
                    @foreach ($categories as $category)
                    <li><a style="color: #4D7902; text-transform: uppercase;" href="{{ route('news', $category->name ) }}">{{ $category->name }}<span></span></a></li> 
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              {{ $news->links('pagination::bootstrap-4') }}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
  @endsection