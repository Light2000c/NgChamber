@extends('layouts.admin.app')

@section('content')

			<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="#">Event</a></li>
						<li class="breadcrumb-item active" aria-current="page">{{ $event->title }}</li>
					</ol>
				</nav>

               <div class="row">
			   <div class="col grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Event</h4>

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

           <form action="{{ route('view-event', $event) }}" method="post" enctype="multipart/form-data">

           <div class="row">
            {{-- <div class="col-lg-6 mb-4">
             <div class="d-flex justify-content-center mb-4"><img class="img-fluid" src="/event/{{ $event->image }}" alt=""></div>
             
 
            </div> --}}

            <div class="col-lg-8">
            

            @csrf
                                @method('put')
            <div class="form-group mb-3">
                <label for="">Title</label>
                <input class="form-control" type="text" name="title" value="{{ $event->title }}" style="background-color: whitesmoke;">
                @error('title')
                <small class="text-danger">{{ $message }}</small>
                @enderror
               </div>



               <div class="form-group mb-3">
                <label for="">Category</label>
                <input class="form-control" type="text" name="category" value="{{ $event->category }}" style="background-color: whitesmoke;">
                @error('category')
                <small class="text-danger">{{ $message }}</small>
                @enderror
               </div>

               <div class="form-group mb-3">
                <label for="">Location</label>
                <input class="form-control" type="text" name="location" value="{{ $event->location }}" style="background-color: whitesmoke;">
                @error('location')
                <small class="text-danger">{{ $message }}</small>
                @enderror
               </div>

               <div class="form-group mb-3">
                <label for="host">Host</label>
                <input class="form-control" type="text" name="host" value="{{ $event->host }}" style="background-color: whitesmoke;">
                @error('host')
                <small class="text-danger">{{ $message }}</small>
                @enderror
               </div>

               <div class="row">
               <div class="col form-group mb-3">
                  <label for="">Start Date</label>
                  <input class="form-control" type="datetime-local" name="start_date" value="{{ $event->start_date }}" style="background-color: whitesmoke;">
                  @error('start_date')
                  <small class="text-danger">{{ $message }}</small>
                  @enderror
              </div>
  
                 <div class="col form-group mb-3">
                  <label for="">End Date</label>
                  <input class="form-control" type="datetime-local" name="end_date" value="{{ $event->end_date }}" style="background-color: whitesmoke;">
                  @error('end_date')
                  <small class="text-danger">{{ $message }}</small>
                  @enderror
                 </div>

               </div>


               <div class="form-group mb-3">
                <label for="">Description</label>
                <textarea class="form-control" name="description" id="" cols="30" rows="5" style="background-color: whitesmoke;">{{ $event->description }}</textarea>
                @error('description')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="d-grid mt-2">
               <button class="btn btn-primary btn-sm">Save Changes</button>
            </div>
           
           </div>



							</div>
                        </form>
						</div>
					</div>
			   </div>
			</div>
    @endsection
