@extends('layouts.front.base')
@section('page-type', 'login-page')
@section('header')
    <div class="page-header clear-filter" filter-color="orange">
        <div class="page-header-image" style="background-image:url({{ asset('img/login.jpg') }})"></div>
        <div class="content">
            <div class="container">
                <div class="col-md-6 col-lg-6 ml-auto mr-auto">
                    <div class="card card-login card-plain">
                        <div class="card-header text-center">
                            <div class="logo-container">
                                {{-- <img src="{{ asset('images/altcoin.png') }}" alt=""> --}}
                            </div>
                            <h3>{{ __('Login') }}</h3>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="card-body">
                                <div class="input-group no-border input-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="now-ui-icons users_circle-08"></i>
                                        </span>
                                    </div>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        placeholder="somename@domain.com" name="email" value="{{ old('email') }}"
                                        required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-group no-border input-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="now-ui-icons objects_key-25"></i>
                                        </span>
                                    </div>
                                    <input type="password" placeholder="*********"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" />
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <style>
                                    .form-check .form-check-sign::after {
                                        color: #ffffff;
                                    }
                                </style>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" name="remember" id="remember" type="checkbox"
                                            {{ old('remember') ? 'checked' : '' }} />
                                        <span class="form-check-sign"></span>
                                        {{ __('Remember me') }}
                                    </label>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <button type="submit"
                                    class="btn btn-primary btn-round btn-lg btn-block">{{ __('Login') }}</button>
                                <div class="text-center">
                                    <h6>
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="link">{{ __('New here?') }}</a>
                                        @endif
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}"
                                                class="link">{{ __('Forgot Your Password?') }}</a>
                                        @endif
                                    </h6>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.include._footer')
    </div>
@endsection
