@extends('layouts.admin.app')

@section('content')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Event</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Event</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-5">Add Event</h4>

                        <div class="row mt-2">

                            <div class="col-lg-9">
                                <form action="{{ route('adminAddEvent') }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    @if (session('success'))
                                        @php
                                            alert()
                                                ->success('success', session('success'))
                                                ->persistent('Dismiss');
                                        @endphp

                                    @endif


                                    @if (session('error'))

                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                            <strong>Error!</strong> {{ session('error') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif

                                    <div class="form-group mb-3">
                                        <label for="title">Title</label>
                                        <input name="title" value="{{ old('title') }}" class="form-control"
                                            type="text" placeholder="Event Title" style="background-color: whitesmoke;">
                                        @error('title')
                                            <small class="text-danger">{{ $message }}</small>
                                            @endif
                                        </div>


                                        <div class="form-group mb-3">
                                            <label for="category">Category</label>
                                            <select class="form-control" name="category" value="{{ old('category') }}"
                                                id="" style="background-color: whitesmoke;">
                                                <option value="" selected>Select a category</option>
                                                @foreach ($categories as $category)
                                                <option value="{{ $category->name }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('category')
                                                <small class="text-danger">{{ $message }}</small>
                                                @endif
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="location">Location (Optional)</label>
                                                <input name="location" value="{{ old('loaction') }}" class="form-control"
                                                    type="text" placeholder="Enter Event Location"
                                                    style="background-color: whitesmoke;">
                                                @error('location')
                                                    <small class="text-danger">{{ $message }}</small>
                                                    @endif
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="host">Host (Optional)</label>
                                                    <input name="host" value="{{ old('host') }}" class="form-control"
                                                        type="text" placeholder="Event Host" style="background-color: whitesmoke;">
                                                    @error('host')
                                                        <small class="text-danger">{{ $message }}</small>
                                                        @endif
                                                    </div>



                                                    <div class="row">
                                                        <div class="col form-group mb-3">
                                                            <label for="date">Start Date</label>
                                                            <input name="start_date" value="{{ old('start_date') }}" class="form-control"
                                                                type="datetime-local" style="background-color: whitesmoke;">
                                                            @error('start_date')
                                                                <small class="text-danger">{{ $message }}</small>
                                                                @endif
                                                            </div>

                                                            <div class="col form-group mb-3">
                                                                <label for="date">End Date (Optional)</label>
                                                                <input name="end_date" value="{{ old('end_date') }}" class="form-control"
                                                                    type="datetime-local" style="background-color: whitesmoke;">
                                                                @error('end_date')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                    @endif
                                                                </div>
                                                            </div>



                                                                <div class="form-group mb-3">
                                                                    <label for="description">Description</label>
                                                                    <textarea class="form-control" name="description" value="{{ old('description') }}" id="" cols="30"
                                                                        rows="6" style="background-color: whitesmoke;">Description here....</textarea>
                                                                    @error('description')
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                        @endif
                                                                    </div>

                                                                    <div class="form-group d-grid mb-3">
                                                                        <button class="btn btn-primary btn-sm" type="submit">Add Event</button>
                                                                    </div>
                                                                </form>

                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endsection
