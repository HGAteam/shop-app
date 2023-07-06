@extends('layouts.front.base')
@section('page-type', 'login-page')
@section('header')
    <div class="page-header clear-filter" filter-color="orange">
        <div class="page-header-image" style="background-image:url({{ asset('img/login.jpg') }})"></div>
        <div class="content">
            <div class="container">
                <div class="col-md-4 ml-auto mr-auto">
                    <div class="card card-login card-plain">
                        <div class="card-header text-center">
                            <div class="logo-container">
                                {{-- <img src="{{ asset('images/altcoin.png') }}" alt=""> --}}
                            </div>
                            <h3>{{ __('Reset Password') }}</h3>
                        </div>
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
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
                                        required autocomplete="new-password" />
                                    @error('password')
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
                                    <input type="password" placeholder="*********" id="password-confirm"
                                        class="form-control @error('password-confirm') is-invalid @enderror"
                                        name="password_confirmation" required autocomplete="new-password" />
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <button type="submit"
                                    class="btn btn-primary btn-round btn-lg btn-block">{{ __('Reset Password') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
