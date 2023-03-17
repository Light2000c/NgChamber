@extends('layouts.admin.app')

@section('content')
<div class="page-content">
<nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Services</li>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Service Table</h6>
                <p class="text-muted mb-3">Services (Add, Edit or Delete).</p>
                <div class="row mb-4">
                <div class="col-12 d-flex justify-content-end">
                <a class="btn btn-primary btn small" href="{{ route('adminAddServices') }}"><i class="fa fa-plus me-2" aria-hidden="true"></i>Add Services</a>
                </div>
                </div>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Action</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td><button class="btn btn-primary btn-sm">view</button></td>
                        <td><button class="btn btn-primary btn-sm">delete</button></td>
                      </tr>
                      <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td><button class="btn btn-primary btn-sm">view</button></td>
                        <td><button class="btn btn-primary btn-sm">delete</button></td>
                      </tr>
                      <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td><button class="btn btn-primary btn-sm">view</button></td>
                        <td><button class="btn btn-primary btn-sm">delete</button></td>
                      </tr>
                      <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2010/10/14</td>
                        <td><button class="btn btn-primary btn-sm">view</button></td>
                        <td><button class="btn btn-primary btn-sm">delete</button></td>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
					</div>
				</div>

			</div>


    @endsection
