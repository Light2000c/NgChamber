@extends('layouts.admin.app')

@section('content')


			<div class="page-content">

        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
          <div>
            <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
          </div>
          <div class="d-flex align-items-center flex-wrap text-nowrap">
            <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
              <i class="btn-icon-prepend" data-feather="download-cloud"></i>
              Dashboard
            </button>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow-1">
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">Users</h6>
                      <div class="dropdown mb-2">
                        <a type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6 col-md-12 col-xl-5">
                        <h3 class="mb-2">{{ $users->count() }}</h3>
                      </div>
                      <div class="col-6 col-md-12 col-xl-7">
                        {{-- <div id="customersChart" class="mt-md-3 mt-xl-0"></div> --}}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">News</h6>
                      <div class="dropdown mb-2">
                        <a type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6 col-md-12 col-xl-5">
                        <h3 class="mb-2">{{ $news->count() }}</h3>
                      </div>
                      <div class="col-6 col-md-12 col-xl-7">
                        {{-- <div id="ordersChart" class="mt-md-3 mt-xl-0"></div> --}}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">Events</h6>
                      <div class="dropdown mb-2">
                        <a type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6 col-md-12 col-xl-5">
                        <h3 class="mb-2">{{ $events->count() }}</h3>
                      </div>
                      <div class="col-6 col-md-12 col-xl-7">
                        {{-- <div id="growthChart" class="mt-md-3 mt-xl-0"></div> --}}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- row -->


        {{-- <div class="row">
          <div class="col-lg-4">
            <div class="card" style="width: auto; height: 250px;">
              <div class="card-body" style="display: flex; flex-direction: column; justify-content: space-between">
              <div>
                <h4>Profile</h4>
                <small>manage profile</small>
              </div>
              <div style="display: flex; justify-content: space-between">
                <h5>Edit Profile</h5>
                <h5><i class="fa fa-angle-right"></i></h5>
              </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card" style="width: auto; height: 250px;">
              <div class="card-body" style="display: flex; flex-direction: column; justify-content: space-between">
              <div>
                <h4>Team Members</h4>
                <small>manage members</small>
              </div>
              <div style="display: flex; justify-content: space-between">
                <h5>Manage members</h5>
                <h5><i class="fa fa-angle-right"></i></h5>
              </div>
              </div>
            </div>
          </div>

        </div> --}}

        <div class="card mt-5" >
          <div class="card-body">
          <div>
            <h5>Recent News</h5>
          </div>
          <div class="table-responsive">
            <table id="dataTableExample" class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Image</th>
                  <th>Description</th>
                  <th>Created_by</th>
                  <th>Created_at</th>
                  <th>Updated_at</th>
                  <th>Action</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                  {{-- @foreach($news as $new)
                <tr>
                  <th>{{ $new->id }}</th>
                  <td class="text-wrap">{{ Str::limit($new->title,40) }}</td>
                  <td>{{ $new->category }}</td>
                  <td><img class="img-fluid" src="/news/{{ $new->image }}" width="80px" height="80px" alt="No Image"></td>
                  <td class="text-wrap">{{ Str::limit($new->description,50) }}</td>
                  <td>{{ $new->user->fullname }}</td>
                  <td>{{ $new->created_at }}</td>
                  <td>{{ $new->updated_at }}</td>
                  <td><a href="{{ route('view-news', $new) }}" class="btn btn-primary btn-sm">view</a></td>
                  <td>
                      <form action="{{ route('adminNewsDelete', $new) }}" method="post">
                          @csrf
                         @method('delete')
                      <button class="btn btn-primary btn-sm">delete</button>
                  </form>
              </td>
                </tr>
                @endforeach --}}
              </tbody>
            </table>
          </div>
        </div>
        </div>


			</div>

    @endsection
