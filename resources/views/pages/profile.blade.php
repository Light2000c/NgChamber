@extends('layouts.user.app')

@section('content')
   <!-- Start main-content -->
   <div class="main-content" ng-app="profileApp" ng-controller="profileCtrl">
   <!-- Section: inner-header -->
   <section class="inner-header divider parallax layer-overlay overlay-dark-2" data-bg-img="/logos/simple3.jpeg">
    <div class="container pt-60 pb-60">
      <!-- Section Content -->
      <div class="section-content">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="font-28 text-white" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: bold;">PROFILE</h2>
          </div>
        </div>
      </div>
    </div>      
  </section>
  <div>
  <ul class="breadcrumb">
    <li><a href="{{ route('home') }}">Home</a></li>
    <li>Profile</li>
  </ul>
</div>  


    @if(session('info'))
    @php
alert()->info('info', session('info'))->persistent('Dismiss');
@endphp

@endif

    <section>

      <div class="container mt-30 mb-30 pt-30 pb-30">
      <div class="row" >
      <div class="col-md-3 p-15">
        <div class="pb-15">
         <h4>Welcome {{ Auth::user()->fullname }}!</h4>
         <p>Manage your account.</p>
        </div>

        <ul class="nav nav-pills nav-stacked">
          <li class="active "><a href="{{ route('profile') }}">Overview</a></li>
          <li><a  href="{{ route('edit-profile') }}">My Profile</a></li>
          <li ><a  href="{{ route('transactions') }}">Transactions</a></li>
          {{-- <li><a  href="{{ route('edit-address') }}">Address</a></li>
          <li><a  href="{{ route('manage-product') }}">Products</a></li>
          <li><a  href="{{ route('call-request') }}">Call Request</a></li>
          <li><a  href="{{ route('wishlist') }}">Wishlist</a></li> --}}
        </ul>
      </div>

      <div class="col-md-9">
      <div class="tab-contents">
        <div id="overview" class="" style="margin-bottom: 25px;">
          <h3  style="color: #4D7902;">Overview</h3>
        </div>

        @if(Auth::user() && Auth::user()->is_paid_user != 1)
        <div class="alert alert-success" role="alert">
          <h4 class="alert-heading">Well done!</h4>
          <p style="font-size: 18px">Thank you for joining us. For you to complete your registration, Please Click the link below to purchase a Membership plan</p>
          <hr>
          <p class="mb-0" style="font-size: 18px; font-weight: bold;"><a href="{{ route('plans') }}">Purchase Plan <i class="fa fa-arrow-right" style="margin-left: 3px;"></i></a></p>
        </div>
        @endif

        <div class="row">
          <div class="col-md-6">
            <div class="profile-box " style="margin-bottom: 25px">
              <div>
                <h5 style="color: #4D7902;">My Profile</h5>
                <small>Account Information</small>
              </div>
              <div>
              <p>Clinton Onitsha</p>

              @if(Auth::user()->is_paid_user == 1)
              <p>Membership -  {{ $plan->type }}</p>
              @endif

             @if(Auth::user()->email_verified_at)
              <p>Email  -   <span class="badge badge-success" style="background-color: #4D7902;">Verified</span></p>
              @endif
              </div>
              <div class="" >
              <a href="{{ route('edit-profile') }}">
                <div style="display: flex; justify-content: space-between">
                  <span>Edit Profile</span><span><i class="fa fa-angle-right" style="transform: scale(1.5)"></i></span></div>
                </a>
              </div>
            </div>
          </div>


          <div class="col-md-6">
            <div class="profile-box" style="margin-bottom: 25px">
              <div>
                <h5 style="color: #4D7902;">Transaction</h5>
                <small>Transaction History</small>
              </div>
              <div>
              
              </div>
              <div class="" >
              <a href="{{ route('transactions') }}">
                <div style="display: flex; justify-content: space-between">
                  <span>View All Transactions</span><span><i class="fa fa-angle-right" style="transform: scale(1.5)"></i></span></div>
                </a>
              </div>
            </div>
          </div>

{{-- 

          <div class="col-md-6">
            <div class="profile-box" style="margin-bottom: 25px">
              <div>
                <h5 style="color: #4D7902;">Call request</h5>
                <small>Manage Call Request</small>
              </div>
              <div>
                <p><b>0 </b> Call Request</p>
              </div>
              <div class="" >
              <a href="{{ route('call-request') }}">
                <div style="display: flex; justify-content: space-between">
                  <span>View Call Request</span><span><i class="fa fa-angle-right" style="transform: scale(1.5)"></i></span></div>
                </a>
              </div>
            </div>
          </div> --}}

          {{-- <div class="col-md-6" >
            <div class="profile-box" style="margin-bottom: 25px">
              <div>
                <h5>Address</h5>
                <small>Address information</small>
              </div>
              <div>
             
              </div>
              <div class="" >
              <a href="{{ route('edit-address') }}">
                <div style="display: flex; justify-content: space-between">
                  <span>Edit Address</span><span><i class="fa fa-angle-right" style="transform: scale(1.5)"></i></span></div>
                </a>
              </div>
            </div>
          </div> --}}
{{-- 
          <div class="col-md-6" >
            <div class="profile-box" style="margin-bottom: 25px">
              <div>
                <h5>Wishlist</h5>
                <small>Manage Wishlist</small>
              </div>
              <div>
                <p><b>3 </b> wishes</p>
              </div>
              <div class="" >
              <a href="{{ route('wishlist') }}">
                <div style="display: flex; justify-content: space-between">
                  <span>Go To Wishlist</span><span><i class="fa fa-angle-right" style="transform: scale(1.5)"></i></span></div>
                </a>
              </div>
            </div>
          </div> --}}


        </div>

      </div>
      </div>

    </div>
  </div>
  </section>

    {{-- <section>
      <div class="container mt-30 mb-30 pt-30 pb-30">

        <div class="row">
        <div class="col-sm-6 col-md-3" style="margin-right: 15px; margin-left: 15px; margin-bottom: 30px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
            <div>
            <div class="" style="display: flex; justify-content: center;">
            <div class="" style="width: 200px; height: 200px; border-radius: 50%; border: 1px black solid; margin-top: 20px; background-image: url('https://ionicframework.com/docs/img/demos/avatar.svg'); background-size: contain; right: 0; bottom: 0;">
            
            </div>
        </div>
            <div class="" style="margin-top: 30px; text-align: center;">
              @if(Auth::user())
                <p>{{  Auth::user()->fullname }}</p>
                <p>{{ Auth::user()->email  }}</p>
                @endif()
              
                <button class="btn btn-primary btn-medium" style="margin-bottom: 10px;">Edit Profile</button>
            </div>
        </div>
    </div>

        <div class="col-md-8 border-1 mr-2" style="margin-right: 15px; margin-left: 15px; padding-top: 20px; padding-bottom:10px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
          <form action="{{ route('profile') }}" method="post" enctype="multipart/form-data">
            @csrf

            @if(session('success'))
            @php
        alert()->success('success', session('success'))->persistent('Dismiss');
        @endphp

        @endif

        @if(session('error'))
        @php
    alert()->success('error', session('error'))->persistent('Dismiss');
    @endphp

    @endif
            <div class="" style="display: flex; justify-content: end; margin-bottom: 30px;">
                <button ng-if="!showForm" ng-click="toggleForm()" class="btn btn-primary btn-small"><i class="fa fa-plus" style="margin-right: 5px;"></i> Sell Product</button>
                <button ng-if="showForm" ng-click="toggleForm()" class="btn btn-primary btn-small"><i class="fa fa-times" style="margin-right: 5px;"></i> Close Form</button>
            </div>

            <div class="" style="" ng-if="showForm">
                <div class="form-group">
                    <label for="Product Name">Product Name</label>
                    <input class="form-control" name="product_name" type="text" placeholder="Enter Product Name" style="background-color: whitesmoke;">
                @error('product_name')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
                  </div>

                <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                    <label for="Product Price">Product price</label>
                    <input class="form-control" name="product_price" type="number" placeholder="Enter Product Price" style="background-color: whitesmoke;">
                    @error('product_price')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                  </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                    <label for="Product Price">Product Category</label>
                   <Select class="form-control" name="product_category" style="background-color: whitesmoke;">
                      <option value="">Select a Category</option>
                      @foreach ($categories as $category)
											<option value="{{ $category->name}}">{{ $category->name }}</option>
											@endforeach
                   </Select>
                   @error('product_category')
                   <small class="text-danger">{{ $message }}</small>
                 @enderror
                  </div>
              </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                       <div class="form-group">
                          <label for="Product brand">Product Brand (Optional)</label>
                          <input class="form-control" name="product_brand" type="text" placeholder="Enter Product Brand Name" style="background-color: whitesmoke;">
                          @error('product_brand')
                          <small class="text-danger">{{ $message }}</small>
                        @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                           <label for="Product size">Product Available Sizes (Optional)</label>
                           <input class="form-control" name="product_size" type="text" placeholder="L, X, XL, XXl, Small, Medium, Large">
                           @error('product_size')
                           <small class="text-danger">{{ $message }}</small>
                         @enderror
                          </div>
                     </div>
      
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="Product size">Product Available Colours (Optional)</label>
                           <input class="form-control" name="product_colour" type="text" placeholder="White, Green, Pink e.t.c.">
                           @error('product_colour')
                           <small class="text-danger">{{ $message }}</small>
                         @enderror
                          </div>
                     </div>
                      </div>

                   
                <div class="form-group">
                    <label for="Product Image"></label>
                    <input class="form-control" name="product_image" type="file" style="background-color: whitesmoke;">
                    @error('product_image')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                  </div>

                <div class="form-group">
                    <label for="Product Description">Product Description</label>
                   <Textarea class="form-control" rows="3" name="product_description" style="background-color: whitesmoke;">product description....</Textarea>
                   @error('product_description')
                   <small class="text-danger">{{ $message }}</small>
                 @enderror
                  </div>
                <div class="" style="margin-top: 10px; margin-bottom: 15px; display: flex; justify-content: end;">
                 <button class="btn btn-primary btn-medium">Add Product</button>
                </div>
            </div>
          </form>

            <div>
                <h5 class="widget-title line-bottom">Recent Products</h5>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-12" style="overflow: scroll">
                  <table class="table table-striped table-schedule table-responsive">
                    <thead>
                      <tr class="bg-theme-colored">
                        <th>ID</th>
                        <th>Schedule</th>
                        <th>Venue</th>
                        <th>Schedule</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>08:30am-10:00am</td>
                        <td><strong>Vote of Thanks</strong></td>
                        <td>Room1</td>
                        <td>Room1</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
        </div>

    </div>

    <div class="row">
      <div class="col-sm-6 col-md-3" style="margin-right: 15px; margin-left: 15px; margin-bottom: 30px;">

  </div>

      <div class="col-md-8 border-1 mr-2" style="margin-right: 15px; margin-left: 15px; padding-top: 20px; padding-bottom:10px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
        <div>
          <h5 class="widget-title line-bottom">Call Request</h5>
      </div>
          <div class="row">
              <div class="col-sm-6 col-md-12" style="overflow: scroll">
                <table class="table table-striped table-schedule table-responsive">
                  <thead>
                    <tr class="bg-theme-colored">
                      <th>ID</th>
                      <th>Schedule</th>
                      <th>Venue</th>
                      <th>Schedule</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>08:30am-10:00am</td>
                      <td><strong>Vote of Thanks</strong></td>
                      <td>Room1</td>
                      <td>Room1</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
      </div>

  </div>

    </div>
    </section>  
  </div>  --}}
  <!-- end main-content -->  

@endsection
