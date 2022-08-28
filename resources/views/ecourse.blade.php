@extends('layouts.front.base')
@section('page-type', 'index-page')
@section('content')
    <!-- OUR PRODUCTS -->
    <div class="section pt-5 pb-0">
        <div class="container">
            <h3 class="">{{$product->name}}</h3>
            <div class="row">
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
                                <img src="{{ $product->featured_image_url }}" class="card-img-top" alt="" />
                            </div>
                            <div class="card-footer text-center pb-3 counter">
                                <h4 class="card-text mt-0">@if($product->old_price)<span class="text-danger"><del> US${{ $product->old_price }}</del></span>@endif US$ {{ $product->price }}</h4>  
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
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                              <ul class="nav nav-tabs nav-tabs-neutral justify-content-center" role="tablist" data-background-color="orange">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#description" role="tab">{{ __('Description')}}</a>
                                </li>
                                @if ($product->content)
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#content" role="tab">{{ __('Content')}}</a>
                                </li>
                                @endif
                                @if ($product->info)
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#info" role="tab">{{ __('Info')}}</a>
                                </li>
                                @endif
                              </ul>
                            </div>
                            <div class="card-body">
                              <!-- Tab panes -->
                              <div class="tab-content text-center">
                                  <div class="tab-pane active" id="description" role="tabpanel">
                                      @if ($product->description)
                                      {!! $product->description!!}
                                      @else
                                      <div class="alert alert-warning" role="alert">
                                        <div class="container">
                                          <div class="alert-icon">
                                            <i class="now-ui-icons travel_info"></i>
                                          </div>
                                          <strong>Oops!</strong> {{ __('Sorry, the description is not available at the moment. Please come back later.')}}
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
                    url: "{{ url('/add-to-cart/product=') }}" + id,
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
                    url: "{{ url('/remove-from-cart/product=') }}" + id,
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
