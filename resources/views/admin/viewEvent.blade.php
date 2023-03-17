@extends('layouts.admin.app')

@section('content')

			<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="#">Event</a></li>
						<li class="breadcrumb-item active" aria-current="page">Event title</li>
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
             <div class="d-flex justify-content-center mb-4"><img class="img-fluid" src="/event/{{ $event->image }}" alt=""></div>

            </div>

            <div class="col">
            <form action="{{ route('view-event', $event) }}" method="post" enctype="multipart/form-data">

            @csrf
                                @method('put')
            <div class="form-group mb-3">
                <label for="">Title</label>
                <input class="form-control" type="text" name="title" value="{{ $event->title }}">
                @error('title')
                <small class="text-danger">{{ $message }}</small>
                @enderror
               </div>

               <div class="form-group mb-3">
                <label for="">Category</label>
                <input class="form-control" type="text" name="category" value="{{ $event->category }}">
                @error('category')
                <small class="text-danger">{{ $message }}</small>
                @enderror
               </div>

               <div class="form-group mb-3">
                <label for="">To</label>
                <input class="form-control" type="datetime-local" name="to" value="{{ $event->to }}">
                @error('to')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

               <div class="form-group mb-3">
                <label for="">From</label>
                <input class="form-control" type="datetime-local" name="from" value="{{ $event->from }}">
                @error('from')
                <small class="text-danger">{{ $message }}</small>
                @enderror
               </div>

               <div class="form-group mb-3">
                <label for="">From</label>
                <input class="form-control" type="file" name="image">
               </div>

               <div class="form-group mb-3">
                <label for="">Description</label>
                <textarea class="form-control" name="description" id="" cols="30" rows="5">{{ $event->description }}</textarea>
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
