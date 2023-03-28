@extends('layouts.user.app')

@section('content')
  <!-- Start main-content -->
  <div class="main-content" ng-app="myApp" ng-controller="myCtrl">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="web/images/bg/bg3.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white text-center">Shop</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="#">Home</a></li>
                <li class="active text-gray-silver">Shop</li>
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
                  @if($products->count())
                  @foreach ($products as $product)
                  <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                    <div class="product" style="max-height: 100%;">
                      {{-- <span class="tag-sale">Sale!</span> --}}
                      <div class="product-thumb">
                        <img alt="" src="products/{{ $product->product_image }}" class="img-responsive img-fullwidth" style="width:285px; height: 300px">
                        <div class="overlay">
                           <div class="btn-add-to-cart-wrapper">
                            <button id="" class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700">Wishlist </button>
                          </div>
                          {{-- <div class="btn-add-to-cart-wrapper">
                            <button id="{{ $product->id }}" class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700">favorite</button>
                          </div>
                          <script>
                            $(document).ready(function() {
                                $("#{{ $product->id}}").on("click", function(e) {
                                    var cartBtn = document.getElementById("{{ $product->id }}").value;
                                    e.preventDefault();
                                    $.ajax({
                                        type: 'POST',
                                        url: "http://127.0.0.1:8000/api/addCart",
                                        data: {
                                            userId: "{{ Auth::user()->id }}",
                                            productId: "{{ $product->id }}",
                                        },
                                        success: function(data) {
                                            res = JSON.parse(data);
                                            if (res.success) {
                                                $('#{{ $product->id }}').hide();
                                                // cartCount("{{ Auth::user()->id }}");
                                            }
                                        }
                                    });
                                });
                            });
                        </script> --}}
                          <div class="btn-product-view-details">
                            <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="{{ route('product-details', $product) }}"> Details </a>
                          </div>
                        </div>
                      </div>
                      <div class="product-details text-center">
                        <a href="#"><h5 class="product-title">{{ $product->product_name }}</h5></a>
                        <div class="price"><del><span class="amount">₦90.00</span></del><ins><span style="color: #Fb8151;" class="amount">₦{{ number_format($product->product_price) }}</span></ins></div>
                      </div>
                    </div>
                  </div>   
                  @endforeach    
                  @else
                  
                  <div class="bg-theme-color-2" style="padding-top: 10px; padding-bottom: 10px; padding-left: 10px; margin-bottom: 15px; margin-left: 10px; margin-right: 10px;">
                    <h5 class="" style="color: whitesmoke;">!! No products to show</h5></div>
                  @endif
                 
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
                      @foreach ($categories as $category)
                      <li><a href="">{{ $category->name }}<span></span></a></li> 
                      @endforeach
                    </ul>
                  </div>
                </div>
                <div class="widget">
                  <h5 class="widget-title line-bottom">Top Products</h5>
                  <div class="top-sellers">
                    @foreach($topProducts as $topProduct)
                    <article class="post media-post clearfix pb-0 mb-10">
                      {{-- <a class="post-thumb" href="#"><img src="web/images/products/sm1.jpg" alt=""></a> --}}
                      <a class="post-thumb" href="#"><img src="products/{{ $topProduct->product_image }}" alt="" style="width: 85px" height="85px"></a>
                      <div class="post-right">
                        <h5 class="post-title font-weight-600 mt-0 mb-0"><a href="#">{{ $topProduct->product_name }}</a></h5>
                        <div class="product-detail">
                          <div class="price mb-10"><ins><span class="amount"  style="color: #4D7902">₦{{ number_format($product->product_price) }}</span></ins></div>
                        </div>
                      </div>
                    </article>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              {{ $products->links('pagination::default') }}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
@endsection
