@extends('layouts.admin.app')

@section('content')

			<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="#">Team Members</a></li>
						<li class="breadcrumb-item active" aria-current="page">Add Team Members</li>
					</ol>
				</nav>

               <div class="row">
			   <div class="col grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Team Members</h4>
								<p class="text-muted mb-3">Add Team Members</p>


								@if (session('success'))
								@php
									alert()
										->success('success', session('success'))
										->persistent('Dismiss');
								@endphp

							@endif

							@if (session('error'))
							@php
								alert()
									->success('error', session('error'))
									->persistent('Dismiss');
							@endphp

						@endif

								<form action="{{ route('adminAddTeam') }}" method="post">

									@csrf
									
								<div class="row mb-3">
									<div class="col-lg-3">
										<label for="defaultconfig" class="col-form-label">Full Name</label>
									</div>
									<div class="col-lg-8">
										<input class="form-control" maxlength="25" name="fullname" id="defaultconfig" type="text" placeholder="fullname">
										@error('fullname')
											<small class="text-danger">{{ $message }}</small>
										@enderror
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-lg-3">
										<label for="defaultconfig-2" class="col-form-label">Email</label>
									</div>
									<div class="col-lg-8">
										<input class="form-control"  name="email" id="" type="text" placeholder="example@gmail.com">
										@error('email')
										<small class="text-danger">{{ $message }}</small>
									@enderror
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-lg-3">
										<label for="defaultconfig-2" class="col-form-label">Password</label>
									</div>
									<div class="col-lg-8">
										<input class="form-control"  name="password" id="" type="password" placeholder="Create a Password">
										@error('password')
										<small class="text-danger">{{ $message }}</small>
									@enderror
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-lg-3">
										<label for="defaultconfig-2" class="col-form-label">Confirm Password</label>
									</div>
									<div class="col-lg-8">
										<input class="form-control"  name="password_confirmation" id="" type="password" placeholder="Confirm Password">
										<div class="d-grid mt-3">
											<button class="btn btn-primary btn-sm" type="submit">Add Member</button>
										</div>
									</div>
									</div>
								</form>
								</div>
							</div>
						</div>
					</div>
			   </div>
			</div>
    @endsection


