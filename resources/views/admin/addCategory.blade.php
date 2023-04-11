@extends('layouts.admin.app')

@section('content')
    <div class="page-content" ng-app="myApp" ng-controller="categoryCtrl">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Category</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Category</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-5">Add Category</h4>

                        <div class="row mt-2 d-lg-flex justify-content-lg-between">

                            <div class="col-lg-6 mb-5">
                                <form action="{{ route('addCategory') }}" method="post" enctype="multipart/form-data">
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
                                        <label for="category">Add To</label>
                                        <select class="form-control" name="model" value="{{ old('model') }}"
                                          ng-model="models" ng-change="getCategory(models)"  id="" style="background-color: whitesmoke;">
                                            <option value="" selected>Select a Model</option>
                                            <option value="product">Product</option>
                                            <option value="blog">Blog</option>
                                            <option value="event">Event</option>
                                            <option value="news">News</option>
                                        </select>
                                        @error('category')
                                            <small class="text-danger">{{ $message }}</small>
                                            @endif
                                        </div>

                                    <div class="form-group mb-3">
                                        <label for="name">Category Name</label>
                                        <input name="name" value="{{ old('name') }}" class="form-control"
                                            type="text" placeholder="Category Name" style="background-color: whitesmoke;">
                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                            @endif
                                        </div>




                                            <div class="form-group d-grid mb-3">
                                                <button class="btn btn-primary btn-sm" type="submit">Add To Category</button>
                                            </div>
                                        </form>

                                    </div>

                                    <div class="col-lg-4 ">
                                        <div class="card shadow">
                                        <div class="card-header">
                                         <h5 class="text-capitalize">Model: @{{ models }}</h5>
                                        </div>
                                        <div  class="pt-3" style="background-color: whitesmoke; min-height: 400px; max-height: 400px; overflow: scroll;">
                                          <ul>
                                            <li ng-repeat="category in categories">@{{ category.name }}</li>
                                          </ul>
                                        </div>
                                    </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
