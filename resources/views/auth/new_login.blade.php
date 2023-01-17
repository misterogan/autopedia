@extends('layouts.app_login')

@section('content')
<section class="section-login">
    <img class="img-fluid icon-tone-1" src="{{ asset('assets/images/png/ic-right-top.png') }}" alt="icon">
    <img class="img-fluid icon-tone-2" src="{{ asset('assets/images/png/ic-left-bottom.png') }}" alt="icon">
    <div class="container">
        <div class="box-form">
            <div class="col-12 text-center mt-2 mb-4">
                <img id="imageLogo" src="{{ asset('assets/images/svg/logo.svg') }}" class="img-fluid logo" alt="logo">
            </div>
            <div class="col-12 text-center mb-4">
                <h6 class="font-weight-bold">
                    Hi please sign-in to access the dashboard <i class="far fa-hand-spock"></i>
                </h6>
            </div>
            <form class="row contact" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="col-12 item-box">
                    <label for="validationName" class="form-label">
                        {{ __('Email Address') }}
                        <span>*</span>
                    </label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-12 item-box">
                    <label for="validationName" class="form-label">
                        {{ __('Password') }}
                        <span>*</span>
                    </label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-12 item-box">
                    {{-- <label for="email" class="col-md-4 col-form-label text-md-end"></label> --}}
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-6"> {!! htmlFormSnippet() !!} </div>
                        </div>
                        @error('g-recaptcha-response')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-12 item-box">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        @if (\Session::has('error'))

                        <div class="alert alert-danger">
                            {!! \Session::get('error') !!}
                        </div>
                        @endif
                    </div>
                </div>

                <div class="col-12 item-box mt-2">
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn bg-blue-autopedia btn-block text-white font-weight-bold">
                            {{ __('Login') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
</section>


{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hi please sign-in to access the dashboard <i class="far fa-hand-spock"></i>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
@csrf

<div class="row mb-3">
    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
            value="{{ old('email') }}" autocomplete="email" autofocus>

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

    <div class="col-md-6">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
            name="password" required autocomplete="current-password">

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>


</div>

<div class="row mb-3">
    <label for="email" class="col-md-4 col-form-label text-md-end"></label>

    <div class="col-md-6">
        <div class="form-group row">
            <div class="col-md-6"> {!! htmlFormSnippet() !!} </div>
        </div>
        @error('g-recaptcha-response')
        <span class="text-danger" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-6 offset-md-4">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>
        @if (\Session::has('error'))

        <div class="alert alert-danger">
            {!! \Session::get('error') !!}
        </div>
        @endif
    </div>
</div>

<div class="row mb-0">
    <div class="col-md-8 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Login') }}
        </button>
    </div>
</div>
</form>
</div>
</div>
</div>
</div>
</div> --}}
@endsection