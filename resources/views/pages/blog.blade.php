@extends('layouts.user.app')

@section('content')
   <!-- Start main-content -->
   <div class="main-content" ng-app="myApp" ng-controller="myCtrl">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-2" data-bg-img="/logos/simple3.jpeg">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title text-white">Blog</h2>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="#">Home</a></li>
                <li class="active text-white">Blog</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row">
          <div class="col-md-3">
            <div class="sidebar sidebar-left mt-sm-30">
              <div class="widget">
                <h5 class="widget-title line-bottom">Latest Post</h5>
                <div class="widget-image-carousel">
                  <div class="item" ng-repeat="latest in latests">
                    <img src="blog/@{{ latest.image }}" alt="">
                    <small class="" style="color: #Fb8151;">@{{ convertDate( latest.created_at) }}</small>
                     <h4 class="title">@{{ reduceText(latest.title,60) }}</h4>
                     <small class="" style="color: #Fb8151;">@{{ latest.category }}</small>
                    <p>@{{ reduceText( latest.description, 80) }}</p>
                  </div>
                </div>
              </div>
  
            </div>
          </div>
          <div class="col-md-6">
            <div class="blog-posts">
              <div class="col-md-12">
                <div class="row list-dashed">
                  <article class="post clearfix mb-30 pb-30" ng-if="posts != null" ng-repeat="post in posts">
                    <div class="entry-header">
                      <div class="post-thumb thumb"> 
                        <img src="blog/@{{ post.image }}" alt="" class="img-responsive img-fullwidth"> 
                      </div>
                    </div>
                    <div class="entry-content border-1px p-20 pr-10">
                      <div class="entry-meta media mt-0 no-bg no-border">
                        <div class="media-body pl-5">
                          <div class="event-content pull-left flip">
                            <small class="" style="color: #Fb8151;">@{{ convertDate(post.created_at) }}</small>
                            <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">@{{ post.title }}</a></h4>
                            {{-- <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>                       
                            <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span> --}}
                            <small class="" style="color: #Fb8151;">@{{ post.category }}</small>
                          </div>
                        </div>
                      </div>
                      <p class="mt-10">@{{ reduceText(post.description, 150) }}</p>
                      <a ng-click="viewPost(post.id)" style="color: #4D7902"; class="btn-read-more">Read more</a>
                      <div class="clearfix"></div>
                    </div>
                  </article>
                  
                 <article class="" ng-if="posts.length <= 0">
                  <div class="bg-theme-color-2" style="padding-top: 10px; padding-bottom: 10px; padding-left: 10px; margin-bottom: 15px; margin-left: 10px; margin-right: 10px;">
                    <h5 class="" style="color: whitesmoke;">!! No post to show</h5></div>
                 </article>

                  {{-- <article class="post clearfix mb-30 pb-30">
                    <div class="entry-header">
                      <div class="post-thumb">
                        <iframe width="600" height="340"
                        src="http://www.youtube.com/embed/oIDqz2BrVec?autoplay=0" allowfullscreen>
                        </iframe>
                      </div>
                    </div>
                    <div class="entry-content border-1px p-20 pr-10">
                      <div class="entry-meta media mt-0 no-bg no-border">
                        <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                          <ul>
                            <li class="font-16 text-white font-weight-600">28</li>
                            <li class="font-12 text-white text-uppercase">Feb</li>
                          </ul>
                        </div>
                        <div class="media-body pl-15">
                          <div class="event-content pull-left flip">
                            <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">Youtube Video Post</a></h4>
                            <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>                       
                            <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>
                          </div>
                        </div>
                      </div>
                      <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda. Pariatur iste veritatis excepturi, ipsa optio nobis.</p>
                      <a href="#" class="btn-read-more">Read more</a>
                      <div class="clearfix"></div>
                    </div>
                  </article> --}}

                </div>
              </div>
              <div class="col-md-12">
                {{-- <nav>
                  <ul class="pagination">
                    <li> <a aria-label="Previous" ng-click="prevPage()"> <span aria-hidden="true">«</span> </a> </li>
                    <li ><a ng-repeat="page in pages">@{{ page }}</a></li>
                    <li> <a aria-label="Next" > <span ng-click="nextPage()" aria-hidden="true">»</span> </a> </li>
                  </ul>
                </nav> --}}
                <div>
                  <nav aria-label="Page navigation example">
                    <ul class="pagination">
                      <li class="page-item"><a  ng-click="prevPage()" >Previous</a></li>
                      <li class="page-item" ng-repeat="page in pages">
                        <a class="page-link"  ng-click="showPage(page)">@{{ page }}</a>
                      </li>
                      <li class="page-item"><a  ng-click="nextPage()" >Next</a></li>
                    </ul>
                  </nav>
              </div>
              </div>

            </div>
          </div>
          <div class="col-md-3">
           <div class="sidebar sidebar-right mt-sm-30">

            <div class="widget">
              <h5 class="widget-title line-bottom">Search box</h5>
              <div class="search-form">
                <form>
                  <div class="input-group">
                    <input ng-model="search" ng-change="searchResults()" type="text" placeholder="Click to Search" class="form-control search-input">
                    <span class="input-group-btn">
                    {{-- <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button> --}}
                    <button type="submit" class="btn search-button">search</button>
                    </span>
                  </div>
                </form>
              </div>
            </div>

            <div class="widget">
              <h5 class="widget-title line-bottom">Categories</h5>
              <div class="categories">
                <ul class="list list-border angle-double-right">
                  @foreach ($categories as $category)
                  <li><a style="color: #4D7902" href="">{{ $category->name }}<span></span></a></li> 
                  @endforeach
                </ul>
              </div>
            </div>


              {{-- <div class="widget">
                <h5 class="widget-title line-bottom">Latest News</h5>
                <div class="latest-posts">
                  <article class="post media-post clearfix pb-0 mb-10" ng-repeat="more in morePosts">
                    <a class="post-thumb" href="#"><img src="blog/@{{ more.image }}" alt=""></a>
                    <div class="post-right">
                      <h5 class="post-title mt-0"><a href="#">@{{ reduceText( more.title, 95)  }}</a></h5>
                    </div>
                  </article>
                </div>
              </div> --}}
              
           </div>
          </div>
        </div>
      </div>
    </section> 
  </div>  
  <!-- end main-content -->  

@endsection
