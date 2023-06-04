@extends('layouts.user.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="display: flex; justify-content: center; margin-top: 30px; margin-bottom: 30px;">
        <div class="col-md-5">
            <div class="card" style=" box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); padding-top: 15px;">
                <div class="card-header" col style="color: #4D7902; margin-bottom: 20px; font-weight: bold;">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
