@extends('layouts.admin.app')

@section('content')

			<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Blog Post</li>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title mt-3">Blog Table</h6>
                <div class="row mb-4">
                <div class="col-12 d-flex justify-content-end">
                <a href="{{ route('adminAddBlog') }}" class="btn btn-primary btn small"><i class="fa fa-plus me-2" aria-hidden="true"></i>Add Blog Post</a>
                </div>
                </div>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Created_by</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>Action</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($blogs as $blog)
                      <tr>
                        <th>{{ $blog->id }}</th>
                        <td class="text-wrap">{{ Str::limit($blog->title,40) }}</td>
                        <td>{{ $blog->category }}</td>
                        <td><img class="img-fluid" src="/blog/{{ $blog->image }}" width="80px" height="80px" alt="No Image"></td>
                        <td class="text-wrap">{{ Str::limit($blog->description,50) }}</td>
                        <td>{{ $blog->user->fullname }}</td>
                        <td>{{ $blog->created_at }}</td>
                        <td>{{ $blog->updated_at }}</td>
                        <td><a href="{{ route('view-blog', $blog) }}" class="btn btn-primary btn-sm">view</a></td>
                        <td>
                            <form action="{{ route('adminBlogDelete', $blog) }}" method="post">
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
