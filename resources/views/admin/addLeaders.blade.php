@extends('layouts.admin.app')

@section('content')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Leaders</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Leaders</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Leaders</h4>

                        <form action="{{ route('add-leaders') }}" method="post" enctype="multipart/form-data">
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

                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="defaultconfig" class="col-form-label">Name</label>
                                </div>
                                <div class="col-lg-8">
                                    <input class="form-control "  name="name" value="{{ old('name') }}"
                                        id="defaultconfig" type="text" placeholder="Enter Leader Name" style="background-color: whitesmoke;">
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="defaultconfig" class="col-form-label">Position</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input class="form-control "  name="position" value="{{ old('position') }}"
                                            id="defaultconfig" type="text" placeholder="Enter Leader Position" style="background-color: whitesmoke;">
                                        @error('position')
                                            <small class="text-danger">{{ $message }}</small>
                                            @endif
                                        </div>
                                    </div>
                             
                                    <div class="row mb-3">
                                        <div class="col-lg-3">
                                            <label for="defaultconfig-3" class="col-form-label">Image</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input class="form-control"  name="image" value="{{ old('image') }}"
                                                id="defaultconfig-3" type="file" style="background-color: whitesmoke;">
                                            @error('image')
                                                <small class="text-danger">{{ $message }}</small>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <label for="defaultconfig-4" class="col-form-label">Description</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <textarea name="description" value="{{ old('description') }}" id="maxlength-textarea" class="form-control"
                                                    id="defaultconfig-4"  rows="5" style="background-color: whitesmoke;">About Leader......</textarea>
                                                @error('description')
                                                    <small class="text-danger">{{ $message }}</small>
                                                    @endif
                                                    <div class="d-grid mt-3">
                                                        <button class="btn btn-primary btn-sm" type="submit">Add Leader</button>

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
