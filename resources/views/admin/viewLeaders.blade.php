@extends('layouts.admin.app')

@section('content')

			<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="#">Leaders</a></li>
						<li class="breadcrumb-item active" aria-current="page">{{ $leader->title }}</li>
					</ol>
				</nav>

               <div class="row">
			   <div class="col grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title mb-3">View Leaders</h4>


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
             <div class="d-flex justify-content-center mb-4"><img class="img-fluid" src="/leaders/{{ $leader->image }}" alt=""></div>

            </div>

            <div class="col-lg-6">
            <form action="{{ route('admin-view-leaders', $leader) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
               <div class="form-group mb-3">
                <label for="">Name</label>
                <input class="form-control" type="text" name="name" value="{{ $leader->name }}" style="background-color: whitesmoke;">
                @error('name')
                <small class="text-danger">{{ $message }}</small>
                @enderror
               </div>

                 <div class="form-group mb-3">
                <label for="">Position</label>
                <input class="form-control" type="text" name="position" value="{{ $leader->position }}" style="background-color: whitesmoke;">
                @error('position')
                <small class="text-danger">{{ $message }}</small>
                @enderror
               </div>


               <div class="form-group mb-3">
                <label for="">Image</label>
                <input class="form-control" type="file" name="image" style="background-color: whitesmoke;">
               </div>


               <div class="form-group mb-3">
                <label for="">Description</label>
                <textarea class="form-control" name="description" id="" cols="30" rows="5" style="background-color: whitesmoke;">{{  $leader->description }}</textarea>
                @error('description')
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


