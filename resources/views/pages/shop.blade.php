@extends('layouts.user.app')

@section('content')
  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="web/images/bg/bg3.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white text-center">Shop Sidebar</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active text-gray-silver">Page Title</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-sm-12 col-md-9">
              <div class="row multi-row-clearfix">
                <div class="products">
                  <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                    <div class="product">
                      <span class="tag-sale">Sale!</span>
                      <div class="product-thumb">
                        <img alt="" src="web/images/products/1.png" class="img-responsive img-fullwidth">
                        <div class="overlay">
                          <div class="btn-add-to-cart-wrapper">
                            <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">Add To Cart</a>
                          </div>
                          <div class="btn-product-view-details">
                            <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="shop-product-details.html">View detail</a>
                          </div>
                        </div>
                      </div>
                      <div class="product-details text-center">
                        <a href="#"><h5 class="product-title">Book</h5></a>
                        <div class="star-rating" title="Rated 3.50 out of 5"><span style="width: 67%;">3.50</span></div>
                        <div class="price"><del><span class="amount">$110.00</span></del><ins><span class="amount">$90.00</span></ins></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                    <div class="product">
                      <div class="product-thumb">
                        <img alt="" src="web/images/products/2.png" class="img-responsive img-fullwidth">
                        <div class="overlay">
                          <div class="btn-add-to-cart-wrapper">
                            <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">Add To Cart</a>
                          </div>
                          <div class="btn-product-view-details">
                            <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="shop-product-details.html">View detail</a>
                          </div>
                        </div>
                      </div>
                      <div class="product-details text-center">
                        <a href="#"><h5 class="product-title">Pen</h5></a>
                        <div class="star-rating" title="Rated 5.00 out of 5"><span style="width: 100%;">5.00</span></div>
                        <div class="price"><ins><span class="amount">$480.00</span></ins></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                    <div class="product">
                      <span class="tag-sale">Sale!</span>
                      <div class="product-thumb">
                        <img alt="" src="web/images/products/3.png" class="img-responsive img-fullwidth">
                        <div class="overlay">
                          <div class="btn-add-to-cart-wrapper">
                            <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">Add To Cart</a>
                          </div>
                          <div class="btn-product-view-details">
                            <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="shop-product-details.html">View detail</a>
                          </div>
                        </div>
                      </div>
                      <div class="product-details text-center">
                        <a href="#"><h5 class="product-title">College Bag</h5></a>
                        <div class="star-rating" title="Rated 3.50 out of 5"><span style="width: 60%;">3.50</span></div>
                        <div class="price"><del><span class="amount">$70.00</span></del><ins><span class="amount">$55.00</span></ins></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                    <div class="product">
                      <div class="product-thumb">
                        <img alt="" src="web/images/products/4.png" class="img-responsive img-fullwidth">
                        <div class="overlay">
                          <div class="btn-add-to-cart-wrapper">
                            <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">Add To Cart</a>
                          </div>
                          <div class="btn-product-view-details">
                            <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="shop-product-details.html">View detail</a>
                          </div>
                        </div>
                      </div>
                      <div class="product-details text-center">
                        <a href="#"><h5 class="product-title">Ladies Bag</h5></a>
                        <div class="star-rating" title="Rated 3.50 out of 5"><span style="width: 75%;">3.50</span></div>
                        <div class="price"><ins><span class="amount">$185.00</span></ins></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                    <div class="product">
                      <span class="tag-sale">Sale!</span>
                      <div class="product-thumb">
                        <img alt="" src="web/images/products/5.png" class="img-responsive img-fullwidth">
                        <div class="overlay">
                          <div class="btn-add-to-cart-wrapper">
                            <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">Add To Cart</a>
                          </div>
                          <div class="btn-product-view-details">
                            <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="shop-product-details.html">View detail</a>
                          </div>
                        </div>
                      </div>
                      <div class="product-details text-center">
                        <a href="#"><h5 class="product-title">Note Book</h5></a>
                        <div class="star-rating" title="Rated 3.50 out of 5"><span style="width: 40%;">3.50</span></div>
                        <div class="price"><del><span class="amount">$220.00</span></del><ins><span class="amount">$210.00</span></ins></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                    <div class="product">
                      <span class="tag-sale">Sale!</span>
                      <div class="product-thumb">
                        <img alt="" src="web/images/products/6.png" class="img-responsive img-fullwidth">
                        <div class="overlay">
                          <div class="btn-add-to-cart-wrapper">
                            <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">Add To Cart</a>
                          </div>
                          <div class="btn-product-view-details">
                            <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="shop-product-details.html">View detail</a>
                          </div>
                        </div>
                      </div>
                      <div class="product-details text-center">
                        <a href="#"><h5 class="product-title">BWatch</h5></a>
                        <div class="star-rating" title="Rated 3.50 out of 5"><span style="width: 80%;">3.50</span></div>
                        <div class="price"><del><span class="amount">$165.00</span></del><ins><span class="amount">$160.00</span></ins></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                    <div class="product">
                      <span class="tag-sale">Sale!</span>
                      <div class="product-thumb">
                        <img alt="" src="web/images/products/7.png" class="img-responsive img-fullwidth">
                        <div class="overlay">
                          <div class="btn-add-to-cart-wrapper">
                            <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">Add To Cart</a>
                          </div>
                          <div class="btn-product-view-details">
                            <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="shop-product-details.html">View detail</a>
                          </div>
                        </div>
                      </div>
                      <div class="product-details text-center">
                        <a href="#"><h5 class="product-title">Color Box</h5></a>
                        <div class="star-rating" title="Rated 3.50 out of 5"><span style="width: 32%;">3.50</span></div>
                        <div class="price"><del><span class="amount">$120.00</span></del><ins><span class="amount">$110.00</span></ins></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                    <div class="product">
                      <div class="product-thumb">
                        <img alt="" src="web/images/products/8.png" class="img-responsive img-fullwidth">
                        <div class="overlay">
                          <div class="btn-add-to-cart-wrapper">
                            <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">Add To Cart</a>
                          </div>
                          <div class="btn-product-view-details">
                            <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="shop-product-details.html">View detail</a>
                          </div>
                        </div>
                      </div>
                      <div class="product-details text-center">
                        <a href="#"><h5 class="product-title">Ruler</h5></a>
                        <div class="star-rating" title="Rated 3.50 out of 5"><span style="width: 85%;">3.50</span></div>
                        <div class="price"><ins><span class="amount">$240.00</span></ins></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                    <div class="product">
                      <div class="product-thumb">
                        <img alt="" src="web/images/products/9.png" class="img-responsive img-fullwidth">
                        <div class="overlay">
                          <div class="btn-add-to-cart-wrapper">
                            <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">Add To Cart</a>
                          </div>
                          <div class="btn-product-view-details">
                            <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="shop-product-details.html">View detail</a>
                          </div>
                        </div>
                      </div>
                      <div class="product-details text-center">
                        <a href="#"><h5 class="product-title">Table Lamp</h5></a>
                        <div class="star-rating" title="Rated 3.50 out of 5"><span style="width: 56%;">3.50</span></div>
                        <div class="price"><ins><span class="amount">$480.00</span></ins></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3">
              <div class="sidebar sidebar-right mt-sm-30">
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
                <div class="widget">
                  <h5 class="widget-title line-bottom">Categories</h5>
                  <div class="categories">
                    <ul class="list list-border angle-double-right">
                      <li><a href="#">Creative<span>(19)</span></a></li>
                      <li><a href="#">Portfolio<span>(21)</span></a></li>
                      <li><a href="#">Fitness<span>(15)</span></a></li>
                      <li><a href="#">Gym<span>(35)</span></a></li>
                      <li><a href="#">Personal<span>(16)</span></a></li>
                    </ul>
                  </div>
                </div>
                <div class="widget">
                  <h5 class="widget-title line-bottom">Top Sellers</h5>
                  <div class="top-sellers">
                    <article class="post media-post clearfix pb-0 mb-10">
                      <a class="post-thumb" href="#"><img src="web/images/products/sm1.jpg" alt=""></a>
                      <div class="post-right">
                        <h5 class="post-title font-weight-600 mt-0 mb-0"><a href="#">Brake Disk</a></h5>
                        <div class="product-detail">
                          <div class="price mb-10"><ins><span class="amount">$480.00</span></ins></div>
                          <div title="Rated 3.50 out of 5" class="star-rating ml-0"><span style="width: 60%;">3.50</span></div>
                        </div>
                      </div>
                    </article>
                    <article class="post media-post clearfix pb-0 mb-10">
                      <a class="post-thumb" href="#"><img src="web/images/products/sm2.jpg" alt=""></a>
                      <div class="post-right">
                        <h5 class="post-title font-weight-600 mt-0 mb-0"><a href="#">Brake Disk</a></h5>
                        <div class="product-detail">
                          <div class="price mb-10"><ins><span class="amount">$480.00</span></ins></div>
                          <div title="Rated 3.50 out of 5" class="star-rating ml-0"><span style="width: 60%;">3.50</span></div>
                        </div>
                      </div>
                    </article>
                    <article class="post media-post clearfix pb-0 mb-10">
                      <a class="post-thumb" href="#"><img src="web/images/products/sm3.jpg" alt=""></a>
                      <div class="post-right">
                        <h5 class="post-title font-weight-600 mt-0 mb-0"><a href="#">Brake Disk</a></h5>
                        <div class="product-detail">
                          <div class="price mb-10"><ins><span class="amount">$480.00</span></ins></div>
                          <div title="Rated 3.50 out of 5" class="star-rating ml-0"><span style="width: 60%;">3.50</span></div>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
                <div class="widget">
                  <h5 class="widget-title line-bottom">Photos from Flickr</h5>
                  <div id="flickr-feed" class="clearfix">
                    <!-- Flickr Link -->
                    <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=52617155@N08">
                    </script>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <nav>
                <ul class="pagination">
                  <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">&laquo;</span> </a> </li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">...</a></li>
                  <li> <a href="#" aria-label="Next"> <span aria-hidden="true">&raquo;</span> </a> </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
@endsection
