@extends('layouts.front.base')
@section('css')
    <style>
        .my-input {
            padding: 10px;
            border: 1px solid #ccc;
        }
    </style>
@endsection

@section('page-type', 'index-page')
@section('content')
    <div class="container">
        @if (auth()->user()->admin == true)
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="m-3">
                                {{ __('Welcome Back') }}
                                <small>
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    {{ __('You are successfully logged in!') }}
                                </small>
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body p-5 text-center">
                                            <h4>
                                                {{ __('Productcs') }}
                                            </h4>
                                            <h1>({{ $products = count(\App\Models\Product::all()) }})</h1>
                                            @if ($products > 0)
                                            <a class="btn btn-primary" href="{{url('home/products')}}" role="button">{{ __('View Products') }}</a>
                                            @else
                                            <a class="btn btn-primary disabled" href="javascript:void(0)" role="button">{{ __('No Products') }}</a>
                                            @endif                                        
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body p-5 text-center">
                                            <h4>
                                                {{ __('Orders') }}
                                            </h4>
                                            <h1>
                                                {{$order = count(\App\Models\Cart::where('status','!=','Active')->get())}}
                                            </h1>
                                            @if ($order > 0)
                                            <a class="btn btn-primary" href="{{url('home/manage-orders')}}" role="button">{{ __('View Orders') }}</a>
                                            @else
                                            <a class="btn btn-primary disabled" href="javascript:void(0)" role="button">{{ __('No Orders') }}</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body p-5 text-center">
                                            <h4>
                                                {{ __('Earning') }}
                                            </h4>
                                            <h1>
                                                US$ 0.0
                                            </h1>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header text-center">
                            @if (session('notification'))
                                <div class="alert alert-success">
                                    {{ session('notification') }}
                                </div>
                            @endif

                            @if (auth()->user()->cart->total == 0)
                                <h4 class="text-center">
                                    <i class="fas fa-info-circle fa-5x"></i><br>
                                </h4>
                                <h3 class="text-center">
                                    {{ __('You have no items in your cart') }}
                                </h3>
                                <a href="{{ url('ecourses') }}"
                                    class="btn btn-info btn-round">{{ __('Go to ecourses') }}</a>
                            @else
                                <b>{{ __('Your shopping cart contains') .' ' .auth()->user()->cart->details->count() .' ' .__('products') }}</b>
                            @endif
                        </div>
                        <div class="card-body">
                            @if (auth()->user()->cart->total != 0)
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-center">{{ __('Name') }}</th>
                                                <th>{{ __('Price') }}</th>
                                                <th>{{ __('Quantity') }}</th>
                                                <th>{{ __('SubTotal') }}</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (auth()->user()->cart->details as $detail)
                                                <tr>
                                                    <td class="text-center">
                                                        <img src="{{ $detail->product->featured_image_url }}"
                                                            height="50">
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="{{ url('/ecourses/' . $detail->product->slug) }}"
                                                            target="_blank">{{ $detail->product->name }}</a>
                                                    </td>
                                                    <td class="text-center">USD$ {{ $detail->product->price }}</td>
                                                    <td class="text-center">{{ $detail->quantity }}</td>
                                                    <td class="text-center">USD$
                                                        {{ $detail->quantity * $detail->product->price }}</td>
                                                    <td class="text-center">
                                                        <a href="{{ url('/ecourses/' . $detail->product->slug) }}"
                                                            target="_blank" rel="tooltip" title="{{ __('More Info') }}"
                                                            class="btn btn-info btn-xs">
                                                            <i class="fa fa-info"></i>
                                                        </a>
                                                    </td>
                                                    <td class="td-actions">
                                                        <form method="post" action="{{ url('/cart') }}">
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                            <input type="hidden" name="cart_detail_id"
                                                                value="{{ $detail->id }}">
                                                            <button type="submit" rel="tooltip" title="Eliminar"
                                                                class="btn btn-danger btn-xs">
                                                                <i class="fa fa-times"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <h4 class="text-center">{{ __('Imports to be paid') }} <br> USD$
                                    {{ auth()->user()->cart->total }}</h4>
                                <div class="text-center">
                                    <button type="button" class="btn btn-primary btn-round" data-toggle="modal"
                                        data-target="#place_order">{{ __('Place Order') }}</button>
                                </div>
                            @endif
                        </div>

                    </div>
        @endif
    </div>

    <!-- Modal -->
    <div class="modal fade" id="place_order" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('Place Order') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ url('/home') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12 col-lg-12">
                                    <h5 class="text-center text-secondary">{{ __('Billing Information') }}</h5>
                                </div>
                                <input type="hidden" name="amount" value="{{ auth()->user()->cart->total }}">
                                <div class="col-sm-12 col-lg-12">
                                    <div class="form-group row">
                                        <label class="col-5 text-right pt-2">{{ __('Name') }}</label>
                                        <div class="col-6">
                                            <input type="text" name="name"
                                                value="{{ old('name', auth()->user()->name) }}" placeholder="Name"
                                                class="col-6 form-control @error('name') is-invalid form-control-danger @enderror">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-12">
                                    <div class="form-group row">
                                        <label class="col-5 text-right pt-2">{{ __('Last Name') }}</label>
                                        <div class="col-6">
                                            <input type="text" name="last_name"
                                                value="{{ old('last_name', auth()->user()->last_name) }}"
                                                placeholder="Last Name"
                                                class="form-control @error('last_name') is-invalid form-control-danger @enderror">
                                            @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-12">
                                    <div class="form-group row">
                                        <label class="col-5 text-right pt-2">{{ __('Email') }}</label>
                                        <div class="col-6">
                                            <input type="email" name="email"
                                                value="{{ old('email', auth()->user()->email) }}" placeholder="Email"
                                                class="form-control @error('email') is-invalid form-control-danger @enderror">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-12">
                                    <div class="form-group row">
                                        <label class="col-5 text-right pt-2">{{ __('Document /ID') }}</label>
                                        <div class="col-6">
                                            <input type="number" name="document"
                                                value="{{ old('document', auth()->user()->document) }}"
                                                placeholder="Document /ID"
                                                class="form-control @error('document') is-invalid form-control-danger @enderror">
                                            @error('document')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-12">
                                    <div class="form-group row">
                                        <label class="col-5 text-right pt-2">{{ __('Phone') }}</label>
                                        <div class="col-4">
                                            <input type="number" name="phone"
                                                value="{{ old('phone', auth()->user()->phone) }}" placeholder="Phone"
                                                class="form-control @error('phone') is-invalid form-control-danger @enderror">
                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                @php
                                    $countries = \App\Http\Controllers\FrontController::getCountriesList();
                                @endphp
                                <div class="col-sm-12 col-lg-12">
                                    <div class="form-group row">
                                        <label class="col-5 text-right pt-2">{{ __('Country') }}</label>
                                        <div class="col-6">
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
                                </div>
                                <div class="col-sm-12 col-lg-12">
                                    <div class="form-group row">
                                        <label class="col-5 text-right pt-2">{{ __('City') }}</label>
                                        <div class="col-6">
                                            <input type="text" name="city"
                                                value="{{ old('city', auth()->user()->city) }}" placeholder="City"
                                                class="form-control @error('city') is-invalid form-control-danger @enderror">
                                            @error('city')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-12">
                                    <div class="form-group row">
                                        <label class="col-5 text-right pt-2">{{ __('Street') }}</label>
                                        <div class="col-6">
                                            <input type="text" name="street"
                                                value="{{ old('street', auth()->user()->street) }}" placeholder="Street"
                                                class="form-control @error('street') is-invalid form-control-danger @enderror">
                                            @error('street')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-12">
                                    <div class="form-group row">
                                        <label class="col-5 text-right pt-2">{{ __('Number') }}</label>
                                        <div class="col-4">
                                            <input type="number" name="number"
                                                value="{{ old('number', auth()->user()->number) }}" placeholder="Number"
                                                class="form-control @error('number') is-invalid form-control-danger @enderror">
                                            @error('number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-612 col-lg-12">
                                    <div class="form-group row">
                                        <label class="col-5 text-right pt-2">{{ __('Zip Code') }}</label>
                                        <div class="col-4">
                                            <input type="text" name="zip_code"
                                                value="{{ old('zip_code', auth()->user()->zip) }}" placeholder="Zip Code"
                                                class="form-control @error('zip_code') is-invalid form-control-danger @enderror">
                                            @error('zip_code')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">{{ __('Cancel') }}</button>
                        <button type="submit" class="btn btn-primary">{{ __('Paying now') }} US$
                            {{ auth()->user()->cart->total }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
