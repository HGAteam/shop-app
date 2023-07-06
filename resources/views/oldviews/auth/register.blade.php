@extends('layouts.front.base')
@section('page-type', 'login-page')
@section('header')
    <div class="page-header clear-filter" filter-color="orange">
        <div class="page-header-image" style="background-image:url({{ asset('img/login.jpg') }})"></div>
        <div class="content mt-3">
            <div class="container">
                <div class="col-md-6 col-lg-6 ml-auto mr-auto">
                    <div class="card card-login card-plain">
                        <div class="card-header text-center">
                            <div class="logo-container">
                                {{-- <img src="{{ asset('images/altcoin.png') }}" alt=""> --}}
                            </div>
                            <h3>{{ __('Register') }}</h3>
                        </div>
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                {{-- NAME --}}
                                <div class="input-group no-border input-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="now-ui-icons users_circle-08 mr-2"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        placeholder="Name" name="name" value="{{ old('name') }}" required
                                        autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                {{-- LASTNAME --}}
                                <div class="input-group no-border input-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="now-ui-icons users_circle-08 mr-2"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        placeholder="Last Name" name="last_name" value="{{ old('last_name') }}" required
                                        autocomplete="last_name" autofocus>
                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                {{-- EMAIL --}}
                                <div class="input-group no-border input-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="now-ui-icons ui-1_email-85 mr-2"></i>
                                        </span>
                                    </div>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Email" name="email" value="{{ old('email') }}" required
                                        autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                {{-- PASSWORD --}}
                                <div class="input-group no-border input-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="now-ui-icons objects_key-25 mr-2"></i>
                                        </span>
                                    </div>
                                    <input id="password" name="password" type="password" placeholder="*********"
                                        class="form-control @error('password') is-invalid @enderror"
                                        value="{{ old('password') }}" required autocomplete="new-password" />
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                {{-- RETYPE PASSWORD --}}
                                <div class="input-group no-border input-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="now-ui-icons ui-1_lock-circle-open mr-2"></i>
                                        </span>
                                    </div>
                                    <input id="password-confirm" type="password" placeholder="Re-type Password"
                                        class="form-control" name="password_confirmation" required />
                                </div>

                                {{-- Terms & Conditions --}}
                                <style>
                                    .form-check .form-check-sign::after {
                                        color: #ffffff;
                                    }
                                </style>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input @error('terms') is-invalid @enderror" name="terms"
                                            id="terms" type="checkbox" value="1"
                                            {{ old('terms') ? 'checked' : '' }} />
                                        <span class="form-check-sign"></span>
                                        I have read the <a href="{{ route('terms') }}">Terms & Conditions</a> and i agree.
                                        @error('terms')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </label>
                                </div>

                            </div>
                            <div class="card-footer text-center mb-3">
                                <button type="submit"
                                    class="btn btn-primary btn-round btn-lg btn-block">{{ __('Register') }}</button>
                                <div class="text-center">
                                    <h6>
                                        @if (Route::has('login'))
                                            <a href="{{ route('login') }}"
                                                class="link">{{ __('You have an account?') }}</a>
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
