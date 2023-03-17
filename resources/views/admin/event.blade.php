@extends('layouts.admin.app')

@section('content')

			<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Event</li>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Events Table</h6>
                <p class="text-muted mb-3">Manage Events (Add, Edit or Delete).</p>
                <div class="row mb-4">
                <div class="col-12 d-flex justify-content-end">
                <a class="btn btn-primary btn small" href="{{ route('adminAddEvent') }}"><i class="fa fa-plus me-2" aria-hidden="true"></i>Add Event</a>
                </div>
                </div>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>To</th>
                        <th>From</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>Action</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($events as $event)
                      <tr>
                        <td>{{ $event->title }}</td>
                        <td>{{ $event->category }}</td>
                        <td>{{ $event->to }}</td>
                        <td>{{ $event->from }}</td>
                        <td><img src="/event/{{ $event->image }}" alt="" srcset=""></td>
                        <td>{{ $event->description }}</td>
                        <td>{{ $event->created_at }}</td>
                        <td>{{ $event->updated }}</td>
                        <td><a href="{{ route('view-event', $event) }}" class="btn btn-primary btn-sm">view</a></td>
                        <td><button class="btn btn-primary btn-sm">delete</button></td>
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
