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

                                @if(session('success'))
                    @php
                alert()->success('success', session('success'))->persistent('Dismiss');
                @endphp

                @endif


                @if(session('error'))

                    <div class="alert alert-danger alert-dismissible mb-3" role="alert">
              <strong>Error!</strong> {{ session('error') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
           </div>
           @else
           <div class="alert alert-info alert-dismissible mb-4" role="alert">
              <strong>Info!</strong> Please do not make changes to untouchable fields.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
           </div>
           @endif

           <div class="row">
            <div class="col-lg-6 mb-4">
             <div class="d-flex justify-content-center mb-4"><img class="img-fluid" src="/products/{{ $product->product_image }}" alt=""></div>

            </div>
            <div class="col">

            <form action="{{ route('view-product', $product) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
               <div class="form-group mb-3">
                <label for="">Product Name</label>
                <input class="form-control" type="text" name="product_name" value="{{ $product->product_name }}">
                @error('product_name')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

               <div class="form-group mb-3">
                <label for="">Product Category</label>
                <input class="form-control" type="text" name="product_category" value="{{ $product->product_category }}">
                @error('product_category')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

               <div class="form-group mb-3">
                <label for="">Product Image</label>
                <input class="form-control" type="file" name="product_image">
               </div>


               <div class="form-group mb-3">
                <label for="">Product Description</label>
                <textarea class="form-control" name="product_description" id="" cols="30" rows="5">{{ $product->product_description }}</textarea>
                @error('product_description')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="d-grid mt-2">
               <button class="btn btn-primary btn-sm">Save Changes</button>
            </div>
            </form>
           </div>



							</div>
						</div>
					</div>
			   </div>
			</div>
    @endsection
