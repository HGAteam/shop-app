@extends('layouts.front.base')

@section('page-type', 'index-page')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                @if (session('message'))
                    <div class="alert alert-warning" role="alert">
                        <div class="container">
                            <div class="alert-icon">
                                <i class="now-ui-icons ui-1_bell-53"></i>
                            </div>
                            <strong>{{ __('Notification') }}!</strong> {{ session('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">
                                    <i class="now-ui-icons ui-1_simple-remove"></i>
                                </span>
                            </button>
                        </div>
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        @if ($carts == null || $carts->count() == 0)
                            <h4 class="text-center">
                                <i class="fas fa-info-circle fa-5x"></i><br>
                            </h4>
                            <h3 class="text-center">
                                {{ __('You have not created any orders yet') }}
                            </h3>
                        @else
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th class="text-center">#</th>
                                        <th class="text-center">{{ __('Products') }}</th>
                                        <th class="text-center">{{ __('Created at') }}</th>
                                        <th class="text-center">{{ __('Status') }}</th>
                                        <th class="text-center">{{ __('Total') }}</th>
                                        <th class="text-center"></th>
                                    </thead>
                                    <tbody>
                                        @foreach ($carts as $cart)
                                            <tr>
                                                <td class="text-center">
                                                    {{ str_pad($cart->id, 7, '0', STR_PAD_LEFT) . auth()->user()->id }}
                                                </td>
                                                <td class="text-center">
                                                    @foreach ($cart->details as $item)
                                                        <span style="font-size:12px;">
                                                            {{ $item->product->name }}
                                                        </span><br>
                                                    @endforeach
                                                </td>
                                                <td class="text-center">
                                                    <span class="badge badge-primary p-1">
                                                        {{ $cart->created_at->format('d M Y H:m') }}
                                                    </span>
                                                </td>
                                                <td class="text-center">
                                                    @switch($cart->status)
                                                        @case('Pending')
                                                            <span class="badge badge-warning p-1" data-toggle="tooltip"
                                                                data-placement="top"
                                                                title="{{ __('An agent will contact you if the payment was successful.') }}">
                                                                {{ __('Pending') }}
                                                            </span>
                                                        @break

                                                        @case('Approved')
                                                            <span class="badge badge-success p-1" data-toggle="tooltip"
                                                                data-placement="top"
                                                                title="{{ __('Your payment was approved, an agent will send you the contents of your order.') }}">
                                                                {{ __('Approved') }}
                                                            </span>
                                                        @break

                                                        @case('Rejected')
                                                            <span class="badge badge-danger p-1" data-toggle="tooltip"
                                                                data-placement="top"
                                                                title="{{ __('The payment did not go through, please try again.') }}">
                                                                {{ __('Rejected') }}
                                                            </span>
                                                        @break

                                                        @case('Refunded')
                                                            <span class="badge badge-danger p-1" data-toggle="tooltip"
                                                                data-placement="top"
                                                                title="{{ __('Your payment was refunded.') }}">
                                                                {{ __('Refunded') }}
                                                            </span>
                                                        @break

                                                        @case('Refund')
                                                            <span class="badge badge-default p-1" data-toggle="tooltip"
                                                                data-placement="top"
                                                                title="{{ __('Request initiated to reimburse.') }}">
                                                                {{ __('Refund') }}
                                                            </span>
                                                        @break

                                                        @default
                                                            <span class="badge badge-info p-1" data-toggle="tooltip"
                                                                data-placement="top"
                                                                title="{{ __('Your order has been sent to the email account you provided.') }}">
                                                                {{ __('Completed') }}
                                                            </span>
                                                    @endswitch
                                                </td>
                                                <td class="text-center">
                                                    USD$ {{ $cart->total }}
                                                </td>
                                                <td>
                                                    @switch($cart->status)
                                                        @case('Pending')
                                                            <a href="{{ url('home/orders/refund/' . $cart->id) }}"
                                                                class="btn btn-sm btn-secondary my-0" target="_blank"
                                                                onclick="event.preventDefault(); document.getElementById('form-refund').submit();">
                                                                {{ __('Refund') }}
                                                            </a>
                                                            <form id="form-refund" method="POST"
                                                                action="{{ url('home/orders/refund/' . $cart->id) }}" class="d-none">
                                                                @csrf
                                                            </form>
                                                        @break

                                                        @case('Approved')
                                                            <a href="{{ url('home/orders/refund/' . $cart->id) }}"
                                                                class="btn btn-sm btn-secondary my-0" target="_blank"
                                                                onclick="event.preventDefault(); document.getElementById('refund-form').submit();">
                                                                {{ __('Refund') }}
                                                            </a>
                                                            <form id="refund-form" method="POST"
                                                                action="{{ url('home/orders/refund/' . $cart->id) }}" class="d-none">
                                                                @csrf
                                                            </form>
                                                        @break

                                                        @default
                                                    @endswitch
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
