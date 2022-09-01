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
                                @if ($item)
                                    <button type="button" class="btn btn-danger remove-from-cart" data-toggle="tooltip"
                                        data-placement="top" title="{{ __('Remove from cart') }}" data-container="body"
                                        data-animation="true" data-delay="100" data-id="{{ $product->id }}">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                @else
                                    @if (config('app.page_cart') == true)
                                        <button type="button" class="btn btn-success add-to-cart" data-toggle="tooltip"
                                            data-placement="top" title="{{ __('Add to cart') }}" data-container="body"
                                            data-animation="true" data-delay="100" data-id="{{ $product->id }}">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    @endif
                                @endif
                                @if ($item)
                                    <a href="#" class="disabled btn btn-secondary">
                                        {{ __('Buy Now') }}
                                    </a>
                                @else
                                    <button type="button" onclick="showModal()" class="btn btn-secondary chechout">
                                        {{ __('Buy Now') }}
                                    </button>
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
                    <p>Our market will reach as far as Latin America where we have a huge advantage for customer support in
                        Spanish speaking language. This is one of the greater opportunities keeping in mind the growing
                        hispanic population in US and the rest of the world.</p>
                </div>
                <div class="col-md-6">
                    <h4 class="text-center"><b>CryptoCurrency Investment</b></h4>
                    <p>You are not alone in this journey, we are with you to guide you and support in this quest. If you
                        have any question, please feel free to contact us with your concern and we will be more than happy
                        to assist you.</p>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.front.partials._modal')
@endsection
@section('scripts')
    <script src="{{ asset('ztoaster-main/ztoaster.min.js') }}"></script>
    @if (config('dlocal.mode') == true)
        <script src="https://js.dlocal.com/"></script>
    @else
        <script src="https://js-sandbox.dlocal.com"></script>
    @endif
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

            var email = document.querySelector('[name="email"]').value;
            var full_name = document.querySelector('[name="card_holder"]').value;
            var phone = document.querySelector('[name="phone"]').value;
            var cellphone = document.querySelector('[name="phone"]').value;
            var country = document.querySelector('[name="country"]').value;
            var dlocal_config = "{{ config('dlocal.mode') }}";
            
            const buttonCancel = document.querySelector('[data-action="cancel"]');
            const buttonSubmit = document.querySelector('[data-action="buy_now"]');
            const buttonClose = document.querySelector('[class="close"]');

            if (dlocal_config == false) {
                const dlocalInstance = dlocal("{{ config('dlocal.sandbox.secret_key') }}");

                const fields = dlocalInstance.fields({
                    country: country,
                    locale: 'en',
                    fonts: [{
                        cssSrc: 'https://rsms.me/inter/inter-ui.css'
                    }]
                });

                const cardField = fields.create('card', {
                    style: {
                        base: {
                            fontSize: "18px",
                            fontFamily: "'Inter UI medium', sans-serif",
                            lineHeight: '22px',
                            fontSmoothing: 'antialiased',
                            fontWeight: '500',
                            // border: "2px solid #E3E3E3",
                            width: "80%",
                            marginLeft: "50px",
                            marginRight: "50px",
                            color: "#32325d",
                            '::placeholder': {
                                color: "#aab7c4"
                            },
                            iconColor: "#adbfd3"
                        }
                    }
                });

                cardField.mount(document.getElementById('container'));

                cardField.addEventListener('change', function(event) {
                    var displayError = document.getElementById('card-errors');
                    if (event.error) {
                        displayError.textContent = event.error.message;
                    } else {
                        displayError.textContent = '';
                    }
                });

                let actualBrand = null;

                cardField.on('brand', function(event) {
                    document.getElementById('card-errors').innerHTML = "";
                    if (event.brand) {
                        //when card brand changes
                        actualBrand = cardStatus.brand;
                        //totalAmount & currency of the purchase
                        dlocal.createInstallmentsPlan(card, totalAmount, currency)
                            .then((result) => {
                                var installmentsSelect = document.getElementById('installments');
                                buildInstallments(installmentsSelect, result.installments);
                            }).catch((result) => {
                                console.error(result);
                            });
                    }
                });

                function buildInstallments(installmentsInput, installmentsPlan) {
                    const installmentsOptions = installmentsPlan.installments.reduce(function(options, plan) {
                        options += "<option value=" + plan.id + ">" + plan.installments + " of " + currency +
                            " " + plan
                            .installment_amount + " (Total : " + currency + " " + plan.total_amount +
                            ")</option>";
                        return options;
                    }, "");
                    installmentsInput.disabled = false;
                    installmentsInput.innerHTML = installmentsOptions;
                }

                // Create a token or display an error when the form is submitted.
                var form = document.getElementById('payment-form');

                form.addEventListener('submit', function(event) {
                    event.preventDefault();
                    var cardHolderName = document.getElementById('card-holder').value;
                    dlocal.createToken(card, {
                        name: cardHolderName
                    }).then(function(result) {
                        // Send the token to your server.
                        dlocalTokenHandler(result.token);
                    }).catch((result) => {
                        if (result.error) {
                            // Inform the customer that there was an error.
                            var errorField = document.getElementById('card-errors');
                            errorField.textContent = result.error.message;
                        }
                    });

                    // ADD PRODUCT IN CART
                    $.ajax({
                        url: "{{ url('/add-to-cart/product=') }}" + id,

                        type: "POST",

                        data: {

                            name: name,

                            category: category,

                            description: description,

                            price: price,

                            old_price: old_price,

                            _token: "{{ csrf_token() }}",

                        },

                        success: function(response) {

                            if (response) {

                                alert(response.success);

                                form.reset();

                                datatable.draw();

                            }

                        },

                        error
                    });
                });

                function dlocalTokenHandler(token) {
                    // Insert the token ID into the form so it gets submitted to the server
                    var form = document.getElementById('payment-form');
                    var tokenInput = document.createElement('input');
                    tokenInput.setAttribute('type', 'hidden');
                    tokenInput.setAttribute('name', 'dlocalToken');
                    tokenInput.setAttribute('value', token);
                    form.appendChild(tokenInput);

                    // Submit the form
                    form.submit();
                }

                buttonCancel.addEventListener('click', function(event) {
                    event.preventDefault();
                    $('#checkout-modal').modal('hide');
                    email = '';
                    full_name = '';
                    phone = '';
                    cellphone = '';
                    country = '';
                    form.reset();
                });

                buttonClose.addEventListener('click', function(event) {
                    event.preventDefault();
                    $('#checkout-modal').modal('hide');
                    email = '';
                    full_name = '';
                    phone = '';
                    cellphone = '';
                    country = '';
                    form.reset();
                });

                console.log('Develop');
            } else {
                const dlocalInstance = dlocal("{{ config('dlocal.production.secret_key') }}");

                const fields = dlocalInstance.fields({
                    country: country,
                    locale: 'en',
                    fonts: [{
                        cssSrc: 'https://rsms.me/inter/inter-ui.css'
                    }]
                });

                const cardField = fields.create('card', {
                    style: {
                        base: {
                            fontSize: "18px",
                            fontFamily: "'Inter UI medium', sans-serif",
                            lineHeight: '22px',
                            fontSmoothing: 'antialiased',
                            fontWeight: '500',
                            // border: "2px solid #E3E3E3",
                            width: "80%",
                            marginLeft: "50px",
                            marginRight: "50px",
                            color: "#32325d",
                            '::placeholder': {
                                color: "#aab7c4"
                            },
                            iconColor: "#adbfd3"
                        }
                    }
                });

                cardField.mount(document.getElementById('container'));

                cardField.addEventListener('change', function(event) {
                    var displayError = document.getElementById('card-errors');
                    if (event.error) {
                        displayError.textContent = event.error.message;
                    } else {
                        displayError.textContent = '';
                    }
                });

                let actualBrand = null;

                cardField.on('brand', function(event) {
                    document.getElementById('card-errors').innerHTML = "";
                    if (event.brand) {
                        //when card brand changes
                        actualBrand = cardStatus.brand;
                        //totalAmount & currency of the purchase
                        dlocal.createInstallmentsPlan(card, totalAmount, currency)
                            .then((result) => {
                                var installmentsSelect = document.getElementById('installments');
                                buildInstallments(installmentsSelect, result.installments);
                            }).catch((result) => {
                                console.error(result);
                            });
                    }
                });

                function buildInstallments(installmentsInput, installmentsPlan) {
                    const installmentsOptions = installmentsPlan.installments.reduce(function(options, plan) {
                        options += "<option value=" + plan.id + ">" + plan.installments + " of " + currency +
                            " " + plan
                            .installment_amount + " (Total : " + currency + " " + plan.total_amount +
                            ")</option>";
                        return options;
                    }, "");
                    installmentsInput.disabled = false;
                    installmentsInput.innerHTML = installmentsOptions;
                }

                // Create a token or display an error when the form is submitted.
                var form = document.getElementById('payment-form');

                form.addEventListener('submit', function(event) {
                    event.preventDefault();
                    var cardHolderName = document.getElementById('card-holder').value;
                    dlocal.createToken(card, {
                        name: cardHolderName
                    }).then(function(result) {
                        // Send the token to your server.
                        dlocalTokenHandler(result.token);
                    }).catch((result) => {
                        if (result.error) {
                            // Inform the customer that there was an error.
                            var errorField = document.getElementById('card-errors');
                            errorField.textContent = result.error.message;
                        }
                    });

                    // ADD PRODUCT IN CART
                    $.ajax({
                        url: "{{ url('/add-to-cart/product=') }}" + id,

                        type: "POST",

                        data: {

                            name: name,

                            category: category,

                            description: description,

                            price: price,

                            old_price: old_price,

                            _token: "{{ csrf_token() }}",

                        },

                        success: function(response) {

                            if (response) {

                                alert(response.success);

                                form.reset();

                                datatable.draw();

                            }

                        },

                        error
                    });
                });

                function dlocalTokenHandler(token) {
                    // Insert the token ID into the form so it gets submitted to the server
                    var form = document.getElementById('payment-form');
                    var tokenInput = document.createElement('input');
                    tokenInput.setAttribute('type', 'hidden');
                    tokenInput.setAttribute('name', 'dlocalToken');
                    tokenInput.setAttribute('value', token);
                    form.appendChild(tokenInput);

                    // Submit the form
                    form.submit();
                }

                buttonCancel.addEventListener('click', function(event) {
                    event.preventDefault();
                    $('#checkout-modal').modal('hide');
                    email = '';
                    full_name = '';
                    phone = '';
                    cellphone = '';
                    country = '';
                    form.reset();
                });

                buttonClose.addEventListener('click', function(event) {
                    event.preventDefault();
                    $('#checkout-modal').modal('hide');
                    email = '';
                    full_name = '';
                    phone = '';
                    cellphone = '';
                    country = '';
                    form.reset();
                });
                console.log('Production');
            }
        })();

        function showModal() {
            $('#checkout-modal').modal({
                backdrop: 'static',
                keyboard: false
            });
        }
    </script>
@endsection
