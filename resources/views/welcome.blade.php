@extends('layouts.themes.default.app')

@section('content')
    <!-- begin::Main Slider Start -->
    <div class="ec-main-slider section section-space-mb">
        <div class="ec-slider">
            <div class="ec-slide-item d-flex slide-1">
                <img src="{{ asset('assets/images/main-slider-banner/arrow-26.png') }}" class="main_banner_arrow_img"
                    alt="" />
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                            <div class="ec-slide-content slider-animation">
                                <h2 class="ec-slide-stitle">Power Backup</h2>
                                <h1 class="ec-slide-title">12V Electric Drill Machine</h1>
                                <p>Introducing Drill Series 4. Fundamentally redesigned and re-engineered to help
                                    you stay even more active & accurate.</p>
                                <span class="ec-slide-disc">Starting @<span>$150</span></span>
                                <a href="#" class="btn btn-lg btn-secondary">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ec-slide-item d-flex slide-2">
                <img src="{{ asset('assets/images/main-slider-banner/arrow-27.png') }}" class="main_banner_arrow_img"
                    alt="" />
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                            <div class="ec-slide-content slider-animation">
                                <h2 class="ec-slide-stitle">Accuracy 100%</h2>
                                <h1 class="ec-slide-title">Ceramic tiles cutter</h1>
                                <p>Introducing tiles cutter vss4 model. Fundamentally redesigned and re-engineered to help
                                    you stay even more active.</p>
                                <span class="ec-slide-disc">Starting @<span>$654</span></span>
                                <a href="#" class="btn btn-lg btn-secondary">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ec-slide-item d-flex slide-3">
                <img src="{{ asset('assets/images/main-slider-banner/arrow-28.png') }}" class="main_banner_arrow_img"
                    alt="" />
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                            <div class="ec-slide-content slider-animation">
                                <h2 class="ec-slide-stitle">Smooth </h2>
                                <h1 class="ec-slide-title">grinder machine</h1>
                                <p>Introducing grinder machine bs. Fundamentally redesigned and re-engineered to help
                                    you stay even more active, healthy, and connected.</p>
                                <span class="ec-slide-disc">Starting @<span>$150</span></span>
                                <a href="#" class="btn btn-lg btn-secondary">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end::Main Slider End -->

    <!-- begin::Trending Item Start -->
    <section class="section ec-trend-product section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title-block">
                    <div class="section-title">
                        <h2 class="ec-title">{{ __('Ofertas') }}</h2>
                        <p class="sub-title">{{ __('Visitá la sección de ofertas y encontrá lo que buscas') }}.</p>
                    </div>
                    <div class="section-btn">
                        <span class="ec-section-btn">
                            <a class="btn-secondary" href="#">
                                {{ __('Ver todos') }}(0)
                            </a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ec-trend-slider">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="#" class="image">
                                        <img class="main-image" src="{{ asset('assets/images/product-image/137_2.jpg') }}"
                                            alt="Product" />
                                        <img class="hover-image" src="{{ asset('assets/images/product-image/137_1.jpg') }}"
                                            alt="Product" />
                                    </a>
                                    <div class="ec-pro-actions">
                                        <button title="Add To Cart" class=" add-to-cart">
                                            <i class="fi-rr-shopping-basket"></i>
                                        </button>
                                        <a href="#" class="ec-btn-group compare" title="Compare">
                                            <i class="fi fi-rr-arrows-repeat"></i>
                                        </a>
                                        <a href="#" class="ec-btn-group quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal">
                                            <i class="fi-rr-eye"></i>
                                        </a>
                                        <a class="ec-btn-group wishlist" title="Wishlist">
                                            <i class="fi-rr-heart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="#">Vice tool for wooden work</a>
                                </h5>
                                <span class="ec-price">
                                    <span class="old-price">$450</span>
                                    <span class="new-price">$370</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="#" class="image">
                                        <img class="main-image" src="{{ asset('assets/images/product-image/130_2.jpg') }}"
                                            alt="Product" />
                                        <img class="hover-image" src="{{ asset('assets/images/product-image/130_1.jpg') }}"
                                            alt="Product" />
                                    </a>
                                    <span class="flags">
                                        <span class="sale">Top Seller</span>
                                    </span>
                                    <div class="ec-pro-actions">
                                        <button title="Add To Cart" class=" add-to-cart">
                                            <i class="fi-rr-shopping-basket"></i>
                                        </button>
                                        <a href="#" class="ec-btn-group compare" title="Compare">
                                            <i class="fi fi-rr-arrows-repeat"></i>
                                        </a>
                                        <a href="#" class="ec-btn-group quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#ec_quickview_modal">
                                            <i class="fi-rr-eye"></i>
                                        </a>
                                        <a class="ec-btn-group wishlist" title="Wishlist">
                                            <i class="fi-rr-heart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="#">Breaker machine smart
                                        tech</a>
                                </h5>
                                <span class="ec-price">
                                    <span class="old-price">$999</span>
                                    <span class="new-price">$799</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="#" class="image">
                                        <img class="main-image"
                                            src="{{ asset('assets/images/product-image/128_2.jpg') }}" alt="Product" />
                                        <img class="hover-image"
                                            src="{{ asset('assets/images/product-image/128_1.jpg') }}" alt="Product" />
                                    </a>
                                    <div class="ec-pro-actions">
                                        <button title="Add To Cart" class=" add-to-cart">
                                            <i class="fi-rr-shopping-basket"></i>
                                        </button>
                                        <a href="#" class="ec-btn-group compare" title="Compare">
                                            <i class="fi fi-rr-arrows-repeat"></i>
                                        </a>
                                        <a href="#" class="ec-btn-group quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#ec_quickview_modal">
                                            <i class="fi-rr-eye"></i>
                                        </a>
                                        <a class="ec-btn-group wishlist" title="Wishlist">
                                            <i class="fi-rr-heart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="#">Single drilling machine
                                        vss1</a></h5>
                                <span class="ec-price">
                                    <span class="old-price">$1549</span>
                                    <span class="new-price">$1400</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="#" class="image">
                                        <img class="main-image"
                                            src="{{ asset('assets/images/product-image/129_2.jpg') }}" alt="Product" />
                                        <img class="hover-image"
                                            src="{{ asset('assets/images/product-image/129_1.jpg') }}" alt="Product" />
                                    </a>
                                    <div class="ec-pro-actions">
                                        <button title="Add To Cart" class=" add-to-cart">
                                            <i class="fi-rr-shopping-basket"></i>
                                        </button>
                                        <a href="#" class="ec-btn-group compare" title="Compare">
                                            <i class="fi fi-rr-arrows-repeat"></i>
                                        </a>
                                        <a href="#" class="ec-btn-group quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#ec_quickview_modal">
                                            <i class="fi-rr-eye"></i>
                                        </a>
                                        <a class="ec-btn-group wishlist" title="Wishlist">
                                            <i class="fi-rr-heart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="#">Grinder machine striker
                                        s1</a>
                                </h5>
                                <span class="ec-price">
                                    <span class="old-price">$120</span>
                                    <span class="new-price">$80</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="#" class="image">
                                        <img class="main-image"
                                            src="{{ asset('assets/images/product-image/131_2.jpg') }}" alt="Product" />
                                        <img class="hover-image"
                                            src="{{ asset('assets/images/product-image/131_1.jpg') }}" alt="Product" />
                                    </a>
                                    <span class="flags">
                                        <span class="stock">Out of stock</span>
                                    </span>
                                    <div class="ec-pro-actions">
                                        <button title="Add To Cart" class=" add-to-cart">
                                            <i class="fi-rr-shopping-basket"></i>
                                        </button>
                                        <a href="#" class="ec-btn-group compare" title="Compare">
                                            <i class="fi fi-rr-arrows-repeat"></i>
                                        </a>
                                        <a href="#" class="ec-btn-group quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#ec_quickview_modal">
                                            <i class="fi-rr-eye"></i>
                                        </a>
                                        <a class="ec-btn-group wishlist" title="Wishlist">
                                            <i class="fi-rr-heart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="#">Ceramic tiles cutter</a>
                                </h5>
                                <span class="ec-price">
                                    <span class="old-price">$450</span>
                                    <span class="new-price">$400</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="#" class="image">
                                        <img class="main-image"
                                            src="{{ asset('assets/images/product-image/136_1.jpg') }}" alt="Product" />
                                        <img class="hover-image"
                                            src="{{ asset('assets/images/product-image/136_1.jpg') }}" alt="Product" />
                                    </a>
                                    <div class="ec-pro-actions">
                                        <button title="Add To Cart" class=" add-to-cart">
                                            <i class="fi-rr-shopping-basket"></i>
                                        </button>
                                        <a href="#" class="ec-btn-group compare" title="Compare">
                                            <i class="fi fi-rr-arrows-repeat"></i>
                                        </a>
                                        <a href="#" class="ec-btn-group quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#ec_quickview_modal">
                                            <i class="fi-rr-eye"></i>
                                        </a>
                                        <a class="ec-btn-group wishlist" title="Wishlist">
                                            <i class="fi-rr-heart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="#">Messoring tap tools</a></h5>
                                <span class="ec-price">
                                    <span class="old-price">$12</span>
                                    <span class="new-price">$10</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="#" class="image">
                                        <img class="main-image"
                                            src="{{ asset('assets/images/product-image/138_2.jpg') }}" alt="Product" />
                                        <img class="hover-image"
                                            src="{{ asset('assets/images/product-image/138_1.jpg') }}" alt="Product" />
                                    </a>
                                    <span class="flags">
                                        <span class="sale">Top Seller</span>
                                    </span>
                                    <div class="ec-pro-actions">
                                        <button title="Add To Cart" class=" add-to-cart">
                                            <i class="fi-rr-shopping-basket"></i>
                                        </button>
                                        <a href="#" class="ec-btn-group compare" title="Compare">
                                            <i class="fi fi-rr-arrows-repeat"></i>
                                        </a>
                                        <a href="#" class="ec-btn-group quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#ec_quickview_modal">
                                            <i class="fi-rr-eye"></i>
                                        </a>
                                        <a class="ec-btn-group wishlist" title="Wishlist">
                                            <i class="fi-rr-heart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="#">Screwdrivers Set</a>
                                </h5>
                                <span class="ec-price">
                                    <span class="old-price">$230</span>
                                    <span class="new-price">$180</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="#" class="image">
                                        <img class="main-image"
                                            src="{{ asset('assets/images/product-image/139_2.jpg') }}" alt="Product" />
                                        <img class="hover-image"
                                            src="{{ asset('assets/images/product-image/139_1.jpg') }}" alt="Product" />
                                    </a>
                                    <span class="flags">
                                        <span class="stock">Out of stock</span>
                                    </span>
                                    <div class="ec-pro-actions">
                                        <button title="Add To Cart" class=" add-to-cart">
                                            <i class="fi-rr-shopping-basket"></i>
                                        </button>
                                        <a href="#" class="ec-btn-group compare" title="Compare">
                                            <i class="fi fi-rr-arrows-repeat"></i>
                                        </a>
                                        <a href="#" class="ec-btn-group quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#ec_quickview_modal">
                                            <i class="fi-rr-eye"></i>
                                        </a>
                                        <a class="ec-btn-group wishlist" title="Wishlist">
                                            <i class="fi-rr-heart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="#">Spanner hand tool vss</a>
                                </h5>
                                <span class="ec-price">
                                    <span class="old-price">$68</span>
                                    <span class="new-price">$55</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end::Trending Item end -->

    <!-- ec Banner Section Start -->
    <section class="ec-banner section section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title-block">
                    <div class="section-title">
                        <h2 class="ec-title">{{ __('Descubrí productos especiales') }}</h2>
                        <p class="sub-title">{{ __('Ingresá y descubrí productos especiales con descuentos') }}.</p>
                    </div>
                    <div class="section-btn">
                        <span class="ec-section-btn">
                            <a class="btn-secondary" href="#">
                                {{ __('Ver todos') }}(0)
                            </a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="ec-banners">
                <div class="ec-banner-left col-sm-6">
                    <div class="ec-banner-block ec-banner-block-1 col-sm-12">
                        <div class="banner-block">
                            <img src="{{ asset('assets/images/banner/28.jpg') }}" alt="" />
                            <div class="banner-content">
                                <div class="banner-text">
                                    <span class="ec-banner-stitle">20% Off ! Limited week deal</span>
                                    <span class="ec-banner-title">tools box</span>
                                    <p>Lorem ipsum, or lipsum as it <br>is sometimes known, is dummy <br>since 1991.</p>
                                </div>
                                <span class="ec-banner-btn"><a href="shop-left-sidebar-col-3.html"
                                        class="btn-primary">Discover Now</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ec-banner-left col-sm-6">
                    <div class="ec-banner-block ec-banner-block-1 col-sm-12">
                        <div class="banner-block">
                            <img src="{{ asset('assets/images/banner/28.jpg') }}" alt="" />
                            <div class="banner-content">
                                <div class="banner-text">
                                    <span class="ec-banner-stitle">20% Off ! Limited week deal</span>
                                    <span class="ec-banner-title">tools box</span>
                                    <p>Lorem ipsum, or lipsum as it <br>is sometimes known, is dummy <br>since 1991.</p>
                                </div>
                                <span class="ec-banner-btn"><a href="shop-left-sidebar-col-3.html"
                                        class="btn-primary">Discover Now</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ec Banner Section End -->

    <!--  Top Vendor Section Start -->
    <section class="section ec-trend-product section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title-block">
                    <div class="section-title">
                        <h2 class="ec-title">{{ __('Tiendas Oficiales') }}</h2>
                        <p class="sub-title">{{ __('Visitá las tiendas con más reputación') }}.</p>
                    </div>
                    <div class="section-btn">
                        <span class="ec-section-btn">
                            <a class="btn-secondary" href="#">
                                {{ __('Ver todos') }}(0)
                            </a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ec-trend-slider">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                        <div class="ec-vendor-card">
                            <div class="ec-vendor-detail">
                                <div class="ec-vendor-avtar">
                                    <img src="{{ asset('assets/images/vendor/2.jpg') }}" alt="vendor img">
                                </div>
                                <div class="ec-vendor-info">
                                    <a href="#" class="name">Marvelus</a>
                                    <p class="prod-count">154 Products</p>
                                    <div class="ec-pro-rating">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star"></i>
                                    </div>
                                    <div class="ec-sale">
                                        <p title="Weekly sales">Sales 954</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-vendor-prod">
                                <div class="ec-prod-img">
                                    <a href="product-left-sidebar.html"><img
                                            src="{{ asset('assets/images/product-image/1_1.jpg') }}"
                                            alt="vendor img"></a>
                                </div>
                                <div class="ec-prod-img">
                                    <a href="product-left-sidebar.html"><img
                                            src="{{ asset('assets/images/product-image/2_1.jpg') }}"
                                            alt="vendor img"></a>
                                </div>
                                <div class="ec-prod-img">
                                    <a href="product-left-sidebar.html"><img
                                            src="{{ asset('assets/images/product-image/3_1.jpg') }}"
                                            alt="vendor img"></a>
                                </div>
                                <div class="ec-prod-img">
                                    <a href="product-left-sidebar.html"><img
                                            src="{{ asset('assets/images/product-image/4_1.jpg') }}"
                                            alt="vendor img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                        <div class="ec-vendor-card">
                            <div class="ec-vendor-detail">
                                <div class="ec-vendor-avtar">
                                    <img src="{{ asset('assets/images/vendor/2.jpg') }}" alt="vendor img">
                                </div>
                                <div class="ec-vendor-info">
                                    <a href="#" class="name">Marvelus</a>
                                    <p class="prod-count">154 Products</p>
                                    <div class="ec-pro-rating">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star"></i>
                                    </div>
                                    <div class="ec-sale">
                                        <p title="Weekly sales">Sales 954</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-vendor-prod">
                                <div class="ec-prod-img">
                                    <a href="product-left-sidebar.html"><img
                                            src="{{ asset('assets/images/product-image/1_1.jpg') }}"
                                            alt="vendor img"></a>
                                </div>
                                <div class="ec-prod-img">
                                    <a href="product-left-sidebar.html"><img
                                            src="{{ asset('assets/images/product-image/2_1.jpg') }}"
                                            alt="vendor img"></a>
                                </div>
                                <div class="ec-prod-img">
                                    <a href="product-left-sidebar.html"><img
                                            src="{{ asset('assets/images/product-image/3_1.jpg') }}"
                                            alt="vendor img"></a>
                                </div>
                                <div class="ec-prod-img">
                                    <a href="product-left-sidebar.html"><img
                                            src="{{ asset('assets/images/product-image/4_1.jpg') }}"
                                            alt="vendor img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                        <div class="ec-vendor-card">
                            <div class="ec-vendor-detail">
                                <div class="ec-vendor-avtar">
                                    <img src="{{ asset('assets/images/vendor/2.jpg') }}" alt="vendor img">
                                </div>
                                <div class="ec-vendor-info">
                                    <a href="#" class="name">Marvelus</a>
                                    <p class="prod-count">154 Products</p>
                                    <div class="ec-pro-rating">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star"></i>
                                    </div>
                                    <div class="ec-sale">
                                        <p title="Weekly sales">Sales 954</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-vendor-prod">
                                <div class="ec-prod-img">
                                    <a href="product-left-sidebar.html"><img
                                            src="{{ asset('assets/images/product-image/1_1.jpg') }}"
                                            alt="vendor img"></a>
                                </div>
                                <div class="ec-prod-img">
                                    <a href="product-left-sidebar.html"><img
                                            src="{{ asset('assets/images/product-image/2_1.jpg') }}"
                                            alt="vendor img"></a>
                                </div>
                                <div class="ec-prod-img">
                                    <a href="product-left-sidebar.html"><img
                                            src="{{ asset('assets/images/product-image/3_1.jpg') }}"
                                            alt="vendor img"></a>
                                </div>
                                <div class="ec-prod-img">
                                    <a href="product-left-sidebar.html"><img
                                            src="{{ asset('assets/images/product-image/4_1.jpg') }}"
                                            alt="vendor img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                        <div class="ec-vendor-card">
                            <div class="ec-vendor-detail">
                                <div class="ec-vendor-avtar">
                                    <img src="{{ asset('assets/images/vendor/2.jpg') }}" alt="vendor img">
                                </div>
                                <div class="ec-vendor-info">
                                    <a href="#" class="name">Marvelus</a>
                                    <p class="prod-count">154 Products</p>
                                    <div class="ec-pro-rating">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star"></i>
                                    </div>
                                    <div class="ec-sale">
                                        <p title="Weekly sales">Sales 954</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-vendor-prod">
                                <div class="ec-prod-img">
                                    <a href="product-left-sidebar.html"><img
                                            src="{{ asset('assets/images/product-image/1_1.jpg') }}"
                                            alt="vendor img"></a>
                                </div>
                                <div class="ec-prod-img">
                                    <a href="product-left-sidebar.html"><img
                                            src="{{ asset('assets/images/product-image/2_1.jpg') }}"
                                            alt="vendor img"></a>
                                </div>
                                <div class="ec-prod-img">
                                    <a href="product-left-sidebar.html"><img
                                            src="{{ asset('assets/images/product-image/3_1.jpg') }}"
                                            alt="vendor img"></a>
                                </div>
                                <div class="ec-prod-img">
                                    <a href="product-left-sidebar.html"><img
                                            src="{{ asset('assets/images/product-image/4_1.jpg') }}"
                                            alt="vendor img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Top Vendor Section End -->

    <!-- Product tab Area Start -->
    <section class="section ec-product-tab section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title-block">
                    <div class="section-title">
                        <h2 class="ec-title">{{ __('Productos exclusivos') }}</h2>
                        <p class="sub-title"> <a class="nav-link px-0" href="#">{{ __('Ver todos') }}</a>
                        </p>
                    </div>
                    <div class="section-btn">

                    </div>
                    <div class="section-btn">
                        <ul class="ec-pro-tab-nav nav">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab"
                                    href="#tab-pro-new-arrivals">{{ __('Recién llegados') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab"
                                    href="#tab-pro-special-offer">{{ __('Ofertas especiales') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab"
                                    href="#tab-pro-best-sellers">{{ __('Más vendidos') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <div class="tab-content">
                        <!-- 1st Product tab start -->
                        <div class="tab-pane fade show active" id="tab-pro-new-arrivals">
                            <div class="row">
                                <div class="ec-pro-tab-slider">
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{ asset('assets/images/product-image/128_1.jpg') }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ asset('assets/images/product-image/128_2.jpg') }}"
                                                            alt="Product" />
                                                    </a>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><i
                                                                class="fi-rr-shopping-basket"></i></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i
                                                                class="fi-rr-eye"></i></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                                class="fi-rr-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Single
                                                        drilling machine vss1</a></h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$1549</span>
                                                    <span class="new-price">$1400</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{ asset('assets/images/product-image/129_1.jpg') }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ asset('assets/images/product-image/129_2.jpg') }}"
                                                            alt="Product" />
                                                    </a>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><i
                                                                class="fi-rr-shopping-basket"></i></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i
                                                                class="fi-rr-eye"></i></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                                class="fi-rr-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Grinder
                                                        machine striker s1</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$120</span>
                                                    <span class="new-price">$80</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{ asset('assets/images/product-image/130_1.jpg') }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ asset('assets/images/product-image/130_2.jpg') }}"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="sale">Top Seller</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><i
                                                                class="fi-rr-shopping-basket"></i></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i
                                                                class="fi-rr-eye"></i></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                                class="fi-rr-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Breaker
                                                        machine smart tech</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$999</span>
                                                    <span class="new-price">$799</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{ asset('assets/images/product-image/131_1.jpg') }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ asset('assets/images/product-image/131_2.jpg') }}"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="stock">Out of stock</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><i
                                                                class="fi-rr-shopping-basket"></i></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i
                                                                class="fi-rr-eye"></i></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                                class="fi-rr-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Ceramic tiles
                                                        cutter</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$450</span>
                                                    <span class="new-price">$400</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{ asset('assets/images/product-image/132_1.jpg') }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ asset('assets/images/product-image/132_2.jpg') }}"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="percentage">-15%</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><i
                                                                class="fi-rr-shopping-basket"></i></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i
                                                                class="fi-rr-eye"></i></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                                class="fi-rr-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Small
                                                        chainsaw for wood cutting</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$3950</span>
                                                    <span class="new-price">$3500</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{ asset('assets/images/product-image/133_1.jpg') }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ asset('assets/images/product-image/133_1.jpg') }}"
                                                            alt="Product" />
                                                    </a>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><i
                                                                class="fi-rr-shopping-basket"></i></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i
                                                                class="fi-rr-eye"></i></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                                class="fi-rr-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Stainless
                                                        steel Hammer</a></h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$25</span>
                                                    <span class="new-price">$20</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{ asset('assets/images/product-image/134_1.jpg') }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ asset('assets/images/product-image/134_2.jpg') }}"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="percentage">-35%</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><i
                                                                class="fi-rr-shopping-basket"></i></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i
                                                                class="fi-rr-eye"></i></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                                class="fi-rr-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Nail machine
                                                        C35 stricker</a></h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$500</span>
                                                    <span class="new-price">$390</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{ asset('assets/images/product-image/135_1.jpg') }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ asset('assets/images/product-image/135_2.jpg') }}"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="percentage">-25%</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><i
                                                                class="fi-rr-shopping-basket"></i></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i
                                                                class="fi-rr-eye"></i></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                                class="fi-rr-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Pliers hand
                                                        tool ssv</a></h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$45</span>
                                                    <span class="new-price">$40</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{ asset('assets/images/product-image/136_1.jpg') }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ asset('assets/images/product-image/136_1.jpg') }}"
                                                            alt="Product" />
                                                    </a>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><i
                                                                class="fi-rr-shopping-basket"></i></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i
                                                                class="fi-rr-eye"></i></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                                class="fi-rr-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Messoring tap
                                                        tools</a></h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$12</span>
                                                    <span class="new-price">$10</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{ asset('assets/images/product-image/137_1.jpg') }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ asset('assets/images/product-image/137_2.jpg') }}"
                                                            alt="Product" />
                                                    </a>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><i
                                                                class="fi-rr-shopping-basket"></i></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i
                                                                class="fi-rr-eye"></i></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                                class="fi-rr-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Vice tool for
                                                        wooden work</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$450</span>
                                                    <span class="new-price">$370</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{ asset('assets/images/product-image/138_1.jpg') }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ asset('assets/images/product-image/138_2.jpg') }}"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="sale">Top Seller</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><i
                                                                class="fi-rr-shopping-basket"></i></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i
                                                                class="fi-rr-eye"></i></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                                class="fi-rr-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Screwdrivers
                                                        Set</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$230</span>
                                                    <span class="new-price">$180</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{ asset('assets/images/product-image/139_1.jpg') }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ asset('assets/images/product-image/139_2.jpg') }}"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="stock">Out of stock</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><i
                                                                class="fi-rr-shopping-basket"></i></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><i
                                                                class="fi-rr-eye"></i></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                                class="fi-rr-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Spanner
                                                        hand tool vss</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$68</span>
                                                    <span class="new-price">$55</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ec 1st Product tab end -->
                        <!-- ec 2nd Product tab start -->
                        <div class="tab-pane fade" id="tab-pro-special-offer">
                            <div class="row">
                                <div class="ec-pro-tab-slider">
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{ asset('assets/images/product-image/132_2.jpg') }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ asset('assets/images/product-image/132_1.jpg') }}"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="percentage">-15%</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><i
                                                                class="fi-rr-shopping-basket"></i></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><i
                                                                class="fi-rr-eye"></i></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                                class="fi-rr-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Small
                                                        chainsaw for wood cutting</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$3950</span>
                                                    <span class="new-price">$3500</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{ asset('assets/images/product-image/133_1.jpg') }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ asset('assets/images/product-image/133_1.jpg') }}"
                                                            alt="Product" />
                                                    </a>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><i
                                                                class="fi-rr-shopping-basket"></i></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><i
                                                                class="fi-rr-eye"></i></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                                class="fi-rr-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Stainless
                                                        steel Hammer</a></h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$25</span>
                                                    <span class="new-price">$20</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{ asset('assets/images/product-image/134_2.jpg') }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ asset('assets/images/product-image/134_1.jpg') }}"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="percentage">-35%</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><i
                                                                class="fi-rr-shopping-basket"></i></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><i
                                                                class="fi-rr-eye"></i></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                                class="fi-rr-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Nail
                                                        machine C35 stricker</a></h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$500</span>
                                                    <span class="new-price">$390</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{ asset('assets/images/product-image/135_2.jpg') }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ asset('assets/images/product-image/135_1.jpg') }}"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="percentage">-25%</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><i
                                                                class="fi-rr-shopping-basket"></i></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><i
                                                                class="fi-rr-eye"></i></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                                class="fi-rr-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Pliers hand
                                                        tool ssv</a></h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$45</span>
                                                    <span class="new-price">$40</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{ asset('assets/images/product-image/136_1.jpg') }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ asset('assets/images/product-image/136_1.jpg') }}"
                                                            alt="Product" />
                                                    </a>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><i
                                                                class="fi-rr-shopping-basket"></i></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><i
                                                                class="fi-rr-eye"></i></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                                class="fi-rr-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Messoring
                                                        tap tools</a></h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$12</span>
                                                    <span class="new-price">$10</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{ asset('assets/images/product-image/137_2.jpg') }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ asset('assets/images/product-image/137_1.jpg') }}"
                                                            alt="Product" />
                                                    </a>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><i
                                                                class="fi-rr-shopping-basket"></i></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><i
                                                                class="fi-rr-eye"></i></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                                class="fi-rr-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Vice tool
                                                        for wooden work</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$450</span>
                                                    <span class="new-price">$370</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{ asset('assets/images/product-image/138_2.jpg') }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ asset('assets/images/product-image/138_1.jpg') }}"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="sale">Top Seller</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><i
                                                                class="fi-rr-shopping-basket"></i></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><i
                                                                class="fi-rr-eye"></i></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                                class="fi-rr-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a
                                                        href="product-left-sidebar.html">Screwdrivers Set</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$230</span>
                                                    <span class="new-price">$180</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{ asset('assets/images/product-image/139_2.jpg') }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ asset('assets/images/product-image/139_1.jpg') }}"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="stock">Out of stock</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><i
                                                                class="fi-rr-shopping-basket"></i></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><i
                                                                class="fi-rr-eye"></i></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                                class="fi-rr-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Spanner
                                                        hand tool vss</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$68</span>
                                                    <span class="new-price">$55</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{ asset('assets/images/product-image/128_2.jpg') }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ asset('assets/images/product-image/128_1.jpg') }}"
                                                            alt="Product" />
                                                    </a>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><i
                                                                class="fi-rr-shopping-basket"></i></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><i
                                                                class="fi-rr-eye"></i></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                                class="fi-rr-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Single
                                                        drilling machine vss1</a></h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$1549</span>
                                                    <span class="new-price">$1400</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{ asset('assets/images/product-image/129_2.jpg') }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ asset('assets/images/product-image/129_1.jpg') }}"
                                                            alt="Product" />
                                                    </a>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><i
                                                                class="fi-rr-shopping-basket"></i></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><i
                                                                class="fi-rr-eye"></i></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                                class="fi-rr-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Grinder
                                                        machine striker s1</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$120</span>
                                                    <span class="new-price">$80</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{ asset('assets/images/product-image/130_2.jpg') }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ asset('assets/images/product-image/130_1.jpg') }}"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="sale">Top Seller</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><i
                                                                class="fi-rr-shopping-basket"></i></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><i
                                                                class="fi-rr-eye"></i></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                                class="fi-rr-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Breaker
                                                        machine smart tech</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$999</span>
                                                    <span class="new-price">$799</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{ asset('assets/images/product-image/131_2.jpg') }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ asset('assets/images/product-image/131_1.jpg') }}"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="stock">Out of stock</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><i
                                                                class="fi-rr-shopping-basket"></i></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><i
                                                                class="fi-rr-eye"></i></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                                class="fi-rr-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Ceramic
                                                        tiles cutter</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$450</span>
                                                    <span class="new-price">$400</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ec 2nd Product tab end -->
                        <!-- ec 3rd Product tab start -->
                        <div class="tab-pane fade" id="tab-pro-best-sellers">
                            <div class="row">
                                <div class="ec-pro-tab-slider">
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{ asset('assets/images/product-image/138_1.jpg') }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ asset('assets/images/product-image/138_2.jpg') }}"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="sale">Top Seller</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><i
                                                                class="fi-rr-shopping-basket"></i></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><i
                                                                class="fi-rr-eye"></i></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                                class="fi-rr-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a
                                                        href="product-left-sidebar.html">Screwdrivers Set</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$230</span>
                                                    <span class="new-price">$180</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{ asset('assets/images/product-image/139_1.jpg') }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ asset('assets/images/product-image/139_2.jpg') }}"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="stock">Out of stock</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><i
                                                                class="fi-rr-shopping-basket"></i></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><i
                                                                class="fi-rr-eye"></i></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                                class="fi-rr-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Spanner
                                                        hand tool vss</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$68</span>
                                                    <span class="new-price">$55</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{ asset('assets/images/product-image/128_1.jpg') }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ asset('assets/images/product-image/128_2.jpg') }}"
                                                            alt="Product" />
                                                    </a>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><i
                                                                class="fi-rr-shopping-basket"></i></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><i
                                                                class="fi-rr-eye"></i></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                                class="fi-rr-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Single
                                                        drilling machine vss1</a></h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$1549</span>
                                                    <span class="new-price">$1400</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{ asset('assets/images/product-image/129_1.jpg') }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ asset('assets/images/product-image/129_2.jpg') }}"
                                                            alt="Product" />
                                                    </a>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><i
                                                                class="fi-rr-shopping-basket"></i></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><i
                                                                class="fi-rr-eye"></i></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                                class="fi-rr-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Grinder
                                                        machine striker s1</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$120</span>
                                                    <span class="new-price">$80</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{ asset('assets/images/product-image/136_1.jpg') }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ asset('assets/images/product-image/136_1.jpg') }}"
                                                            alt="Product" />
                                                    </a>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><i
                                                                class="fi-rr-shopping-basket"></i></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><i
                                                                class="fi-rr-eye"></i></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                                class="fi-rr-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Messoring
                                                        tap tools</a></h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$12</span>
                                                    <span class="new-price">$10</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{ asset('assets/images/product-image/137_1.jpg') }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ asset('assets/images/product-image/137_2.jpg') }}"
                                                            alt="Product" />
                                                    </a>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><i
                                                                class="fi-rr-shopping-basket"></i></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><i
                                                                class="fi-rr-eye"></i></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                                class="fi-rr-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Vice tool
                                                        for wooden work</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$450</span>
                                                    <span class="new-price">$370</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{ asset('assets/images/product-image/134_1.jpg') }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ asset('assets/images/product-image/134_2.jpg') }}"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="percentage">-35%</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><i
                                                                class="fi-rr-shopping-basket"></i></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><i
                                                                class="fi-rr-eye"></i></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                                class="fi-rr-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Nail
                                                        machine C35 stricker</a></h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$500</span>
                                                    <span class="new-price">$390</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{ asset('assets/images/product-image/135_1.jpg') }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ asset('assets/images/product-image/135_2.jpg') }}"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="percentage">-25%</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><i
                                                                class="fi-rr-shopping-basket"></i></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><i
                                                                class="fi-rr-eye"></i></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                                class="fi-rr-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Pliers hand
                                                        tool ssv</a></h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$45</span>
                                                    <span class="new-price">$40</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{ asset('assets/images/product-image/130_1.jpg') }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ asset('assets/images/product-image/130_2.jpg') }}"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="sale">Top Seller</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><i
                                                                class="fi-rr-shopping-basket"></i></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><i
                                                                class="fi-rr-eye"></i></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                                class="fi-rr-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Breaker
                                                        machine smart tech</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$999</span>
                                                    <span class="new-price">$799</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{ asset('assets/images/product-image/131_1.jpg') }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ asset('assets/images/product-image/131_2.jpg') }}"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="stock">Out of stock</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><i
                                                                class="fi-rr-shopping-basket"></i></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><i
                                                                class="fi-rr-eye"></i></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                                class="fi-rr-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Ceramic
                                                        tiles cutter</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$450</span>
                                                    <span class="new-price">$400</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{ asset('assets/images/product-image/132_1.jpg') }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ asset('assets/images/product-image/132_2.jpg') }}"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="percentage">-15%</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><i
                                                                class="fi-rr-shopping-basket"></i></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><i
                                                                class="fi-rr-eye"></i></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                                class="fi-rr-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Small
                                                        chainsaw for wood cutting</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$3950</span>
                                                    <span class="new-price">$3500</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{ asset('assets/images/product-image/133_1.jpg') }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ asset('assets/images/product-image/133_1.jpg') }}"
                                                            alt="Product" />
                                                    </a>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><i
                                                                class="fi-rr-shopping-basket"></i></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><i
                                                                class="fi-rr-eye"></i></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                                class="fi-rr-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Stainless
                                                        steel Hammer</a></h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$25</span>
                                                    <span class="new-price">$20</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ec 3rd Product tab end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ec Product tab Area End -->
    <!-- begin::Components -->
    @include('layouts.themes.default.components.cart.sidecart')
    <!-- end::Components -->
@endsection
