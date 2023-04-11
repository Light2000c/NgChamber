@extends('layouts.admin.app')

@section('content')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">News</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add News</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add News</h4>

                        <form action="{{ route('adminAddnews') }}" method="post" enctype="multipart/form-data">
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
                                    <label for="defaultconfig" class="col-form-label">Title</label>
                                </div>
                                <div class="col-lg-8">
                                    <input class="form-control "  name="title" value="{{ old('title') }}"
                                        id="defaultconfig" type="text" placeholder="Enter Your Title" style="background-color: whitesmoke;">
                                    @error('title')
                                        <small class="text-danger">{{ $message }}</small>
                                        @endif
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="defaultconfig-2" class="col-form-label">Category</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <div>
                                            <select class="form-control" name="category" id=""
                                                value="{{ old('category') }}" style="background-color: whitesmoke;">
                                                <option selected value="">select a category</option>
                                                @foreach ($categories as $category)
                                                <option value="{{ $category->name }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('category')
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
                                                    id="defaultconfig-4"  rows="5" style="background-color: whitesmoke;">Post Body Here......</textarea>
                                                @error('title')
                                                    <small class="text-danger">{{ $message }}</small>
                                                    @endif
                                                    <div class="d-grid mt-3">
                                                        <button class="btn btn-primary btn-sm" type="submit">Create Post</button>

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
