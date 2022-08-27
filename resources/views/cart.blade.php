@extends('layouts.front.base')
@section('content')
    @if ($cart_products->count() < 1)
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="text-center">
                                <span>
                                    <i class="now-ui-icons shopping_cart-simple"></i>
                                </span><br>
                                {{ __('Empty Cart') }}
                            </h2>
                            <h3 class="text-center">{{ __('Visit our eCourses section to see the content of each course.') }}
                            </h3>
                            <h3 class="text-center">{{ __('We look forward to seeing you soon') }}</h3>
                            <h4 class="text-center">
                                <a href="#" class="nav-link">
                                    {{ __('eCourse') }}
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12">
                    <div class="card mt-5">
                        <div class="card-body">
                            <h2 class="text-center">
                                <span>
                                    <i class="now-ui-icons shopping_cart-simple"></i>
                                </span><br>
                                {{ __('Producst in Cart') }}
                            </h2>
                            <div class="card shadow-sm">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-md-8">

                                            <table class="table table-stripped table-inverse table-responsive">
                                                <thead class="thead-inverse text-nowrap">
                                                    <tr class="text-center">
                                                        <th>{{ __('Image') }}</th>
                                                        <th>{{ __('Product') }}</th>
                                                        <th>{{ __('Price') }}</th>
                                                        <th>{{ __('Action') }}</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($cart_products as $item)
                                                        <tr>
                                                            <td width="200px" class="d-flex justify-content-center">
                                                                <img src="{{ $item->product->featured_image_url }}"
                                                                    alt="{{ $item->product->name }}" class="rounded"
                                                                    style="width:50%">
                                                            </td>
                                                            <td>
                                                                <p class="pt-4">{{ $item->product->name }}</p>
                                                            </td>
                                                            <td>
                                                                <p class="pt-4">{{ $item->product->price }}</p>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="btn btn-danger mt-4 remove-from-cart" data-id="{{ $item->product_id}}">
                                                                    <i class="fa fa-minus"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>

                                        </div>
                                        <div class="col-md-4 bg-info">
                                            <h2 class="text-center mt-4 pt-5">
                                                {{ __('Total')}}
                                            </h2>
                                            <h2 class="text-center">
                                                US$ 0.00

                                            </h2>
                                            <div class="text-center">
                                                <a href="#" class="btn btn-secondary btn-lg">
                                                    {{ __('Buy Now')}}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    @endif
@endsection
@section('scripts')
<script>
    (function(){
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
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
                    //   alert('Product removed from cart');
                }
                });
            });            
    })();
</script>
@endsection