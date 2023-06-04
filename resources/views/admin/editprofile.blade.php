@extends('layouts.admin.app')

@section('content')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
            </ol>
        </nav>

        @if(session('success'))
        @php
    alert()->success('success', session('success'))->persistent('Dismiss');
    @endphp

    @endif


    @if(session('error'))
    @php
alert()->success('error', session('error'))->persistent('Dismiss');
@endphp

@endif


        <div class="card mt-5">
            <div class="card-body">
                <div class="mb-5">
                    <h5>Edit Profile</h5>
                </div>
                <form action="{{ route('admin-editprofile') }}" method="post">
                    @csrf
                    @method('put')
                    <div>
                        <div class="row">
                            <div class="col form-group">
                                <label for="fullname">Fullname</label>
                                <input type="text" value="{{ Auth::user()->fullname }}" class="form-control" name="fullname">
                                @error('fullname')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class=" col form-group">
                                <label for="email">Email</label>
                                <input type="email" value="{{ Auth::user()->email }}" class="form-control" name="email">
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-large btn-primary">Save Changes</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>


        <div class="card mt-5">
            <div class="card-body">
                <div class="mb-5">
                    <h5> Change Password</h5>
                </div>
                <form action="{{ route('admin-editprofile') }}" method="post">
                    @csrf
                    @method('put')

                    @if(session('check'))
<div class="alert alert-danger alert-dismissible mb-2" role="alert">
    <strong>Password Check!</strong> {{ session('check') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
 </div>

@endif

                    <div>
                        <div class="row">
                            <div class="col form-group">
                                <label for="current_password">Current Password</label>
                                <input type="password" class="form-control" name="current_password">
                                @error('current_password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            </div>

                            <div class="col form-group">
                                <label for="new_password">New Password</label>
                                <input type="password" class="form-control" name="password">
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col form-group">
                                <label for="password_confirmation">Confirm New Password</label>
                                <input type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-large btn-primary">Change Password</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>


    </div>
@endsection
