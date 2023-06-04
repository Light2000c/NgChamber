@extends('layouts.admin.app')

@section('content')

			<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Donation</li>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title mt-3">Donations Table</h6>
                <div class="row mb-4">
                <div class="col-12 d-flex justify-content-end">
                <a href="{{ route('add-leaders') }}" class="btn btn-primary btn small"><i class="fa fa-plus me-2" aria-hidden="true"></i>Add Leaders</a>
                </div>
                </div>
                
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Amount</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>Action</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($donations as $donation)
                      <tr>
                        <th>{{ $donation->id }}</th>
                        <th>{{ $donation->name }}</th>
                        <th>{{ $donation->email }}</th>
                        <th>{{ $donation->amount }}</th>
                        <td>{{ $donation->created_at }}</td>
                        <td>{{ $donation->updated_at }}</td>
                        <td>
                            <form action="{{ route('delete-donations', $donation) }}" method="post">
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
                    {{ $donations->links('pagination::bootstrap-5') }}
                  </div>
                </div>
              </div>
            </div>
					</div>
				</div>

			</div>


    @endsection
