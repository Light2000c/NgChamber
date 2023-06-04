@extends('layouts.admin.app')

@section('content')

			<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Users</li>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">User Table</h6>
                <p class="text-muted mb-3">Manage Users (Edit or Delete).</p>

                <div class="table-responsive mt-4">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>city</th>
                        <th>state</th>
                        <th>country</th>
                        <th>address</th>
                        <th>Business Name</th>
                        <th>Business Email</th>
                        <th>Business Phone</th>
                        <th>Business city</th>
                        <th>Business state</th>
                        <th>Business country</th>
                        <th>Business address</th>
                        <th>Business Number</th>
                        <th>Email_verified_at</th>
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
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->city }}</td>
                        <td>{{ $user->state }}</td>
                        <td>{{ $user->country }}</td>
                        <td>{{ $user->address }}</td>
                        <td>{{ $user->business_name }}</td>
                        <td>{{ $user->business_email }}</td>
                        <td>{{ $user->business_phone }}</td>
                        <td>{{ $user->business_city }}</td>
                        <td>{{ $user->business_state }}</td>
                        <td>{{ $user->business_country }}</td>
                        <td>{{ $user->business_address }}</td>
                        <td>{{ $user->business_number }}</td>
                        <td>{{ $user->email_verified_at }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->updated_at }}</td>
                        <td>
                            <form action="{{ route('adminUsersDelete', $user) }}" method="post">
                                @csrf
                               @method('delete')
                            <button class="btn btn-primary btn-sm"><i class="fa fa-trash"></i></button>
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
