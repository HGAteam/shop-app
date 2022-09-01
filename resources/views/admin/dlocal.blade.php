@extends('layouts.dashboard.base')
@section('content')
    <div class="container">

        <div class="row">

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center py-0">
                        <h4>{{ __('Dlocal Data') }}</h4>
                    </div>
                    <div class="card-body pt-0 pb-3">
                        <div class="form-group row">
                            <label class="col-4 pt-2" style="text-align: right">x_login</label>
                            <input type="text" class="form-control col-5"disabled placeholder="x_login" name="x_login"
                                value="{{ old('x_login') }}">
                        </div>
                        <div class="form-group row">
                            <label class="col-4 pt-2" style="text-align: right">x_transkey</label>
                            <input type="text" class="form-control col-5"disabled placeholder="x_transkey"
                                name="x_transkey" value="{{ old('x_transkey') }}">
                        </div>
                        <div class="form-group row">
                            <label class="col-4 pt-2" style="text-align: right">Smartfields api key</label>
                            <input type="text" class="form-control col-5"disabled placeholder="Smartfields api key"
                                name="smartfields_api_key" value="{{ old('smartfields_api_key') }}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center py-0">
                        <h4>{{ __('Dlocal Mode') }}</h4>
                    </div>
                    <div class="card-body py-0">
                            <div class="form-group">
                                <label class="col-5">{{ __('Production Secret key') }}</label>
                                <input type="text" class="form-control" placeholder="Secret key" name="secret_key"
                                    value="{{ old('secret_key') }}">
                            </div>
                            <div class="form-group">
                                <label class="pt-2">{{ __('Sandbox Secret key (Test)') }}</label>
                                <input type="text" class="form-control" placeholder="Secret key" name="test_secret_key"
                                    value="{{ old('test_secret_key') }}">
                            </div>
                            <div class="mb-3" style="text-align: center">
                                <div class="form-check form-check-radio">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="options"
                                            @if (config('dlocal.mode') == true) checked @endif value="true">
                                        <span class="form-check-sign"></span>
                                        {{ __('Enable Production Envioroment') }}
                                    </label>
                                </div>
                                <div class="form-check form-check-radio">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="options" value="false"
                                            @if (config('dlocal.mode') == false) checked @endif>
                                        <span class="form-check-sign"></span>
                                        {{ __('Enable Sandbox Enviroment') }}
                                    </label>
                                </div>
                            </div>
                    </div>
                    <div class="alert alert-info m-0" role="alert">
                        <div class="container">
                          <div class="alert-icon">
                            <i class="now-ui-icons travel_info"></i>
                          </div>
                          <strong>Info! </strong>  {{__('To change the default values expressed in the fields it is necessary to edit the configuration of your .env file or from the path "/config/dlocal".')}}
                        </div>
                      </div>
                </div>
            </div>

        </div>

    </div>
@endsection
@section('scripts')
    <script>
        $(function() {
            var mode = "{{ config('dlocal.mode') }}";
            document.querySelector('[name="x_login"]').value = "{{ config('dlocal.x_login') }}";
            document.querySelector('[name="x_transkey"]').value = "{{ config('dlocal.x_transkey') }}";
            document.querySelector('[name="smartfields_api_key"]').value = "{{ config('dlocal.smart_api_key') }}";

            document.querySelector('[name="secret_key"]').value = "{{ config('dlocal.production.secret_key') }}";
            document.querySelector('[name="secret_key"]').disabled = true;
            document.querySelector('[name="test_secret_key"]').value = "{{ config('dlocal.sandbox.secret_key') }}";
            document.querySelector('[name="test_secret_key"]').disabled = true;
            
            document.querySelector('[name="options"]').disabled = true;
            if (mode == false) {
                console.log('You are in Sandbox mode');
            } else {
                console.log('You are in Production mode');
            }
        });
    </script>
@endsection
