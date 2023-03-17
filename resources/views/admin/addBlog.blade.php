@extends('layouts.admin.app')

@section('content')
			<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="#">Blog</a></li>
						<li class="breadcrumb-item active" aria-current="page">Add Blog Post</li>
					</ol>
				</nav>

               <div class="row">
			   <div class="col grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Add Post</h4>
								<p class="text-muted mb-3">Read the <a href="https://github.com/mimo84/bootstrap-maxlength" target="_blank"> Official Bootstrap MaxLength Documentation </a>for a full list of instructions and other options.</p>

                                <form action="{{ route('adminAddBlog') }}" method="post" enctype="multipart/form-data">
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
										<label for="defaultconfig" class="col-form-label">Title</label>
									</div>
									<div class="col-lg-8">
										<input class="form-control "  maxlength="25" name="title" value="{{ old('title') }}" id="defaultconfig" type="text" placeholder="Enter Your Title">
                                        @error("title")
                                        <small class="text-danger">{{ $message }}</small>
                                        @endif
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-lg-3">
										<label for="defaultconfig-2" class="col-form-label">Category</label>
									</div>
									<div class="col-lg-8">
                                        <div>
                                        <select class="form-control" name="category" id="" value="{{ old('category') }}">
                                         <option selected value="">select a category</option>
                                         <option value="available">Available</option>
                                        </select>
                                        </div>
                                        @error("category")
                                        <small class="text-danger">{{ $message }}</small>
                                        @endif
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-lg-3">
										<label for="defaultconfig-3" class="col-form-label">Image</label>
									</div>
									<div class="col-lg-8">
										<input class="form-control" maxlength="10" name="image" value="{{ old('image') }}" id="defaultconfig-3" type="file">
                                        @error("image")
                                        <small class="text-danger">{{ $message }}</small>
                                        @endif
									</div>
								</div>
								<div class="row">
									<div class="col-lg-3">
										<label for="defaultconfig-4" class="col-form-label">Description</label>
									</div>
									<div class="col-lg-8">
										<textarea name="description" value="{{ old('description') }}" id="maxlength-textarea" class="form-control" id="defaultconfig-4" maxlength="100" rows="5" placeholder="Description...."></textarea>
                                        @error("title")
                                        <small class="text-danger">{{ $message }}</small>
                                        @endif
                                        <div class="d-grid mt-3">
                                        <button class="btn btn-primary btn-sm" type="submit">Create Post</button>

                                        </div>
                                    </div>
                                    </form>
								</div>
							</div>
						</div>
					</div>
			   </div>
			</div>
    @endsection
