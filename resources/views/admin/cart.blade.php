@extends('layouts.admin.app')

@section('content')

			<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Carts</li>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Cart Table</h6>

                <div class="table-responsive mt-4">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>User Name</th>
                        <th>Product Name</th>
                        <th>Product Image</th>
                        <th>Product Price</th>
                        <th>Quantity</th>
                        <th>Created_At</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($carts as $cart)
                      <tr>
                        <th>{{ $cart->id }}</th>
                        <th>{{ $cart->user->fullname }}</th>
                        <th>{{ $cart->product->product_name }}</th>
                        <th><img class="img-fluid" src="/products/{{ $cart->product->product_image }}" width="65px" height="65px" alt="" srcset=""></th>
                        <th>{{ $cart->product->product_price }}</th>
                        <th>{{ $cart->quantity }}</th>
                        <th>{{ $cart->created_at }}</th>
                        <form action="{{ route('adminCartDelete', $cart) }}" method="post">
                          @csrf
                          @method('delete')
                        <td><button class="btn btn-primary btn-sm">delete</button></td>
                      </form>
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
