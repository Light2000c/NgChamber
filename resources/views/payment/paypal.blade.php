
@extends('layouts.user.app')

@section('content')
    <!-- Start main-content -->
    <div class="main-content">
      <!-- Section: inner-header -->
      {{-- <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg6.jpg">
        <div class="container pt-70 pb-20">
          <!-- Section Content -->
          <div class="section-content">
            <div class="row">
              <div class="col-md-12 text-center">
                <h2 class="title text-white">Payst</h3>
                <ol class="breadcrumb text-center text-black mt-10">
                  <li><a href="#">Home</a></li>
                  <li class="active text-gray-silver">Plans</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section> --}}


<form method="POST" action="{{ route('paypal') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
    @csrf
    <div class="row" style="margin-bottom: 40px; margin-top: 60px; display: flex; justify-content: center;">
        <div class="col-md-4 col-md-offset-">
            <p>
                <div>
                    Subscribe to  membership plan
                   
                </div>
            </p>
            <div>
                <div class="" style="display: flex; justify-content: space-between;">
                    <p>Plan:</p>
                    <p>{{ $plan }}</p>
                </div>
                <div class="" style="display: flex; justify-content: space-between;">
                    <p>price:</p>
                    <p>${{ $amount }}</p>
                </div>
            </div>
            <input type="hidden" name="amount" value="{{ $amount }}">
            <input type="hidden" name="plan" value="{{ $plan }}">
            {{-- <input type="hidden" name="email" value="{{ Auth::user()->email }}">
            <input type="hidden" name="orderID" value="345">
            <input type="hidden" name="amount" value="20000">
            <input type="hidden" name="currency" value="NGN">
            <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > 
            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> 

            {{ csrf_field() }} 

            <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}

            <p>
                <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                    <i class="fa fa-plus-circle fa-lg"></i> Pay With Paypal!
                </button>
            </p>
        </div>
    </div>
</form>


@endsection
