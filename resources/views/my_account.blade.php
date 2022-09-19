@extends('layouts.front.base')

@section('page-type', 'index-page')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header text-secondary text-center">
                        <h4 class="p-3">{{ __('Account Information') }}</h4>
                    </div>
                    <div class="card-body pt-0">
                        @if (session('notification'))
                        <div class="alert alert-success" role="alert">
                            <div class="container">
                                <div class="alert-icon">
                                    <i class="now-ui-icons ui-2_like"></i>
                                </div>
                                <strong>{{ __('Great') }}!</strong>
                                {{ session('notification') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">
                                  <i class="now-ui-icons ui-1_simple-remove"></i>
                                </span>
                              </button>
                            </div>
                        </div>
                        @endif
                        <form action="{{ route('home.my_account.update') }}" method="post" enctype="">
                            @csrf
                            <div class="row">

                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="name">{{ __('Name') }}</label>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="{{ __('Name') }}" value="{{ old('name', $user->name) }}">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="last_name">{{ __('Last Name') }}</label>
                                        <input type="text" name="last_name" class="form-control"
                                            placeholder="{{ __('Last Name') }}"
                                            value="{{ old('last_name', $user->last_name) }}">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="email">{{ __('Email') }}</label>
                                        <input type="email" name="email" class="form-control"
                                            placeholder="{{ __('somename@domain.com') }}"
                                            value="{{ old('email', $user->email) }}">
                                    </div>
                                </div>

                                @php
                                    $countries = \App\Http\Controllers\FrontController::getCountriesList();
                                @endphp

                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class="form-group">
                                        <label for="country">{{ __('Country') }}</label>
                                        <select name="country"
                                            class="form-control @error('country') is-invalid form-control-danger @enderror">
                                            @foreach ($countries as $key => $country)
                                                <option value="{{ $key }}">{{ $country['name'] }} -
                                                    {{ $key }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('country')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="city">{{ __('City') }}</label>
                                        <input type="text" name="city" class="form-control"
                                            placeholder="{{ __('Eg: San Clemente del Tuyu, Buenos Aires') }}"
                                            value="{{ old('city', $user->city) }}">
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <label for="street">{{ __('Street') }}</label>
                                        <input type="text" name="street" class="form-control"
                                            placeholder="{{ __('Eg: Calle 20') }}"
                                            value="{{ old('street', $user->street) }}">
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-4 col-lg-2">
                                    <div class="form-group">
                                        <label for="number">{{ __('Number') }}</label>
                                        <input type="number" name="number" class="form-control"
                                            placeholder="{{ __('1234') }}" value="{{ old('number', $user->number) }}">
                                    </div>
                                </div>

                                <div class="col-sm-3 col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label for="zip_code">{{ __('Zip Code') }}</label>
                                        <input type="text" name="zip_code" class="form-control"
                                            value="{{ old('zip_code', $user->zip) }}">
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <label for="phone">{{ __('Phone') }}</label>
                                        <input type="number" name="phone" class="form-control"
                                            placeholder="{{ __('Numbers only') }}"
                                            value="{{ old('phone', $user->phone) }}">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class="form-group">
                                        <label for="document">{{ __('Document /Identifaction') }}</label>
                                        <input type="text" name="document" class="form-control"
                                            value="{{ old('document', $user->document) }}">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Save my Information') }}
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="alert alert-info" role="alert">
                                        <div class="container">
                                            <div class="alert-icon">
                                                <i class="now-ui-icons travel_info"></i>
                                            </div>
                                            <strong>{{ __('Info') }}!</strong>
                                            {{ __('The information entered in this section will only be used by you at the time of purchasing a product. Transactions are not made from the website, for greater security payments are processed with the payment gateway Dlocal. Once the payment of a product is made we will inform its status and we will contact your email with all the information submitted.') }}
                                            {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">
                                              <i class="now-ui-icons ui-1_simple-remove"></i>
                                            </span>
                                          </button> --}}
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
