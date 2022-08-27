<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Liftitfy - Checkout</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:description"
        content="Smart Fields are pre-built rich UI components that help you build your own pixel-perfect checkout flows
    across desktop and&#xA0;mobile, without worrying about PCI.">
    <link rel="icon" href="https://dlocal.com/wp-content/uploads/2018/04/favico.png" sizes="32x32">
    <link rel="icon" href="https://dlocal.com/wp-content/uploads/2018/04/favico.png" sizes="192x192">
    <!-- fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
    <!-- base CSS -->
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <!-- CSS for each example: -->
    <link rel="stylesheet" href="{{ asset('css/example-2.css') }}">
    <!-- checkboxs and radiobox CSS used in example 6 -->
    <link rel="stylesheet" href="{{ asset('css/checkbox.css') }}">
    <!-- floating-labels CSS used in example 6 -->
    <link rel="stylesheet" href="{{ asset('css/floating-label.css') }}">
</head>

<body>
    @php
    $countries = \App\Http\Controllers\FrontController::getCountriesList();
    @endphp
    <div class="mainContent">
        <main>
            <div class="container-lg">
                <!--Example 2-->
                <section class="row example example-2">
                    <div id="loader-example-2" class="loader"></div>
                    <div class="caption-top">
                        <h3 id="example-2.caption.example-number" class="no-charge text-center">{{ __('Checkout Liftitfy')}}</h3>
                    </div>
                    <div id="fields-form-example-2">
                        <fieldset>
                            <div class="container">
                                <div id="customContainer" class="exampleX custom">
                                    <div class="containerX">
                                        <div class="field newPayment">
                                            <label class="radiocontainer">New Payment Card
                                                <input type="radio" checked="checked" name="radio">
                                                <span class="radiomark"></span>
                                            </label>
                                            <img id="visa" alt="visa" class="brand-img visa first"
                                                src="{{asset('images/visa.svg')}}" />
                                            <img id="mastercard" alt="mastercard" class="brand-img mastercard"
                                                src="{{asset('images/master.svg')}}" />
                                            <img id="amex" alt="amex" class="brand-img amex"
                                                src="{{asset('images/amex.svg')}}" />
                                            <img id="discover" alt="discover" class="brand-img discover"
                                                src="{{asset('images/discover.svg')}}" />
                                        </div>
                                        <hr>
                                        <div id="fieldPanContainer" class="field half fieldFloating">
                                            <div id="containerPan" class="input empty" onclick="clickPan()"></div>
                                            <label for="containerPan" onclick="clickPan()">Card Number</label>
                                            <div class="errorMsgContainer">
                                                <span id="panErrorMsg" class="helpError">Enter your credit card
                                                    number.</span>
                                            </div>
                                        </div>
                                        <div id="fieldExpirationContainer" class="field cuarter fieldFloating">
                                            <div id="containerExpiration" class="input empty"
                                                onclick="clickExpiration()"></div>
                                            <label for="containerExpiration" onclick="clickExpiration()">MM/YY</label>
                                            <div class="errorMsgContainer">
                                                <span id="expirationErrorMsg" class="helpError">Enter your credit card
                                                    expiration.</span>
                                            </div>
                                        </div>
                                        <div id="fieldCVVContainer" class="field cuarter fieldFloating">
                                            <div id="containerCVV" class="input empty" onclick="clickCVV()"></div>
                                            <label for="containerCVV" onclick="clickCVV()">CVV</label>
                                            <div class="errorMsgContainer">
                                                <span id="cvvErrorMsg" class="helpError">Enter your credit card
                                                    CVV.</span>
                                            </div>
                                            <div class="tooltipContainer">
                                                <img id="cvvTooltip" alt="cvv" class="tooltipImage"
                                                    src="{{asset('images/question.svg')}}" />
                                                <div class="tooltipInner">
                                                    <img class="tooltipInnerImage" src="{{asset('images/security_code.svg')}}">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="field fieldFloating" id="nameContainer">

                                            <input id="name" type="text" placeholder="John Doe" required
                                                class="input empty" autocomplete="cc-name" />
                                            <label for="name">Cardholder Name</label>
                                            <div class="errorMsgContainer">
                                                <span class="helpError">Enter your name exactly as it appears on your
                                                    card.</span>
                                            </div>
                                        </div>
                                        <div class="field half fieldFloating" id="countryContainer">
                                            <select id="country" required class="input empty">
                                                @foreach ($countries as $key => $country)
                                                    <option value="{{ $key }}">{{ $country['name'] }} -
                                                        {{ $key }}</option>
                                                @endforeach
                                            </select>
                                            <label for="country">Country</label>
                                            <div class="errorMsgContainer">
                                                <span class="helpError">Select a country.</span>
                                            </div>
                                        </div>
                                        <div class="field half fieldFloating" id="cpf_cnpjContainer">
                                            <input id="cpf_cnpj" type="text" placeholder="158.611.782-32"
                                                class="input empty" required />
                                            <label for="cpf_cnpj">CPF / CNPJ</label>
                                            <div class="errorMsgContainer">
                                                <span class="helpError">Enter your CPF / CNPJ.</span>
                                            </div>
                                        </div>
                                        <div class="field fieldCheck">
                                            <label class="radiocontainer">Remember this card
                                                <input id="remember" type="checkbox" checked="checked"
                                                    name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <button onclick="submit()">Complete Payment</button>
                                        <div class="terms">
                                            <label>By completing your purchase, you agree to these
                                                <a href="#" target="_blank">Terms of Service</a>.</label>
                                        </div>
                                        <div class="secureConnection">
                                            <img alt="lock" src="{{asset('images/lock.png')}}" />
                                            <label>Secure Connection</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="error" role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                viewBox="0 0 17 17">
                                <path class="base" fill="#000"
                                    d="M8.5,17 C3.80557963,17 0,13.1944204 0,8.5 C0,3.80557963 3.80557963,0 8.5,0 C13.1944204,0 17,3.80557963 17,8.5 C17,13.1944204 13.1944204,17 8.5,17 Z">
                                </path>
                                <path class="glyph" fill="#FFF"
                                    d="M8.5,7.29791847 L6.12604076,4.92395924 C5.79409512,4.59201359 5.25590488,4.59201359 4.92395924,4.92395924 C4.59201359,5.25590488 4.59201359,5.79409512 4.92395924,6.12604076 L7.29791847,8.5 L4.92395924,10.8739592 C4.59201359,11.2059049 4.59201359,11.7440951 4.92395924,12.0760408 C5.25590488,12.4079864 5.79409512,12.4079864 6.12604076,12.0760408 L8.5,9.70208153 L10.8739592,12.0760408 C11.2059049,12.4079864 11.7440951,12.4079864 12.0760408,12.0760408 C12.4079864,11.7440951 12.4079864,11.2059049 12.0760408,10.8739592 L9.70208153,8.5 L12.0760408,6.12604076 C12.4079864,5.79409512 12.4079864,5.25590488 12.0760408,4.92395924 C11.7440951,4.59201359 11.2059049,4.59201359 10.8739592,4.92395924 L8.5,7.29791847 L8.5,7.29791847 Z">
                                </path>
                            </svg>
                            <span class="message"></span>
                        </div>
                    </div>
                    <div class="success">
                        <div class="icon">
                            <svg width="84px" height="84px" viewBox="0 0 84 84" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <circle class="border" cx="42" cy="42" r="40"
                                    stroke-linecap="round" stroke-width="4" stroke="#000" fill="none"></circle>
                                <path class="checkmark" stroke-linecap="round" stroke-linejoin="round"
                                    d="M23.375 42.5488281 36.8840688 56.0578969 64.891932 28.0500338" stroke-width="4"
                                    stroke="#000" fill="none"></path>
                            </svg>
                        </div>
                        <h3 class="title" id="example-2.success.title">Payment successful</h3>
                        <p class="message">
                            <span id="example-2.success.message">Thanks for trying Smart Fields. No money was charged,
                                but we generated a token: </span>
                            <span class="token">token</span>
                        </p>
                        <a class="reset" href="#">
                            <svg width="32px" height="32px" viewBox="0 0 32 32" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path fill="#000000"
                                    d="M15,7.05492878 C10.5000495,7.55237307 7,11.3674463 7,16 C7,20.9705627 11.0294373,25 16,25 C20.9705627,25 25,20.9705627 25,16 C25,15.3627484 24.4834055,14.8461538 23.8461538,14.8461538 C23.2089022,14.8461538 22.6923077,15.3627484 22.6923077,16 C22.6923077,19.6960595 19.6960595,22.6923077 16,22.6923077 C12.3039405,22.6923077 9.30769231,19.6960595 9.30769231,16 C9.30769231,12.3039405 12.3039405,9.30769231 16,9.30769231 L16,12.0841673 C16,12.1800431 16.0275652,12.2738974 16.0794108,12.354546 C16.2287368,12.5868311 16.5380938,12.6540826 16.7703788,12.5047565 L22.3457501,8.92058924 L22.3457501,8.92058924 C22.4060014,8.88185624 22.4572275,8.83063012 22.4959605,8.7703788 C22.6452866,8.53809377 22.5780351,8.22873685 22.3457501,8.07941076 L22.3457501,8.07941076 L16.7703788,4.49524351 C16.6897301,4.44339794 16.5958758,4.41583275 16.5,4.41583275 C16.2238576,4.41583275 16,4.63969037 16,4.91583275 L16,7 L15,7 L15,7.05492878 Z M16,32 C7.163444,32 0,24.836556 0,16 C0,7.163444 7.163444,0 16,0 C24.836556,0 32,7.163444 32,16 C32,24.836556 24.836556,32 16,32 Z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </section>
            </div>

        </main>
    </div>
    <script src="https://js-sandbox.dlocal.com"></script>
    <!-- Scripts for each example: -->
    <script src="{{ asset('js/index.js') }}"></script>
    <script src="{{ asset('js/example-2.js') }}"></script>
</body>

</html>
