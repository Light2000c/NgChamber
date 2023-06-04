@extends('layouts.admin.app')

@section('content')

			<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Jobs</li>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title mt-3">Jobs Table</h6>
                <div class="row mb-4">
                <div class="col-12 d-flex justify-content-end">
                <a href="{{ route('add-jobs') }}" class="btn btn-primary btn small"><i class="fa fa-plus me-2" aria-hidden="true"></i>Add Jobs</a>
                </div>
                </div>
                
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>Action</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($jobs as $job)
                      <tr>
                        <th>{{ $job->id }}</th>
                        <td class="text-wrap">{{ Str::limit($job->title,40) }}</td>
                        <td class="text-wrap">{{ $job->type }}</td>
                        <td class="text-wrap">{{ Str::limit($job->description,50) }}</td>
                        <td>{{ $job->created_at }}</td>
                        <td>{{ $job->updated_at }}</td>
                        <td><a href="{{ route('admin-view-jobs', $job) }}" class="btn btn-primary btn-sm">view</a></td>
                        <td>
                            <form action="{{ route('delete-jobs', $job) }}" method="post">
                                @csrf
                               @method('delete')
                            <button type="submit" class="btn btn-primary btn-sm">delete</button>
                        </form>
                    </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <div>
                    {{ $jobs->links('pagination::bootstrap-5') }}
                  </div>
                </div>
              </div>
            </div>
					</div>
				</div>

			</div>


    @endsection
