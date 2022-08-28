@extends('layouts.front.base')
@section('page-type', 'index-page')
@section('content')
    <!-- OUR PRODUCTS -->
    <div class="section pt-5 pb-0">
        <div class="container">
            <h3 class="">OUR PRODUCTS</h3>
            <div class="row">
                @foreach ($products as $product)
                    <?php
                    $item = 0;
                    try {
                        if (Request::ip()) {
                            $cart_wel = \App\Models\Cart::where('ip', Request::ip())->first();
                            $item = \App\Models\CartDetail::where('cart_id', $cart_wel->id)
                                ->where('product_id', $product->id)
                                ->first();
                        } else {
                        }
                    } catch (\Throwable $th) {
                        //throw $th;
                    }
                    ?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body py-0 my-0">
                                <a href="{{route('ecourses.show', ['slug' => $product->slug])}}">
                                    <img src="{{ $product->featured_image_url }}" class="card-img-top" alt="" />
                                </a>
                            </div>
                            <div class="card-footer text-center pb-3 counter">
                                <p class="mb-0"><b> {{ $product->name }}</b></p>
                                <p class="card-text mt-0">@if($product->old_price)<span class="text-danger"><del> US${{ $product->old_price }}</del></span>@endif US$ {{ $product->price }}</p>  
                                @if ($item)
                                    <button type="button" class="btn btn-danger remove-from-cart" data-toggle="tooltip"
                                        data-placement="top" title="{{ __('Remove from cart') }}" data-container="body"
                                        data-animation="true" data-delay="100" data-id="{{ $product->id }}">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                @else
                                    <button type="button" class="btn btn-success add-to-cart" data-toggle="tooltip"
                                        data-placement="top" title="{{ __('Add to cart') }}" data-container="body"
                                        data-animation="true" data-delay="100" data-id="{{ $product->id }}">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                @endif
                                @if ($item)
                                    <a href="#" class="disabled btn btn-secondary">
                                        {{ __('Buy Now') }}
                                    </a>
                                @else
                                    <a href="{{ route('index.purchase', ['product_id' => $product->id]) }}"
                                        class="btn btn-secondary">
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
@endsection
@section('scripts')
    <script>
        (function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.add-to-cart').on('click', function() {
                var id = $(this).attr('data-id')
                $.ajax({
                    type: "get",
                    url: '{{ url('/add-to-cart/product=') }}' + id,
                    data: {
                        'product_id': this.value,
                    },
                    success: function(data) {
                        window.location.reload();
                    }
                });
            });
            $('.remove-from-cart').on('click', function() {
                var id = $(this).attr('data-id')
                $.ajax({
                    type: "delete",
                    url: '{{ url('/remove-from-cart/product=') }}' + id,
                    data: {
                        'product_id': this.value,
                    },
                    success: function(data) {
                        window.location.reload();
                    }
                });
            });
        })();
    </script>
@endsection
