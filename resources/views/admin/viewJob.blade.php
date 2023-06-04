@extends('layouts.admin.app')

@section('content')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Job</a></li>
                <li class="breadcrumb-item active" aria-current="page">View Job</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">View Jobs</h4>

                        <form action="{{ route('admin-view-jobs', $job) }}" method="post">
                            @csrf
                            @method('put')

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

                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="defaultconfig" class="col-form-label">Job Title</label>
                                </div>
                                <div class="col-lg-8">
                                    <input class="form-control "  name="title" value="{{ $job->title }}"
                                        id="defaultconfig" type="text" placeholder="Enter Job Title" style="background-color: whitesmoke;">
                                    @error('title')
                                        <small class="text-danger">{{ $message }}</small>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="defaultconfig-3" class="col-form-label">Job Type</label>
                                </div>
                                    <div class="col-lg-8">
                                    <select class="form-control" name="type" value="{{ $job->type }}"
                                        id="" style="background-color: whitesmoke;">
                                        @if($job->type == 'normal')
                                        <option value="normal" selected>Normal</option>
                                        @else
                                        <option value="normal" selected>Normal</option>
                                        @endif
                    
                                        @if($job->type == 'intern')
                                        <option value="intern" selected>Internship</option>
                                        @else
                                        <option value="intern">Internship</option>
                                        @endif
                                    </select>
                                    @error('type')
                                    <small class="text-danger">{{ $message }}</small>
                                    @endif
                                </div>
                                    </div>
                             
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <label for="defaultconfig-4" class="col-form-label">Job Description</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <textarea name="description" value="{{ $job->description }}" id="maxlength-textarea" class="form-control"
                                                    id="defaultconfig-4"  rows="5" style="background-color: whitesmoke;">{{ $job->description }}</textarea>
                                                @error('description')
                                                    <small class="text-danger">{{ $message }}</small>
                                                    @endif
                                                    <div class="d-grid mt-3">
                                                        <button class="btn btn-primary btn-sm" type="submit">Save Changes</button>

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
