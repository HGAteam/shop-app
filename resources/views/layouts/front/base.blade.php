<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="Bitconins Couses" />
  <meta name="description" content="Liftitfy - Learn on your own terms, learn from home" />
  <meta name="author" content="cubernet" />
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}" type="image/x-icon">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    @include('layouts.include._css')
</head>

<body>
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>
                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>
                    <span data-text-preloader="F" class="letters-loading">
                        F
                    </span>
                    <span data-text-preloader="T" class="letters-loading">
                        T
                    </span>
                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>
                    <span data-text-preloader="T" class="letters-loading">
                        T
                    </span>
                    <span data-text-preloader="F" class="letters-loading">
                        F
                    </span>
                    <span data-text-preloader="Y" class="letters-loading">
                        Y
                    </span>
                </div>
                <p class="text-center">{{ __('Loading')}}</p>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="body_wrapper">
        <header class="header_area">
            <nav class="navbar navbar-expand-lg menu_one support_menu">
                <div class="container">
                    <a class="navbar-brand" href="#"><img src="{{asset('img/altcoin.png')}}" srcset="{{asset('img/altcoin.png')}} 2x" alt="logo"></a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_toggle">
                            <span class="hamburger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                            <span class="hamburger-cross">
                                <span></span>
                                <span></span>
                            </span>
                        </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav pl_100 ml-auto menu">
                            <li class="nav-item {{request()->is('/')? 'active': ''}}">
                                <a href="{{route('welcome')}}" class="nav-link">{{ __('Home')}}</a>
                            </li>
                          </ul>
                    </div>
                    <div class="alter_nav">
                        <ul class="navbar-nav search_cart menu">
                            <li class="nav-item search"><a class="nav-link search-btn" href="javascript:void(0);"><i class="ti-search"></i></a></li>
                            <li class="nav-item shpping-cart dropdown submenu">
                                <a class="cart-btn nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="ti-shopping-cart"></i><span class="num">2</span></a>
                                <ul class="dropdown-menu">
                                    <li class="cart-single-item clearfix">
                                        <div class="cart-img">
                                            <img src="img/cart1.jpg" alt="styler">
                                        </div>
                                        <div class="cart-content text-left">
                                            <p class="cart-title"><a href="#">Pale pink and black buttoned dress</a></p>
                                            <p><del>$400.00</del> - $350.00</p>
                                        </div>
                                        <div class="cart-remove">
                                            <a href="#" class="action"><span class="ti-close"></span></a>
                                        </div>
                                    </li>
                                    <li class="cart-single-item clearfix">
                                        <div class="cart-img">
                                            <img src="img/cart2.jpg" alt="styler">
                                        </div>
                                        <div class="cart-content text-left">
                                            <p class="cart-title"><a href="#">Vera bradley lug- gage large duffel</a></p>
                                            <p>$350.00</p>
                                        </div>
                                        <div class="cart-remove">
                                            <a href="#" class="action"><span class="ti-close"></span></a>
                                        </div>
                                    </li>
                                    <li class="cart_f">
                                        <div class="cart-pricing">
                                            <p class="total">Subtotal :<span class="p-total text-right">$358.00</span></p>
                                        </div>
                                        <div class="cart-button text-center">
                                            <button class="btn btn-cart get_btn pink">View Cart</button>
                                            <button class="btn btn-cart get_btn dark">Checkout</button>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        @if (request()->is('/'))
        <section class="support_home_area">
            <div class="banner_top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="f_p f_size_40 l_height60 wow fadeInUp" data-wow-delay="0.3s">Learn on your own terms, learn from home <br><span class="f_700">Grab all the knowledge you need to be </span> successful </h2>
                            <p class="f_size_18 l_height30 wow fadeInUp" data-wow-delay="0.5s">CryptoCurrency Investment</p>
                        </div>
                    </div>
                    <div class="support_home_img wow fadeInUp" data-wow-delay="0.9s">
                        <img src="img/new-home/banner.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        @endif
       
        <section class="support_help_area sec_pad">
            <div class="container">
                <h2 class="f_p f_size_30 l_height50 f_600 t_color text-center wow fadeInUp mb_60">What kind of help do you need today?</h2>
                <div class="d-flex">
                    <div class="support_item">
                        <img src="img/new-home/ticket-support.png" alt="">
                        <h4>Need Help support</h4>
                        <a href="#" class="software_banner_btn btn_submit f_size_15 f_500">Start Ticketing</a>
                    </div>
                    <div class="support_item">
                        <img src="img/new-home/email.png" alt="">
                        <h4>Need Email support</h4>
                        <a href="#" class="software_banner_btn btn_submit f_size_15 f_500">GIve me a mail</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="design_tab_area sec_pad">
            <div class="container">
                <div class="sec_title text-center mb_70 wow fadeInUp" data-wow-delay="0.3s">
                    <h2 class="f_p f_size_30 l_height50 f_600 t_color3">Support in your door step</h2>
                    <p class="f_400 f_size_16 mb-0">Show off show off pick your nose and blow off Elizabeth grub haggle<br> dropped a clanger cracking.!</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 d-flex align-items-center">
                        <ul class="nav nav-tabs design_tab support_tab" role="tablist">
                            <li class="nav-item wow fadeInUp" data-wow-delay="0.4s">
                                <a class="nav-link active" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="one" aria-selected="true">
                                    <h5>Collaboration</h5>
                                    <p>Design to development,<br> automated</p>
                                </a>
                            </li>
                            <li class="nav-item wow fadeInUp" data-wow-delay="0.6s">
                                <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="two" aria-selected="false">
                                    <h5>UI/UX design</h5>
                                    <p>Design to development,<br> automated</p>
                                </a>
                            </li>
                            <li class="nav-item wow fadeInUp" data-wow-delay="0.8s">
                                <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="three" aria-selected="false">
                                    <h5>Easy to maintain</h5>
                                    <p>Design to development,<br> automated</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-8">
                        <div class="tab-content support_tab_content">
                            <div class="tab-pane fade show active" id="one" role="tabpanel" aria-labelledby="one-tab">
                                <div class="tab_img">
                                    <img src="img/new-home/tab_2.png" alt="">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="two" role="tabpanel" aria-labelledby="two-tab">
                                <div class="tab_img">
                                    <img src="img/new-home/tab.png" alt="">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="three" role="tabpanel" aria-labelledby="three-tab">
                                <div class="tab_img">
                                    <img src="img/new-home/tab_3.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="support_integration_area">
            <div class="container">
                <div class="sec_title text-center mb_70 wow fadeInUp" data-wow-delay="0.3s">
                    <h2 class="f_p f_size_30 l_height50 f_600 t_color3">Software Integrations</h2>
                    <p class="f_400 f_size_16 mb-0">Why I say old chap that is spiffing lavatory chip shop gosh off his nut, smashing boot<br> are you taking the piss posh loo brilliant matie boy.!</p>
                </div>
                <div class="row flex-row-reverse">
                    <div class="col-lg-9 col-md-10 col-sm-12">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <a href="#" class="s_integration_item">
                                    <img src="img/new-home/kissmetrics.png" alt="">
                                    <h5>KISSmetrics</h5>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <a href="#" class="s_integration_item">
                                    <img src="img/new-home/metorik.png" alt="">
                                    <h5>Metorik</h5>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <a href="#" class="s_integration_item">
                                    <img src="img/new-home/nicereply-1.png" alt="">
                                    <h5>Nicereply</h5>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <a href="#" class="s_integration_item">
                                    <img src="img/new-home/campfire.png" alt="">
                                    <h5>Campfire</h5>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <a href="#" class="s_integration_item">
                                    <img src="img/new-home/webhooks.png" alt="">
                                    <h5>Webhooks</h5>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <a href="#" class="s_integration_item">
                                    <img src="img/new-home/briteverify.png" alt="">
                                    <h5>BriteVerify</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-2 col-sm-12">
                        <img class="integration_img" src="img/new-home/tree.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="support_price_area sec_pad">
            <div class="container custom_container p0">
                <div class="sec_title text-center mb_70 wow fadeInUp" data-wow-delay="0.3s">
                    <h2 class="f_p f_size_30 l_height50 f_600 t_color3">Software Integrations</h2>
                    <p class="f_400 f_size_16 mb-0">Why I say old chap that is spiffing lavatory chip shop gosh off his nut, smashing boot<br> are you taking the piss posh loo brilliant matie boy.!</p>
                </div>
                <div class="price_content price_content_two">
                    <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="price_item">
                            <img src="img/new-home/p-1.png" alt="">
                            <h5 class="f_p f_size_20 f_600 t_color2 mt_30">Education</h5>
                            <p>Create your first online course</p>
                            <div class="price f_700 f_size_40 t_color2">$25.00<sub class="f_size_16 f_400">/ mo</sub></div>
                            <ul class="list-unstyled p_list">
                                <li><i class="ti-check"></i>Only 2 Operators</li>
                                <li><i class="ti-check"></i>Abandoned Cart</li>
                                <li><i class="ti-check"></i>Facebook & Instagram Ads</li>
                                <li><i class="ti-close"></i>Order Notifications</li>
                                <li><i class="ti-close"></i>Landing Pages</li>
                            </ul>
                            <a href="#" class="price_btn btn_hover">Start Today</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="price_item">
                            <div class="tag"><span>Popular</span></div>
                            <img src="img/new-home/p-2.png" alt="">
                            <h5 class="f_p f_size_20 f_600 t_color2 mt_30">Professional</h5>
                            <p>Our most popular plan</p>
                            <div class="price f_700 f_size_40 t_color2">$25.00<sub class="f_size_16 f_400">/ mo</sub></div>
                            <ul class="list-unstyled p_list">
                                <li><i class="ti-check"></i>Only 2 Operators</li>
                                <li><i class="ti-check"></i>Abandoned Cart</li>
                                <li><i class="ti-check"></i>Facebook & Instagram Ads</li>
                                <li><i class="ti-close"></i>Order Notifications</li>
                                <li><i class="ti-close"></i>Landing Pages</li>
                            </ul>
                            <a href="#" class="price_btn btn_hover">Start Today</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="price_item">
                            <img src="img/new-home/p-3.png" alt="">
                            <h5 class="f_p f_size_20 f_600 t_color2 mt_30">Business</h5>
                            <p>Experience thebest of lorem</p>
                            <div class="price f_700 f_size_40 t_color2">$99.00<sub class="f_size_16 f_400">/ mo</sub></div>
                            <ul class="list-unstyled p_list">
                                <li><i class="ti-check"></i>Only 2 Operators</li>
                                <li><i class="ti-check"></i>Abandoned Cart</li>
                                <li><i class="ti-check"></i>Facebook & Instagram Ads</li>
                                <li><i class="ti-close"></i>Order Notifications</li>
                                <li><i class="ti-close"></i>Landing Pages</li>
                            </ul>
                            <a href="#" class="price_btn btn_hover">Start Today</a>
                        </div>
                    </div>
                    </div> 
                </div>
            </div>
        </section>
        <section class="agency_testimonial_area sec_pad">
            <div class="container">
                <h2 class="f_size_30 f_600 t_color3 l_height40 text-center mb_60 wow fadeInUp" data-wow-delay="0.1s">We've heard things like</h2>
                <div class="agency_testimonial_info support_testimonial_info">
                    <div class="testimonial_slider owl-carousel">
                        <div class="testimonial_item text-center left">
                            <div class="author_img"><img src="img/home4/author_img.png" alt=""></div>
                            <div class="author_description">
                                <h4 class="f_500 t_color3 f_size_18">Lurch Schpellchek</h4>
                                <h6>UI/UX designer</h6>
                            </div>
                            <p>What a load of rubbish bits and bobs pear shaped owt to do with me bubble and squeak jolly good morish tinkety tonk old fruit, car boot my good sir buggered plastered cheeky David, haggle young delinquent say so I said bite your arm off easy peasy. Skive off it's all gone to pot buggered.</p>
                        </div>
                        <div class="testimonial_item text-center center">
                            <div class="author_img"><img src="img/home4/author_img.png" alt=""></div>
                            <div class="author_description">
                                <h4 class="f_500 t_color3 f_size_18">Lurch Schpellchek</h4>
                                <h6>UI/UX designer</h6>
                            </div>
                            <p>What a load of rubbish bits and bobs pear shaped owt to do with me bubble and squeak jolly good morish tinkety tonk old fruit, car boot my good sir buggered plastered cheeky David, haggle young delinquent say so I said bite your arm off easy peasy. Skive off it's all gone to pot buggered.</p>
                        </div>
                        <div class="testimonial_item text-center right">
                            <div class="author_img"><img src="img/home4/author_img.png" alt=""></div>
                            <div class="author_description">
                                <h4 class="f_500 t_color3 f_size_18">Lurch Schpellchek</h4>
                                <h6>UI/UX designer</h6>
                            </div>
                            <p>What a load of rubbish bits and bobs pear shaped owt to do with me bubble and squeak jolly good morish tinkety tonk old fruit, car boot my good sir buggered plastered cheeky David, haggle young delinquent say so I said bite your arm off easy peasy. Skive off it's all gone to pot buggered.</p>
                        </div>
                        <div class="testimonial_item text-center">
                            <div class="author_img"><img src="img/home4/author_img.png" alt=""></div>
                            <div class="author_description">
                                <h4 class="f_500 t_color3 f_size_18">Lurch Schpellchek</h4>
                                <h6>UI/UX designer</h6>
                            </div>
                            <p>What a load of rubbish bits and bobs pear shaped owt to do with me bubble and squeak jolly good morish tinkety tonk old fruit, car boot my good sir buggered plastered cheeky David, haggle young delinquent say so I said bite your arm off easy peasy. Skive off it's all gone to pot buggered.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      
        @yield('content')

        @include('layouts.include._footer')
    </div>
    <form class="search_boxs" role="search">
        <div class="search_box_inner">
            <div class="close_icon">
                <i class="icon_close"></i>
            </div>
            <div class="input-group">
                <input type="text" name="search" class="form_control search-input" placeholder="Recipient's username" autofocus>
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button"><i class="icon_search"></i></button>
                </div>
            </div>
        </div>
    </form>
  @include('layouts.include._scripts')
</body>
</html>