@extends('layouts.front.base')
@section('css')
    <link rel="stylesheet" href="{{ asset('ztoaster-main/ztoaster.min.css') }}" />
@endsection
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
                            <div class="card-header">
                                <h4 class="text-center" style="font-size: 18px">
                                    {{ $product->name }}
                                </h4>
                            </div>
                            <div class="card-body">
                                <img src="{{ $product->featured_image_url }}" class="card-img-top" alt="" />
                            </div>
                            <div class="card-footer text-center pb-3 counter">
                                <p class="card-text">US$ {{ $product->price }}</p>  
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
                                    
                                <a href="#" class="btn btn-secondary">
                                    {{ __('Buy Now') }}
                                </a>
                              
                            </div>
                        </div>
                    </div>
                @endforeach
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
                      window.location.href = "{{ route('welcome') }}";
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
                      window.location.href = "{{ route('welcome') }}";
                }
                });
            });            
    })();
</script>
@endsection
@endsection
