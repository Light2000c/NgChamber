@extends('layouts.admin.app')

@section('content')

			<div class="page-content"  ng-app="myApp" ng-controller="myCtrl">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Team Members</li>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Team Members Table</h6>
                <p class="text-muted mb-3">Manage Team Members.</p>
                <div class="col-12 d-flex justify-content-end">
                  <a href="{{ route('adminAddTeam') }}" class="btn btn-primary btn small"><i class="fa fa-plus me-2" aria-hidden="true"></i>Add Team Members</a>
                  </div>

                <div class="table-responsive mt-4">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                      <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->fullname }}</td>
                        <td>{{ $user->email }}</td>
                        @if ($user->is_admin == 1)
                        <td> Admin </td>
                        @else
                        <td>{{ $user->is_admin }}</td>
                        @endif
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->updated_at }}</td>
                        <td>
                            <form action="{{ route('adminMembersDelete', $user) }}" method="post">
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
