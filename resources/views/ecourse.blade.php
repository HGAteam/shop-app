@extends('layouts.front.base')
@section('page-type', 'index-page')

@section('content')
    <!-- OUR PRODUCTS -->
    <div class="section pt-5 pb-0">
        <div class="container">
            <h3 class="">{{ $product->name }}</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body py-0 my-0">
                            <img src="{{ $product->featured_image_url }}" class="card-img-top" alt="" />
                        </div>
                        <div class="card-footer text-center pb-3 counter">
                            <h4 class="card-text mt-0">
                                @if ($product->old_price)
                                    <span class="text-danger"><del> US${{ $product->old_price }}</del></span>
                                @endif US$ {{ $product->price }}
                            </h4>
                            @if (auth()->check())
                                @php
                                    try {
                                        $cart_detail = false;
                                        $cart = \App\Models\Cart::where('user_id', auth()->user()->id)->first();
                                        $cart_detail = \App\Models\CartDetail::where('cart_id', $cart->id)
                                            ->where('product_id', $product->id)
                                            ->first();
                                    } catch (\Throwable $th) {
                                        //throw $th;
                                    }
                                    
                                @endphp
                                @if (!$cart_detail)
                                    <form method="post" action="{{ url('/cart') }}">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <button type="submit" class="btn btn btn-primary">
                                            {{ __('Add to Cart') }}
                                        </button>
                                    </form>
                                @else
                                    <a href="javascript:void(0)" class="btn btn btn-primary disabled">
                                        {{ __('Add to Cart') }}
                                    </a>
                                @endif
                            @else
                                <a href="{{ url('/login?redirect_to=' . url()->current()) }}" class="btn btn-danger">
                                    {{ __('Buy Now') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs nav-tabs-neutral justify-content-center" role="tablist"
                                data-background-color="orange">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#description"
                                        role="tab">{{ __('Description') }}</a>
                                </li>
                                @if ($product->content)
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#content"
                                            role="tab">{{ __('Content') }}</a>
                                    </li>
                                @endif
                                @if ($product->info)
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#info"
                                            role="tab">{{ __('Info') }}</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                        <div class="card-body">
                            <!-- Tab panes -->
                            <div class="tab-content text-center">
                                <div class="tab-pane active" id="description" role="tabpanel">
                                    @if ($product->description)
                                        {!! $product->description !!}
                                    @else
                                        <div class="alert alert-warning" role="alert">
                                            <div class="container">
                                                <div class="alert-icon">
                                                    <i class="now-ui-icons travel_info"></i>
                                                </div>
                                                <strong>Oops!</strong>
                                                {{ __('Sorry, the description is not available at the moment. Please come back later.') }}
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                @if ($product->content)
                                    <div class="tab-pane" id="content" role="tabpanel">
                                        {!! $product->content !!}
                                    </div>
                                @endif
                                @if ($product->info)
                                    <div class="tab-pane" id="info" role="tabpanel">
                                        {!! $product->info !!}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.front.partials._modal')
@endsection