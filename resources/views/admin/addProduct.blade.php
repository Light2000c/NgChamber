@extends('layouts.admin.app')

@section('content')

			<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="#">Product</a></li>
						<li class="breadcrumb-item active" aria-current="page">Add Product</li>
					</ol>
				</nav>

               <div class="row">
			   <div class="col grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title mb-4">Add Product</h4>

                                <form action="{{ route('adminAddProduct') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @if(session('success'))
                    @php
                alert()->success('success', session('success'))->persistent('Dismiss');
                @endphp

                @endif


                @if(session('error'))

                    <div class="alert alert-danger alert-dismissible" role="alert">
              <strong>Error!</strong> {{ session('error') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
           </div>
           @endif
								<div class="row mb-3">
									<div class="col-lg-3">
										<label for="product_name" class="col-form-label">Product Name</label>
									</div>
									<div class="col-lg-8">
										<input class="form-control"  name="product_name" value="{{ old('product_name') }}" id="defaultconfig" type="text" placeholder="Enter Product Name" style="background-color: whitesmoke;">
									    @error('product_name')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
								</div>
								<div class="row mb-3">
									<div class="col-lg-3">
										<label for="product_category" class="col-form-label">Product Category</label>
									</div>
									<div class="col-lg-8">
										<select name="product_category" value="{{ old('product_category') }}" class="form-control" id="" style="background-color: whitesmoke;">
                                            <option value="" select>Select a Category</option>
											@foreach ($categories as $category)
											<option value="{{ $category->name}}">{{ $category->name }}</option>
											@endforeach
                                        </select>
                                        @error('product_category')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-lg-3">
										<label for="product_name" class="col-form-label">Product Price</label>
									</div>
									<div class="col-lg-8">
										<input class="form-control"  name="product_price" value="{{ old('product_price') }}" id="defaultconfig" type="number" placeholder="Enter Product Price" style="background-color: whitesmoke;">
									    @error('product_price')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
								</div>
								<div class="row mb-3">
									<div class="col-lg-3">
										<label for="product_brand" class="col-form-label">Product Brand (Optional)</label>
									</div>
									<div class="col-lg-8">
										<input class="form-control" maxlength="25" name="product_brand" value="{{ old('product_brand') }}" id="defaultconfig" type="text" placeholder="Enter Product Brand" style="background-color: whitesmoke;">
									    @error('product_brand')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
								</div>
								<div class="row mb-3">
									<div class="col-lg-3">
										<label for="product_size" class="col-form-label">Product Sizes (Optional)</label>
									</div>
									<div class="col-lg-8">
										<input class="form-control"  name="product_size" value="{{ old('product_size') }}" id="defaultconfig" type="text" placeholder="Diff Size e.g (SM, L, XL, XXL, Small, Large e.t.c. )" style="background-color: whitesmoke;">
									    @error('product_size')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
								</div>
								<div class="row mb-3">
									<div class="col-lg-3">
										<label for="product_colour" class="col-form-label">Product Colours (Optional)</label>
									</div>
									<div class="col-lg-8">
										<input class="form-control"  name="product_colour" value="{{ old('product_colour') }}" id="defaultconfig" type="text" placeholder="Colours e.g Blue, Black, Green" style="background-color: whitesmoke;">
									    @error('product_colour')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
								</div>
								<div class="row mb-3">
									<div class="col-lg-3">
										<label for="product_image" class="col-form-label">Product Image</label>
									</div>
									<div class="col-lg-8">
										<input class="form-control" value="{{ old('product_image') }}" maxlength="10" name="product_image" id="defaultconfig-3" type="file" style="background-color: whitesmoke;">
									    @error('product_image')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
								</div>
								<div class="row">
									<div class="col-lg-3">
										<label for="product_description" class="col-form-label">Product Description</label>
									</div>
									<div class="col-lg-8">
										<textarea name="product_description" value="{{ old('product_description') }}" id="maxlength-textarea" class="form-control" id="defaultconfig-4"  rows="4" placeholder="Enter Product Description" style="background-color: whitesmoke;"></textarea>
                                        @error('product_description')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                        <div class="d-grid mt-4">
                                        <button class="btn btn-primary btn-sm">Add Product</button>
                                        </div>
									</div>
								</div>

                                </form>
							</div>
						</div>
					</div>
			   </div>
			</div>
    @endsection


