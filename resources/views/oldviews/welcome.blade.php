@extends('layouts.front.base')
@section('css')
    <link rel="stylesheet" href="{{ asset('ztoaster-main/ztoaster.min.css') }}" />
@endsection
@section('page-type', 'index-page')

@section('content')
    <!-- FEATURED PRODUCTS -->
    <div class="section pt-5 pb-0">
        <div class="container">
            <h3 class="">{{ __('FEATURED PRODUCTS') }}</h3>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body py-0 my-0">
                                <a href="{{ route('ecourses.show', ['slug' => $product->slug]) }}">
                                    <img src="{{ $product->featured_image_url }}" class="card-img-top" alt="" />
                                </a>
                            </div>
                            <div class="card-footer text-center pb-3 counter">
                                <p class="mb-0"><b> {{ $product->name }}</b></p>
                                <p class="card-text mt-0">
                                    @if ($product->old_price)
                                        <span class="text-danger"><del> US${{ $product->old_price }}</del></span>
                                    @endif US$ {{ $product->price }}
                                </p>
                                @if (auth()->check())
                                @php
                                try {
                                    $cart_detail = false;
                                    $cart = \App\Models\Cart::where('user_id',auth()->user()->id)->where('status','Active')->first();
                                    $cart_detail = \App\Models\CartDetail::where('cart_id',$cart->id)->where('product_id',$product->id)->first();
                                } catch (\Throwable $th) {
                                    //throw $th;
                                }
                                    
                                @endphp
                                @if (!$cart_detail)
                                <form method="post" action="{{ url('/cart') }}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <button type="submit" class="btn btn btn-primary">
                                        {{__('Add to Cart')}}
                                    </button>
                                </form>
                                @else
                                <a href="javascript:void(0)" class="btn btn btn-primary disabled">
                                    {{__('Add to Cart')}}
                                </a>
                                @endif
                                
                                @else
                                    <a href="{{ url('/login?redirect_to='.url()->current()) }}" class="btn btn-danger">
                                       {{__('Buy Now')}}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="section pb-0">
        <div class="container">
            <h3 class="text-center text-secondary">
                {{ __('Grab all the knowledge you need to be successful') }}
            </h3>

            <div class="row">
                <div class="col-md-6">
                    <h4 class="text-center"><b>{{ __('CryptoCurrency Investment') }}</b></h4>
                    <p>{{ __('Our market will reach as far as Latin America where we have a huge advantage for customer support in
                        Spanish speaking language. This is one of the greater opportunities keeping in mind the growing
                        hispanic population in US and the rest of the world')}}.</p>
                </div>
                <div class="col-md-6">
                    <h4 class="text-center"><b>{{ __('CryptoCurrency Investment')}}</b></h4>
                    <p>{{ __('You are not alone in this journey, we are with you to guide you and support in this quest. If you
                        have any question, please feel free to contact us with your concern and we will be more than happy
                        to assist you') }}.</p>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.include._footer')

@endsection
@section('scripts')
@endsection
