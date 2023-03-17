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
								<h4 class="card-title">Add Product</h4>
								<p class="text-muted mb-3">Read the <a href="https://github.com/mimo84/bootstrap-maxlength" target="_blank"> Official Bootstrap MaxLength Documentation </a>for a full list of instructions and other options.</p>

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
										<input class="form-control" maxlength="25" name="product_name" value="{{ old('product_name') }}" id="defaultconfig" type="text" placeholder="Enter Prouct Name">
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
										<select name="product_category" value="{{ old('product_category') }}" class="form-control" id="">
                                            <option value="" select>Select a Category</option>
                                            <option value="activate">activate</option>
                                        </select>
                                        @error('product_category')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-lg-3">
										<label for="product_image" class="col-form-label">Product Image</label>
									</div>
									<div class="col-lg-8">
										<input class="form-control" value="{{ old('product_image') }}" maxlength="10" name="product_image" id="defaultconfig-3" type="file">
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
										<textarea name="product_description" value="{{ old('product_description') }}" id="maxlength-textarea" class="form-control" id="defaultconfig-4" maxlength="100" rows="4" placeholder="This textarea has a limit of 100 chars."></textarea>
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


