@extends('layouts.admin.app')

@section('content')

			<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Categories</li>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Category Table</h6>
                <div class="row mb-4">
                    <div class="col-12 d-flex justify-content-end">
                    <a href="{{ route('addCategory') }}" class="btn btn-primary btn small"><i class="fa fa-plus me-2" aria-hidden="true"></i>Add Category</a>
                    </div>
                    </div>

                <div class="table-responsive mt-4">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Category Name</th>
                        <th>Model</th>
                        <th>Created_At</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($categories as $category)
                      <tr>
                        <th>{{ $category->id }}</th>
                        <th>{{ $category->name }}</th>
                        <th>{{ $category->model }}</th>
                        <th>{{ $category->created_at }}</th>
                        <form action="{{ route('deleteCategory', $category) }}" method="post">
                          @csrf
                          @method('delete')
                        <td><button class="btn btn-primary btn-sm">delete</button></td>
                      </form>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="mt-5">{{ $categories->links('pagination::bootstrap-5') }}</div>
              </div>
            </div>
					</div>
				</div>

			</div>



    @endsection
