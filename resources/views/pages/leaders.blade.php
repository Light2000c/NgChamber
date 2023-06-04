@extends('layouts.user.app')


@section('content')
<!-- Start main-content -->
<div class="main-content">
  <!-- Section: inner-header -->
  <section class="inner-header divider parallax layer-overlay overlay-dark-2" data-bg-img="/logos/simple3.jpeg">
    <div class="container pt-60 pb-60">
      <!-- Section Content -->
      <div class="section-content">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="font-28 text-white" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: bold;">LEADERS</h2>
          </div>
        </div>
      </div>
    </div>      
  </section>
  <div>
  <ul class="breadcrumb">
    <li><a href="{{ route('home') }}">Home</a></li>
    <li>Leaders</li>
  </ul>
</div>    
    
    
    
<x-leaders  :leaders="$leaders" />

    </div>
      @endsection