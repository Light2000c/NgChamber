@extends('layouts.user.app')

@section('content')
  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-2" data-bg-img="/logos/simple3.jpeg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white text-center">Product Details</h2>
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

    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="product">
              <div class="col-md-5">
                <div class="product-image d-flex justify-content-center">
                  <div class="zoom-gallery">
                    <a href="images/products/lg1.jpg" title="Title Here 1"><img src="/products/{{ $product->product_image }}" alt="" style="width: 460px; height: 460px;"></a>
                  </div>
                </div>
              </div>
              <div class="col-md-7">
                <div class="product-summary">
                  <h2 class="product-title">{{ $product->product_name }}</h2>
                  <div class="price"> <del><span class="amount">₦1000.00</span></del> <ins><span style="color: #Fb8151;" class="amount">₦{{ number_format($product->product_price) }}</span></ins> </div>
                  <div class="short-description">
                    <p>{{ Str::limit($product->product_description,120) }}</p>
                  </div>
                  <div class="category"><strong>Category:</strong> <a>{{ $product->product_category}}</a></div>

                  <div class="">
                    <hr>
                    <div>
                   <div class="" style="border: 1px black solid; width: 50px; height: 50px; border-radius: 50%; background-image: url('https://ionicframework.com/docs/img/demos/avatar.svg'); background-size: contain; right: 0; bottom: 0;">
                   </div>
                   <div>
                    @if($product->user->is_admin == 1)
                    <h5 class="" style="font-size: 18px;">NiDCC Team</h5>
                    @else
                    <h5 class="" style="font-size: 18px;">{{ $product->user->fullname }}</h5>
                    @endif
                   </div>
                   <div class="" style="display: flex; margin-top: 25px;">
                    <button class="single_add_to_cart_button btn btn-theme-colored" style="margin-right: 5px;" type="submit"><i class="fa fa-phone"></i></button>
                    <button class="single_add_to_cart_button btn btn-theme-colored" style="margin-right: 5px;" type="submit"><i class="fa fa-whatsapp"></i></button>
                    <button class="single_add_to_cart_button btn btn-theme-colored" type="submit">Request a call</button>
                   </div>
                  </div>

                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="horizontal-tab product-tab">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab1" data-toggle="tab">Description</a></li>
                    <li><a href="#tab2" data-toggle="tab">Additional Information</a></li>
                    <li><a href="#tab3" data-toggle="tab">Reviews</a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab1">
                      <h3>Product Description</h3>
                      {{ $product->product_description }}
                    </div>
                    <div class="tab-pane fade" id="tab2">
                      <table class="table table-striped">
                        <tbody>
                          <tr>
                            <th>Brand</th>
                            <td><p>{{ $product->product_brand? $product->product_brand : 'Not Available' }}</p></td>
                          </tr>
                          <tr>
                            <th>Size</th>
                            <td><p>{{ $product->product_size? $product->product_size : 'Not Available' }}</p></td>
                          </tr>
                          <tr>
                            <th>Colour</th>
                            <td><p>{{ $product->product_colour? $product->product_colour : 'Not Available' }}</p></td>
                          </tr>

                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane fade" id="tab3">
                      <div class="reviews">
                        <ol class="commentlist">
                          <li class="comment">
                            <div class="media"> <a href="#" class="media-left"><img class="img-circle" alt="" src="https://placehold.it/75x75" width="75"></a>
                              <div class="media-body">
                                <ul class="review_text list-inline">
                                  <li>
                                    <div title="Rated 5.00 out of 5" class="star-rating"><span style="width: 100%;">5.00</span></div>
                                  </li>
                                  <li>
                                    <h5 class="media-heading meta"><span class="author">Tom Joe</span> – Mar 15, 2015:</h5>
                                  </li>
                                </ul>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat purus tempor sem molestie, sed blandit lacus posuere. Lorem ipsum dolor sit amet.</div>
                            </div>
                          </li>
                          <li class="comment">
                            <div class="media"> <a href="#" class="media-left"><img class="img-circle" alt="" src="https://placehold.it/75x75" width="75"></a>
                              <div class="media-body">
                                <ul class="review_text list-inline">
                                  <li>
                                    <div title="Rated 4.00 out of 5" class="star-rating"><span style="width: 80%;">4.00</span></div>
                                  </li>
                                  <li>
                                    <h5 class="media-heading meta"><span class="author">Mark Doe</span> – Jan 23, 2015:</h5>
                                  </li>
                                </ul>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat purus tempor sem molestie, sed blandit lacus posuere. Lorem ipsum dolor sit amet.</div>
                            </div>
                          </li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <h3 class="line-bottom">Related Products</h3>
              <div class="row multi-row-clearfix">
                <div class="products related">
                    @foreach($others as $other)
                  <div class="col-sm-6 col-md-3 col-lg-3 mb-sm-30">
                    <div class="product">
                      <span class="tag-sale">Sale!</span>
                      <div class="product-thumb"> 
                        <img alt="" src="/products/{{ $other->product_image }}" class="img-responsive img-fullwidth" style="width:285px; height: 300px">
                        <div class="overlay">
                          <div class="btn-add-to-cart-wrapper">
                            <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">WishList</a>
                          </div>
                          <div class="btn-product-view-details">
                            <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">Details</a>
                          </div>
                        </div>
                      </div>
                      <div class="product-details text-center">{{  $other->product_name }}</h5></a>
                        <div class="price"><del><span class="amount">₦90.00</span></del><ins><span style="color: #Fb8151;" class="amount">₦{{ number_format($product->product_price) }}</span></ins></div>
                      </div>
                    </div>
                  </div>
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
