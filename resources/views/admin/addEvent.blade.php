@extends('layouts.admin.app')

@section('content')

			<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="#">Event</a></li>
						<li class="breadcrumb-item active" aria-current="page">Add Event</li>
					</ol>
				</nav>

               <div class="row">
			   <div class="col grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Add Event</h4>
								<p class="text-muted mb-3">Read the <a href="https://github.com/mimo84/bootstrap-maxlength" target="_blank"> Official Bootstrap MaxLength Documentation </a>for a full list of instructions and other options.</p>

								<div class="row">

                                <div class="col-lg-6">
                                <form action="{{ route('adminAddEvent') }}" method="post" enctype="multipart/form-data">
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

                                <div class="form-group mb-3">
                                  <label for="title">Title</label>
                                    <input name="title" value="{{ old('title') }}" class="form-control" type="text" >
                                    @error("title")
                                        <small class="text-danger">{{ $message }}</small>
                                        @endif
                                 </div>

                                 <div class="form-group mb-3">
                                  <label for="title">Category</label>
                                   <select class="form-control" name="category" value="{{ old('category') }}" id="">
                                    <option value="" selected>Select a category</option>
                                    <option value="soso">New category</option>
                                   </select>
                                   @error("category")
                                        <small class="text-danger">{{ $message }}</small>
                                        @endif
                                 </div>


                                <div class="row mb-3">
                                 <div class="col-6 form-group">
                                 <label for="from">To</label>
                                    <input name="to" value="{{ old('to') }}" class="form-control" type="datetime-local" >
                                    @error("to")
                                        <small class="text-danger">{{ $message }}</small>
                                        @endif
                                </div>
                                 <div class="col-6 form-group">
                                 <label for="from">From</label>
                                    <input name="from" value="{{ old('from') }}" class="form-control" type="datetime-local" >
                                    @error("from")
                                        <small class="text-danger">{{ $message }}</small>
                                        @endif
                                </div>
                                </div>

                                <div class="form-group mb-3">
                                  <label for="imagee">Image</label>
                                    <input name="image" value="{{ old('image') }}" class="form-control" type="file" >
                                    @error("image")
                                        <small class="text-danger">{{ $message }}</small>
                                        @endif
                                </div>

                                <div class="form-group mb-3">
                                  <label for="description">Description</label>
                                <textarea class="form-control" name="description" value="{{ old('description') }}" id="" cols="30" rows="6">Description here....</textarea>
                                @error("description")
                                        <small class="text-danger">{{ $message }}</small>
                                        @endif
                            </div>

                                    <div class="form-group d-grid mb-3">
                                      <button class="btn btn-primary btn-sm" type="submit">Add Event</button>
                                    </div>
                                    </form>

                                    </div>
                                    <div class="col-6">
                                        <div class="row d-flex justify-content-center">
                                        <div class="col-lg-6 border">
                                            Quick Links
                                            <hr>
                                            <p><a href="">-> Dashboard</a></p>
                                            <p><a href="">-> Events</a></p>
                                            <p><a href="">-> Blog</a></p>
                                            <p><a href="">-> Services</a></p>
                                        </div>
                                        </div>
                                    </div>
                                </div>

							</div>
						</div>
					</div>
			   </div>
			</div>
    @endsection
