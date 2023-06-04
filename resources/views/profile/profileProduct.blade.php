@extends('layouts.user.app')

@section('content')
    <!-- Start main-content -->
    <div class="main-content" ng-app="profileApp" ng-controller="profileCtrl">
        <!-- Section: inner-header -->
        <section class="inner-header divider parallax layer-overlay overlay-dark-2" data-bg-img="logos/simple3.jpeg">
            <div class="container pt-60 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="title text-white">Profile</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>

            <div class="container mt-30 mb-30 pt-30 pb-30">
                <div class="row">
                    <div class="col-md-3 p-15">
                        <div class="pb-15">
                            <h4>Welcome Clinton!</h4>
                            <p>Welcome to your profile page</p>
                            <p>Manage your products, subscriptions, wishlist.</p>
                        </div>

                        <ul class="nav nav-pills nav-stacked">
                            <li ><a href="{{ route('profile') }}">Overview</a></li>
                            <li ><a  href="{{ route('edit-profile') }}">My Profile</a></li>
                            <li ><a  href="{{ route('edit-address') }}">Address</a></li>
                            <li class="active"><a  href="{{ route('manage-product') }}">Products</a></li>
                            <li ><a  href="{{ route('call-request') }}">Call Request</a></li>
                            <li><a  href="{{ route('wishlist') }}">Wishlist</a></li>
                        </ul>
                    </div>

                    <div class="col-md-9">
                        <div class="tab-contents">
                            <div id="overview" class="" style="margin-bottom: 25px;">
                                <h3>Products</h3>
                            </div>


                            <div class="row">
                                <div class="col-md-10">
                                    <div class="profile-box2 "style="margin-bottom: 25px; width: auto; height: auto; ">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col">Product Name</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Discount</th>
                                                        <th scope="col">Category</th>
                                                        <th scope="col">Brand</th>
                                                        <th scope="col">Colour</th>
                                                        <th scope="col">Size</th>
                                                        <th scope="col">Image</th>
                                                        <th scope="col">Description</th>
                                                        <th scope="col">Reviewed</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if($products->count())
                                                    @foreach ($products as $product)
                                                    <tr>
                                                        <td>{{ Str::words($product->product_name, 7) }}</td>
                                                        <td>{{ $product->product_price }}</td>
                                                        <td>{{ $product->product_dicount }}</td>
                                                        <td>{{ $product->product_category }}</td>
                                                        <td>{{ $product->product_brand }}</td>
                                                        <td>{{ $product->product_colour }}</td>
                                                        <td>{{ $product->product_size }}</td>
                                                        <td><img src="/products/{{ $product->product_image }}" alt="" srcset=""></td>
                                                        <td>{{ Str::words($product->product_description,7) }}</td>
                                                        <td>{{ $product->reviewed_at }}</td>
                                                        <td><button><i class="fa fa-pencil"></i></button></td>
                                                        <td><button><i class="fa fa-trash-o"></i></button></td>
                                                    </tr> 
                                                    @endforeach
                                                    @else
                                                    <div>

                                                        <div class="alert alert-info">
                                                            <strong>Info!</strong> No Products to show.
                                                        </div>
                                                    </div>
                                                    @endif
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-10">
                                    <div class="profile-box2 " style="margin-bottom: 25px; width: auto;">
                                        
                                        <form action="{{ route('manage-product') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                        <div class="">
                                            <div class="" style="display: flex; justify-content: space-between;">
                                                <h4>Product</h4>
                                                <button submit class="btn btn-sm">Save Product</button>
                                            </div>
                                            <div class="">

                                                

                                                <div class="form-group">
                                                    <label for="product_name">Name</label>
                                                    <input class="form-control" name="product_name" value="{{ old('product_name') }}" type="text"
                                                        value="" placeholder="Product Name">
                                                        @error('product_name')
                                                        <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 form-group">
                                                        <label for="product_price">Price</label>
                                                        <input class="form-control" name="product_price" value="{{ old('product_price') }}" type="number"
                                                            placeholder="Product Price">
                                                            @error('product_price')
                                                            <small class="text-danger">{{ $message }}</small>
                                                            @enderror
                                                    </div>

                                                    <div class="col-md-6 form-group">
                                                        <label for="product_discount">Product Discount</label>
                                                        <input class="form-control" name="product_discount" value="{{ old('product_discount') }}" type="number"
                                                            placeholder="Percentage Off">
                                                            @error('product_discount')
                                                            <small class="text-danger">{{ $message }}</small>
                                                            @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="product_category">Category</label>
                                                    <select class="form-control" name="product_category" value="{{ old('product_category') }}" id="">
                                                        <option value="">Select a Category</option>
                                                        @if($categories)
                                                        @foreach ($categories as $category)
                                                        <option value="{{ $category->name }}">{{ $category->name }}</option>
                                                        @endforeach
                                                        @endif
                                                    </select>
                                                    @error('product_category')
                                                    <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-4 form-group">
                                                        <label for="product_brand">Brand</label>
                                                        <input class="form-control" name="product_brand" value="{{ old('product_brand') }}" type="text"
                                                            placeholder="Product Brand">
                                                            @error('product_brand')
                                                            <small class="text-danger">{{ $message }}</small>
                                                            @enderror
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                        <label for="product_colour">Colour</label>
                                                        <input class="form-control" name="product_colour" value="{{ old('product_colour') }}" type="text"
                                                            placeholder="Colour (seperate with , if multiple)">
                                                            @error('product_colour')
                                                            <small class="text-danger">{{ $message }}</small>
                                                            @enderror
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                        <label for="product_size">Size</label>
                                                        <input class="form-control" name="product_size" value="{{ old('product_size') }}" type="text"
                                                            placeholder="Size (seperate with , if multiple)">
                                                            @error('product_colour')
                                                            <small class="text-danger">{{ $message }}</small>
                                                            @enderror
                                                    </div>
                                                </div>

                                                <div class=" form-group">
                                                    <label for="product_image">Image</label>
                                                    <input class="form-control" name="product_image" value="{{ old('product_image') }}" type="file"
                                                        value="">
                                                        @error('product_image')
                                                        <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                </div>

                                                <div class=" form-group">
                                                    <label for="product_description">Description</label>
                                                    <textarea class="form-control" name="product_description" value="{{ old('product_description') }}" id="" rows="4">Description Here....</textarea>
                                                    @error('product_description')
                                                    <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>


                                            </div>
                                        </div>
                                    </form>

                                    </div>
                                </div>
                            </div>




                        </div>

                    </div>
                </div>
        </section>
    @endsection
