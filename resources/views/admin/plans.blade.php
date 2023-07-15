@extends('layouts.admin.app')

@section('content')

			<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Plans</li>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title mt-3">Plans Table</h6>
                
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Type</th>
                        <th>Amount</th>
                        <th>Created_at</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($plans as $plan)
                      <tr>
                        <th>{{ $plan->id }}</th>
                        <th>{{ $plan->user->fullname }}</th>
                        <th>{{ $plan->type }}</th>
                        <th>${{ $plan->amount }}</th>
                        <td>{{ $plan->created_at }}</td>
                        <td>
                            <form action="{{ route('delete-plans', $plan) }}" method="post">
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
                    {{ $plans->links('pagination::bootstrap-5') }}
                  </div>
                </div>
              </div>
            </div>
					</div>
				</div>

			</div>


    @endsection
