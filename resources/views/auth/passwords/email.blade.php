@extends('layouts.user.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="display: flex; justify-content: center; margin-top: 30px; margin-bottom: 30px;">
        <div class="col-md-6">
            <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); padding: 15px;">
                <div class="card-header" style="text-align: start;  margin-bottom: 20px; font-weight: bold;"><h4 style="color: #4D7902;">{{ __('Reset Password') }}</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                            <div class="form-group" style="text-align: start;">
                                <label for="email" class="text-start">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>

                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
