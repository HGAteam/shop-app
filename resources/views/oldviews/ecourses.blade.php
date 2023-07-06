@extends('layouts.front.base')
@section('page-type', 'index-page')
@section('content')
    <!-- OUR PRODUCTS -->
    <div class="section pt-5 pb-0">
        <div class="container">
            <h3 class="">OUR PRODUCTS</h3>
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
                                            $cart = \App\Models\Cart::where('user_id', auth()->user()->id)->where('status','Active')->first();
                                            $cart_detail = \App\Models\CartDetail::where('cart_id', $cart->id)->where('product_id', $product->id)->first();
                                        } catch (\Throwable $th) {
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
                                    <a href="{{ url('/login?redirect_to='.url()->current()) }}" class="btn btn-danger">
                                        {{ __('Buy Now') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $products->links() }}
        </div>
    </div>
    @include('layouts.include._footer')

@endsection
