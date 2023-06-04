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
                            <h2 class="font-28 text-white"
                                style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: bold;">
                                MEMBERSHIP PLANS</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div>
            <ul class="breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Membership Plans</li>
            </ul>
        </div>


        @if (session('info'))
            @php
                alert()
                    ->success('info', session('info'))
                    ->persistent('Dismiss');
            @endphp
        @endif


        <!-- Section: Planyts -->
        <section id="plans" class="plans">
            <div class="container pt-70 pb-40">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="mt-0 line-height-1 text-center text-capitalize mb-10 text-black-333">Membership <span
                                    class="text-theme-color-2">Plans</span></h2>
                        </div>
                    </div>
                </div>



                <div style="margin-bottom: 50px;">
                    <x-plans />
                </div>



            </div>
        </section>
    @endsection
