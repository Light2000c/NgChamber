@extends('layouts.user.app')

@section('content')
    <!-- Start main-content -->
    <div class="main-content">

        <section>

            <div class="container mt-30 mb-30 pt-30 pb-30">

                <div class="row" style="display: flex; justify-content: center; margin-top: 30px; margin-bottom: 30px;">
                    <div class=" col-md-6">

                        <div style="margin-bottom: 20px;">
                            <div
                                style="text-align: center; background-color: #7C9C47; padding-top: 8px; padding-bottom: 3px;">
                                <p
                                    style="color: whitesmoke; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-weight: bold;">
                                    <i class="fa fa-credit-card"></i> Credit Card
                                </p>
                            </div>
                            @if (session('error'))
                                <div class="alert alert-danger alert-dismissible show" role="alert"
                                    style="margin-top: 5px; margin-bottom: 5px;">
                                    <strong>Error! </strong> {{ session('error') }}.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <div style="margin-top: 10px;">
                                <li
                                    style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 18px;">
                                    <b>Complete your donation by making payment</b></li>
                                <li
                                    style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 18px;">
                                    <b>Amount: </b> ${{ $amount }}</li>
                            </div>
                            <hr>
                        </div>
                        <form action="/donation-checkout" method="post">
                            {{-- @csrf --}}
                            {{-- <input type="hidden" name="token"> --}}
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="amount" value="{{ $amount }}00">
                            <div class="form-group">
                                <label for="username">Full name (on the card)</label>
                                <input type="text" class="form-control" name="fullName" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <label for="cardNumber">Card number</label>
                                <input type="text" class="form-control" name="cardNumber" placeholder="Card Number">
                                <div class="">
                                    <span class="input-group-text text-muted">
                                        <i class="fa fa-cc-visa fa-lg pr-1"></i>
                                        <i class="fa fa-cc-amex fa-lg pr-1"></i>
                                        <i class="fa fa-cc-mastercard fa-lg"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <label><span class="hidden-xs">Expiration</span> </label>
                                        <div class="input-group" style="display:flex;">
                                            <select class="form-control" name="month">
                                                <option value="">MM</option>
                                                @foreach (range(1, 12) as $month)
                                                    <option value="{{ $month }}">{{ $month }}</option>
                                                @endforeach
                                            </select>
                                            <select class="form-control" name="year">
                                                <option value="">YYYY</option>
                                                @foreach (range(date('Y'), date('Y') + 10) as $year)
                                                    <option value="{{ $year }}">{{ $year }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label data-toggle="tooltip" title=""
                                            data-original-title="3 digits code on back side of the card">CVV <i
                                                class="fa fa-question-circle"></i></label>
                                        <input type="number" class="form-control" placeholder="CVV" name="cvv">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-expand btn-large" id="donation-btn"
                                    style="background-color: #7C9C47; color: whitesmoke; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-weight: bold;"
                                    type="submit" disabled>
                                    CONFIRM</button>
                            </div>

                            <script type="text/javascript">
                                var submitButton = document.getElementById('donation-btn');

                                window.onload = function() {
                                    submitButton.disabled = false;
                                }

                                document.getElementById('confirm-btn').onclick = function() {

                                    setTimeout(function() {
                                        submitButton.disabled = true;
                                    }, 1000);
                                }
                            </script>

                        </form>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection
