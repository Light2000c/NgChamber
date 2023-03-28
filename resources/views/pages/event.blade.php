@extends('layouts.user.app')

@section('content')
  <!-- Start main-content -->
  <div class="main-content" ng-app="eventApp" ng-controller="eventCtrl">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg6.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title text-white">Event</h3>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="#">Home</a></li>
                <li class="active text-gray-silver">Events</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: event calendar -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">

              <div class="col-sm-6 col-md-6 col-lg-6" ng-repeat="event in events">
                <div class="schedule-box maxwidth500 bg-light mb-30">
                  <div class="thumb">
                    <img class="img-fullwidth" alt="" src="event/@{{ event.image }}"  style="width: 220px; height: 200px;">
                    <div class="overlay">
                      <a href="#"><i class="fa fa-calendar mr-5"></i></a>
                    </div>
                  </div>
                  <div class="schedule-details clearfix p-15 pt-10">
                    <h5 ng-click="viewEvent(event.id)" class="font-16 title"><a href="#">@{{ event.title }}</a></h5>
                    <ul class="list-inline font-11 mb-20">
                      <li><i class="fa fa-calendar mr-5"></i> @{{ event.start_date }}</li>
                      <li ng-if="event.location"><i class="fa fa-map-marker mr-5"></i> @{{ event.location }}</li>
                    </ul>
                    <p>@{{ reduceText(event.description, 50) }}</p>
                    <div class="mt-10">
                     <a class="btn btn-dark btn-theme-colored btn-sm mt-10" href="#">Register</a>
                     <a href="#" class="btn btn-dark btn-sm mt-10">Details</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-6"ng-if="events.length <= 0">
                <div class="bg-theme-color-2" style="padding-top: 10px; padding-bottom: 10px; padding-left: 10px; margin-bottom: 15px; margin-left: 10px; margin-right: 10px;">
                  <h5 class="" style="color: whitesmoke;">!! No Events to show</h5></div>
                </div>


              {{-- <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="schedule-box maxwidth500 bg-light mb-30">
                  <div class="thumb">
                    <img class="img-fullwidth" alt="" src="https://placehold.it/220x160">
                    <div class="overlay">
                      <a href="#"><i class="fa fa-calendar mr-5"></i></a>
                    </div>
                  </div>
                  <div class="schedule-details clearfix p-15 pt-10">
                    <h5 class="font-16 title"><a href="#">Business Conferences 2016</a></h5>
                    <ul class="list-inline font-11 mb-20">
                      <li><i class="fa fa-calendar mr-5"></i> DEC 31/2016</li>
                      <li><i class="fa fa-map-marker mr-5"></i> 89 Newyork City.</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet elit. Cum veritatis sequi nulla nihil, dolor voluptatum nemo adipisci eligendi! Sed nisi perferendis, totam harum dicta.</p>
                    <div class="mt-10">
                     <a class="btn btn-dark btn-theme-colored btn-sm mt-10" href="#">Register</a>
                     <a href="#" class="btn btn-dark btn-sm mt-10">Details</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="schedule-box maxwidth500 bg-light mb-30">
                  <div class="thumb">
                    <img class="img-fullwidth" alt="" src="https://placehold.it/220x160">
                    <div class="overlay">
                      <a href="#"><i class="fa fa-calendar mr-5"></i></a>
                    </div>
                  </div>
                  <div class="schedule-details clearfix p-15 pt-10">
                    <h5 class="font-16 title"><a href="#">Business Conferences 2016</a></h5>
                    <ul class="list-inline font-11 mb-20">
                      <li><i class="fa fa-calendar mr-5"></i> DEC 31/2016</li>
                      <li><i class="fa fa-map-marker mr-5"></i> 89 Newyork City.</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet elit. Cum veritatis sequi nulla nihil, dolor voluptatum nemo adipisci eligendi! Sed nisi perferendis, totam harum dicta.</p>
                    <div class="mt-10">
                     <a class="btn btn-dark btn-theme-colored btn-sm mt-10" href="#">Register</a>
                     <a href="#" class="btn btn-dark btn-sm mt-10">Details</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="schedule-box maxwidth500 bg-light mb-30">
                  <div class="thumb">
                    <img class="img-fullwidth" alt="" src="https://placehold.it/220x160">
                    <div class="overlay">
                      <a href="#"><i class="fa fa-calendar mr-5"></i></a>
                    </div>
                  </div>
                  <div class="schedule-details clearfix p-15 pt-10">
                    <h5 class="font-16 title"><a href="#">Business Conferences 2016</a></h5>
                    <ul class="list-inline font-11 mb-20">
                      <li><i class="fa fa-calendar mr-5"></i> DEC 31/2016</li>
                      <li><i class="fa fa-map-marker mr-5"></i> 89 Newyork City.</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet elit. Cum veritatis sequi nulla nihil, dolor voluptatum nemo adipisci eligendi! Sed nisi perferendis, totam harum dicta.</p>
                    <div class="mt-10">
                     <a class="btn btn-dark btn-theme-colored btn-sm mt-10" href="#">Register</a>
                     <a href="#" class="btn btn-dark btn-sm mt-10">Details</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="schedule-box maxwidth500 bg-light mb-30">
                  <div class="thumb">
                    <img class="img-fullwidth" alt="" src="https://placehold.it/220x160">
                    <div class="overlay">
                      <a href="#"><i class="fa fa-calendar mr-5"></i></a>
                    </div>
                  </div>
                  <div class="schedule-details clearfix p-15 pt-10">
                    <h5 class="font-16 title"><a href="#">Business Conferences 2016</a></h5>
                    <ul class="list-inline font-11 mb-20">
                      <li><i class="fa fa-calendar mr-5"></i> DEC 31/2016</li>
                      <li><i class="fa fa-map-marker mr-5"></i> 89 Newyork City.</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet elit. Cum veritatis sequi nulla nihil, dolor voluptatum nemo adipisci eligendi! Sed nisi perferendis, totam harum dicta.</p>
                    <div class="mt-10">
                     <a class="btn btn-dark btn-theme-colored btn-sm mt-10" href="#">Register</a>
                     <a href="#" class="btn btn-dark btn-sm mt-10">Details</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="schedule-box maxwidth500 bg-light mb-30">
                  <div class="thumb">
                    <img class="img-fullwidth" alt="" src="https://placehold.it/220x160">
                    <div class="overlay">
                      <a href="#"><i class="fa fa-calendar mr-5"></i></a>
                    </div>
                  </div>
                  <div class="schedule-details clearfix p-15 pt-10">
                    <h5 class="font-16 title"><a href="#">Business Conferences 2016</a></h5>
                    <ul class="list-inline font-11 mb-20">
                      <li><i class="fa fa-calendar mr-5"></i> DEC 31/2016</li>
                      <li><i class="fa fa-map-marker mr-5"></i> 89 Newyork City.</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet elit. Cum veritatis sequi nulla nihil, dolor voluptatum nemo adipisci eligendi! Sed nisi perferendis, totam harum dicta.</p>
                    <div class="mt-10">
                     <a class="btn btn-dark btn-theme-colored btn-sm mt-10" href="#">Register</a>
                     <a href="#" class="btn btn-dark btn-sm mt-10">Details</a>
                    </div>
                  </div>
                </div>
              </div> --}}
            </div>
            <div class="row">
              <div class="col-sm-12">
                <nav ng-if="events.length > 0" aria-label="Page navigation example">
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
          <div class="col-md-3">
            <div class="sidebar sidebar-right mt-sm-30">
              <div class="widget">
                <h5 class="widget-title line-bottom">Search box</h5>
                <div class="search-form">
                  <form>
                    <div class="input-group">
                      <input ng-model="search" ng-change="searchResults()" type="text" placeholder="Search event by title" class="form-control search-input">
                      <span class="input-group-btn">
                      <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                      </span>
                    </div>
                  </form>
                </div>
              </div>
              <div class="widget">
                <h5 class="widget-title line-bottom">Categories</h5>
                <div class="categories">
                  <ul class="list list-border angle-double-right">
                    @foreach($categories as $category)
                    <li><a href="" style="color: #4D7902;">{{ $category->name }}</a></li>
                    @endforeach
                  </ul>
                </div>
              </div>
              <div class="widget">
                <h5 class="widget-title line-bottom">Latest News</h5>
                <div class="latest-posts">
                  @foreach ($latestNews as $news)
                  <article class="post media-post clearfix pb-0 mb-10">   
                  <a class="post-thumb" href="#"><img src="blog/{{ $news->image }}" alt="" style="width: 75px; height: 75px;"></a>
                  <div class="post-right">
                    <h5 class="post-title mt-0"><a href="#">{{ Str::limit($news->title, 80) }}</a></h5>
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
