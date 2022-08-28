@extends('layouts.front.base')
@section('css')
    <link rel="stylesheet" href="{{ asset('ztoaster-main/ztoaster.min.css') }}" />
@endsection
@section('page-type', 'index-page')

@section('content')
    <!-- FEATURED PRODUCTS -->
    <div class="section pt-5 pb-0">
        <div class="container">
            <h3 class="">FEATURED PRODUCTS</h3>
            <div class="row">
                @foreach ($products as $product)
                    <?php
                    $item =0;
                    try {
                        if(Request::ip()){
                            $cart_wel = \App\Models\Cart::where('ip', Request::ip())->first();
                            $item = \App\Models\CartDetail::where('cart_id', $cart_wel->id)->where('product_id', $product->id)->first();
                        }else{
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
                                    data-animation="true" data-delay="100" data-id="{{$product->id}}">
                                    <i class="fas fa-minus"></i>
                                </button>
                                @else
                                    <button type="button" class="btn btn-success add-to-cart" data-toggle="tooltip"
                                        data-placement="top" title="{{ __('Add to cart') }}" data-container="body"
                                        data-animation="true" data-delay="100" data-id="{{$product->id}}">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                @endif
                                @if ($item)
                                <a href="#" class="disabled btn btn-secondary">
                                    {{ __('Buy Now') }}
                                </a>
                                @else
                                <a href="{{route('index.purchase',['product_id' => $product->id])}}" class="btn btn-secondary">
                                    {{ __('Buy Now') }}
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
            Grab all the knowledge you need to be successful 
        </h3>

        <div class="row">
            <div class="col-md-6">
                <h4 class="text-center"><b>CryptoCurrency Investment</b></h4>
                <p>Our market will reach as far as Latin America where we have a huge advantage for customer support in Spanish speaking language. This is one of the greater opportunities keeping in mind the growing hispanic population in US and the rest of the world.</p>
            </div>
            <div class="col-md-6">
                <h4 class="text-center"><b>CryptoCurrency Investment</b></h4>
                <p>You are not alone in this journey, we are with you to guide you and support in this quest. If you have any question, please feel free to contact us with your concern and we will be more than happy to assist you.</p>
            </div>
        </div>
    </div>
</div>
@section('scripts')
<script src="{{ asset('ztoaster-main/ztoaster.min.js') }}"></script>
<script>
    (function(){
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.add-to-cart').on('click', function() {
                var id = $(this).attr('data-id')
                $.ajax({
                  type: "get",
                  url: '{{ url("/add-to-cart/product=") }}' +  id,
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
                  url: '{{ url("/remove-from-cart/product=") }}' +  id,
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
@endsection
