@extends('layouts.admin.app')

@section('content')

			<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Product</li>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Products Table</h6>
                <p class="text-muted mb-3">Manage Products (Add, Edit or Delete).</p>
                <div class="row mb-4">
                <div class="col-12 d-flex justify-content-end">
                <a href="{{ route('adminAddProduct') }}" class="btn btn-primary btn small"><i class="fa fa-plus me-2" aria-hidden="true"></i>Add Product</a>
                </div>
                </div>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Product Category</th>
                        <th>Product Price</th>
                        <th>Product Brand</th>
                        <th>Product Size</th>
                        <th>Product Colour</th>
                        <th>Product Image</th>
                        <th>Product Description</th>
                        <th>Created_by</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>Action</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                      <tr>
                        <td>{{ $product->id }}</td>
                        <td class="text-wrap">{{ Str::limit($product->product_name) }}</td>
                        <td>{{ $product->product_category }}</td>
                        <td>₦{{ $product->product_price }}</td>
                        <td><img src="/products/{{ $product->product_image }}" alt=""></td>
                        @if($product->brand)
                        <td>{{ $product->product_brand }}</td>
                        @else
                         <td>Null</td>
                        @endif
                        @if($product->product_size)
                        <td>{{ $product->product_size }}</td>
                        @else
                         <td>Null</td>
                        @endif
                        @if($product->product_colour)
                        <td>{{ $product->product_colour }}</td>
                        @else
                         <td>Null</td>
                        @endif
                        <td class="text-wrap">{{ Str::limit($product->product_description) }}</td>
                        <td>{{ $product->user->fullname }}</td>
                        <td>{{ $product->created_at }}</td>
                        <td>{{ $product->updated_at }}</td>
                        <td><a href="{{ route('view-product', $product) }}" class="btn btn-primary btn-sm">view</a></td>
                        <td>
                            <form action="{{ route('adminProductDelete', $product) }}" method="post">
                                @csrf
                               @method('delete')
                            <button class="btn btn-primary btn-sm">delete</button>
                        </form>
                    </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
					</div>
				</div>

			</div>


    @endsection
