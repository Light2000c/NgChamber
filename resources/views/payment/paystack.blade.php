
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


<form method="POST" action="{{ route('pay-with-paystack') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
    <div class="row" style="margin-bottom: 40px; margin-top: 60px; display: flex; justify-content: center;">
        <div class="col-md-4 col-md-offset-">
            <p>
                <div>
                    Subscribe to our membership plan
                   
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
            <input type="hidden" name="email" value="{{ Auth::user()->email }}"> {{-- required --}}
            <input type="hidden" name="orderID" value="345">
            <input type="hidden" name="amount" value="{{ $amount }}00"> {{-- required in kobo --}}
            {{-- <input type="hidden" name="quantity" value="3"> --}}
            <input type="hidden" name="currency" value="NGN">
            <input type="hidden" name="metadata" value="{{ json_encode($array = ['plans' => $plan,]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}

            {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

            <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}

            <p>
                <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                    <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                </button>
            </p>
        </div>
    </div>
</form>


@endsection
