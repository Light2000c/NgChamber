@extends('layouts.admin.app')

@section('content')

			<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Ambassadors</li>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title mt-3">Ambassadors Table</h6>
                <div class="row mb-4">
                <div class="col-12 d-flex justify-content-end">
                <a href="{{ route('add-ambassadors') }}" class="btn btn-primary btn small"><i class="fa fa-plus me-2" aria-hidden="true"></i>Add Ambassadors</a>
                </div>
                </div>
                
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Role</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>Action</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($ambassadors as $ambassador)
                      <tr>
                        <th>{{ $ambassador->id }}</th>
                        <td class="text-wrap">{{ Str::limit($ambassador->name,40) }}</td>
                        <td>{{ $ambassador->position }}</td>
                        <td>{{ $ambassador->role }}</td>
                        <td><img class="img-fluid" src="/ambassadors/{{ $ambassador->image }}" width="80px" height="80px" alt="No Image"></td>
                        <td class="text-wrap">{{ Str::limit($ambassador->description,50) }}</td>
                        <td>{{ $ambassador->created_at }}</td>
                        <td>{{ $ambassador->updated_at }}</td>
                        <td><a href="{{ route('admin-view-ambassadors', $ambassador) }}" class="btn btn-primary btn-sm">view</a></td>
                        <td>
                            <form action="{{ route('delete-ambassadors', $ambassador) }}" method="post">
                                @csrf
                               @method('delete')
                            <button type="submit"  class="btn btn-primary btn-sm">delete</button>
                        </form>
                    </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <div>
                    {{ $ambassadors->links('pagination::bootstrap-5') }}
                  </div>
                </div>
              </div>
            </div>
					</div>
				</div>

			</div>


    @endsection
