@extends('layouts.dashboard.base')
@section('css')
<style>
    .my-input {
      padding: 10px;
      border: 1px solid #ccc;
    }
  </style>
@endsection
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
                                            <h1>({{ count(\App\Models\Product::all()) }})</h1>
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
                                                0
                                            </h1>
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
                        <div class="card-header">
                            <h4 class="m-3">
                                {{ __('Panel de compras') }}
                                @if (session('notification'))
                                    <div class="alert alert-success">
                                        {{ session('notification') }}
                                    </div>
                                @endif
                            </h4>
                        </div>
                        <div class="card-body">
                            <p>{{ __('Your shopping cart contains') .' ' .auth()->user()->cart->details->count() .' ' .__('products') }}
                            </p>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">{{ __('Name') }}</th>
                                        <th>{{ __('Price') }}</th>
                                        <th>{{ __('Quantity') }}</th>
                                        <th>{{ __('SubTotal') }}</th>
                                        <th>{{ __('Options') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (auth()->user()->cart->details as $detail)
                                        <tr>
                                            <td class="text-center">
                                                <img src="{{ $detail->product->featured_image_url }}" height="50">
                                            </td>
                                            <td>
                                                <a href="{{ url('/products/' . $detail->product->id) }}"
                                                    target="_blank">{{ $detail->product->name }}</a>
                                            </td>
                                            <td>USD$ {{ $detail->product->price }}</td>
                                            <td>{{ $detail->quantity }}</td>
                                            <td>USD$ {{ $detail->quantity * $detail->product->price }}</td>
                                            <td class="td-actions">
                                                <form method="post" action="{{ url('/cart') }}">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <input type="hidden" name="cart_detail_id"
                                                        value="{{ $detail->id }}">
                                                    <a href="{{ url('/ecourses/' . $detail->product->slug) }}"
                                                        target="_blank" rel="tooltip" title="{{ __('More Info') }}"
                                                        class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-info"></i>
                                                    </a>
                                                    <button type="submit" rel="tooltip" title="Eliminar"
                                                        class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <p><strong>{{ __('Imports to be paid') }}: USD$</strong> {{ auth()->user()->cart->total }}</p>

                            <div class="text-center">
                                {{-- <form method="post" action="{{ url('/order') }}">
                        {{ csrf_field() }}
                        <button class="btn btn-primary btn-round">{{ __('Place an order')}}</button>
                    </form> --}}
                                <button type="button" class="btn btn-primary btn-round" data-toggle="modal"
                                    data-target="#place_order">{{ __('Place Order') }}</button>
                            </div>
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
                                    <h5 class="text-secondary">{{ __('Billing Information') }}</h5>
                                </div>
                                <input type="hidden" name="amount" value="{{ auth()->user()->cart->total }}">
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="name"
                                            value="{{ old('name', auth()->user()->name) }}" placeholder="Name"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="last_name"
                                            value="{{ old('last_name', auth()->user()->last_name) }}"
                                            placeholder="Last Name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="email" name="email"
                                            value="{{ old('email', auth()->user()->email) }}" placeholder="Email"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="number" name="document"
                                            value="{{ old('document') }}"
                                            placeholder="Document" class="form-control">
                                    </div>
                                </div>
                                @php
                                    $countries = \App\Http\Controllers\FrontController::getCountriesList();
                                @endphp
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <select name="country" class="form-control">
                                            @foreach ($countries as $key => $country)
                                                <option value="{{ $key }}">{{ $country['name'] }} -
                                                    {{ $key }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="city"
                                            value="{{ old('city', auth()->user()->city) }}" placeholder="City"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-8 col-lg-8">
                                    <div class="form-group">
                                        <input type="text" name="street"
                                            value="{{ old('street') }}" placeholder="Street"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-lg-4">
                                    <div class="form-group">
                                        <input type="number" name="number"
                                            value="{{ old('number') }}" placeholder="Number"
                                            class="form-control">
                                    </div>
                                </div>                                
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="zip_code"
                                            value="{{ old('zip_code', auth()->user()->zip) }}" placeholder="Zip Code"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="phone"
                                            value="{{ old('phone', auth()->user()->phone) }}" placeholder="Phone"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">{{ __('Cancel') }}</button>
                        <button type="submit" class="btn btn-primary">{{ __('Paying now') }} US$ {{ auth()->user()->cart->total }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
