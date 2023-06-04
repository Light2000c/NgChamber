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


        <form id="makePaymentForm">
            <div class="row" style="margin-bottom: 40px; margin-top: 60px; display: flex; justify-content: center;">
                <div class="col-md-4 col-md-offset-">
                    <p>
                    <div>
                        Subscribe to our membership plan
                    </div>
                    </p>
                    {{-- <div>
              <div class="" style="display: flex; justify-content: space-between;">
                <p>Plan:</p>
                <p>{{ $plan }}</p>
            </div>
            <div class="" style="display: flex; justify-content: space-between;">
                <p>price:</p>
                <p>${{ $amount }}</p>
            </div>
            </div> --}}

                    <input type="text" name="name" value="Clinton Onitsha" id="name" hidden>
                    <input type="email" name="email" value="clintononitsha20@gmail.com" id="email" hidden>
                    <input type="tel" name="phone_number" value="07055585897" id="phone_number" hidden>
                    <input type="number" name="amount" value="400" id="amount" hidden>






                    <p>
                        <button class="btn btn-success btn-lg btn-block" type="submit">
                            <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                        </button>
                    </p>
                </div>
            </div>
        </form>



        <script>
            $(function() {
                $("#makePaymentForm").submit(function(e) {
                    e.preventDefault();
                    console.log("well");

                    var name = $("#name").val();
                    var email = $("#email").val();
                    var phone_number = $("#phone_number").val();
                    var amount = $("#amount").val();

                    //make our payment
                    makePayment(amount, email, phone_number, name)
                })

            });

            // $("#makePaymentForm").on('submit', function(e){
            //     e.preventDefault();

            //           console.log("well");
            // });

            function makePayment(amount, email, phone_number, name) {
                FlutterwaveCheckout({
                    public_key: "FLWPUBK_TEST-74c0f63b8614735aab394bf7ad01be60-X",
                    tx_ref: "txr-{{ substr(rand(0, time()), 0, 7) }}",
                    amount: amount,
                    currency: "NGN",
                    payment_options: "card, banktransfer, ussd",
                    redirect_url: "https://glaciers.titanic.com/handle-flutterwave-payment",
                    customer: {
                        email: email,
                        phone_number: phone_number,
                        name: name,
                    },
                    callback: function(data) {
                        console.log(data);
                    },
                    onclose: function() {
                        //close modal
                    },
                    customizations: {
                        title: "NiDCC",
                        description: "Purchase Membership Plan",
                        logo: "https://play-lh.googleusercontent.com/qIVVU7H--GiVAPbvasD1kIdmiDaRroK3J5g5uYdd-O8XHlC_MwSro1JhZRe06l18FIc",
                    },
                });
            }
        </script>
    @endsection
