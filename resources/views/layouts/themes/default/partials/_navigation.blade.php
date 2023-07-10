<!-- begin::Header start  -->
<header class="ec-header">
    <!--begin::Ec Header Top Start -->
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <!-- begin::Header Top phone Start -->
                <div class="col header-top-left">
                    <div class="header-top-call">
                        <i class="fi-rr-phone-call"></i> Phone:
                        <a href="tel:+48735527287"> +48 735 52 728 7</a>
                    </div>
                </div>
                <!-- end::Header Top phone End -->
                <!-- begin::Header Top call Start -->
                <div class="col header-top-center">
                    <div class="header-top-call">
                        Order online or call us (+1800) 000 8808
                    </div>
                </div>
                <!-- end::Header Top call End -->
                <!-- begin::Header Top Language Currency -->
                <div class="col header-top-right d-none d-lg-block">
                    <div class="header-top-right-inner d-flex justify-content-end">
                        <!-- begin::Currency Start -->
                        <div class="header-top-lan-curr header-top-curr dropdown">
                            <button class="dropdown-toggle" data-bs-toggle="dropdown">
                                USD
                                <i class="ecicon eci-angle-down" aria-hidden="true"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li class="active">
                                    <a class="dropdown-item" href="#">USD $</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">EUR $</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end::Currency End -->
                        <!-- begin::Language Start -->
                        <div class="header-top-lan-curr header-top-lan dropdown">
                            <button class="dropdown-toggle" data-bs-toggle="dropdown">
                                ESP
                                <i class="ecicon eci-angle-down" aria-hidden="true"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li class="active">
                                    <a class="dropdown-item" href="#">{{ __('Español') }}</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">{{ __('Ingles') }}</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end::Language End -->
                        <!-- begin::Social Start -->
                        <div class="header-top-social">
                            <ul class="mb-0">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="ecicon eci-facebook"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="ecicon eci-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="ecicon eci-instagram"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="ecicon eci-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end::Social End -->
                    </div>
                </div>
                <!-- end::Header Top Language Currency -->
                <!-- begin::Header Top responsive Action -->
                <div class="col header-top-res d-lg-none">
                    <div class="ec-header-bottons">
                        <!-- begin::Header User Start -->
                        <div class="ec-header-user dropdown">
                            <button class="dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="fi-rr-user"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                @guest
                                @if (Route::has('login'))
                                <li>
                                    <a class="dropdown-item" href="{{ route('login') }}">
                                        {{__('Iniciar sesión')}}
                                    </a>
                                </li>
                                @endif
                                @if (Route::has('register'))
                                <li>
                                    <a class="dropdown-item" href="{{route('register')}}">
                                        {{ __('Crear cuenta') }}
                                    </a>
                                </li>
                                @endif
                                @else
                                <li>
                                    <a class="dropdown-item" href="{{route('home')}}">
                                        {{ __('Mi Cuenta') }}
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" target="_blank" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Desconectarme') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                                @endguest
                            </ul>
                        </div>
                        <!-- end::Header User End -->
                        <!-- begin::Header Cart Start -->
                        <a href="#" class="ec-header-btn ec-header-wishlist">
                            <div class="header-icon">
                                <i class="fi-rr-heart"></i>
                            </div>
                            <span class="ec-header-count ec-wishlist-count">0</span>
                        </a>
                        <!-- end::Header Cart End -->
                        <!-- begin::Header Cart Start -->
                        <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
                            <div class="header-icon">
                                <i class="fi-rr-shopping-basket"></i>
                            </div>
                            <span class="ec-header-count ec-cart-count">0</span>
                        </a>
                        <!-- end::Header Cart End -->
                        <!-- begin::Header menu Start -->
                        <a href="#ec-mobile-menu" class="ec-header-btn ec-side-toggle ec-d-l d-lg-none">
                            <i class="ecicon eci-bars"></i>
                        </a>
                        <!-- end::Header menu End -->
                    </div>
                </div>
                <!-- end::Header Top responsive Action -->
            </div>
        </div>
    </div>
    <!-- begin::Ec Header Top  End -->
    <!-- begin::Ec Header Bottom  Start -->
    <div class="ec-header-bottom d-none d-lg-block">
        <div class="container position-relative">
            <div class="row">
                <div class="header-bottom-flex">
                    <!-- begin::Ec Header Logo Start -->
                    <div class="align-self-center ec-header-logo ">
                        <div class="header-logo">
                            <a href="{{ route('welcome') }}">
                                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="{{ config('app.name') }}" />
                            </a>
                        </div>
                    </div>
                    <!-- end::Ec Header Logo End -->
                    <!-- begin::Ec Header Search Start -->
                    <div class="align-self-center ec-header-search">
                        <div class="header-search">
                            <form class="ec-search-group-form" action="#">
                                <div class="ec-search-select-inner">
                                    <select name="ec-search-cat">
                                        <option selected disabled>{{ __('Todas') }}</option>
                                        <option value="">Llamar a otras categorias</option>
                                    </select>
                                </div>
                                <input class="form-control" placeholder="{{ __('Estoy buscando') }}..." type="text">
                                <button class="search_submit" type="submit">
                                    {{ __('Buscar') }}
                                    <i class="fi-rr-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- end::Ec Header Search End -->
                    <!-- begin::Ec Header Button Start -->
                    <div class="align-self-center ec-header-cart">
                        <div class="ec-header-bottons">
                            <!-- begin::Header User Start -->
                            <div class="ec-header-user dropdown">
                                <button class="dropdown-toggle" data-bs-toggle="dropdown">
                                    <i class="fi-rr-user"></i>
                                    <span class="ec-btn-title">{{ __('Cuenta') }}</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    @guest
                                    @if (Route::has('login'))
                                    <li>
                                        <a class="dropdown-item" href="{{ route('login') }}">
                                            {{ __('Iniciar sesión') }}
                                        </a>
                                    </li>
                                    @endif
                                    @if (Route::has('register'))
                                    <li>
                                        <a class="dropdown-item" href="{{route('register')}}">
                                            {{ __('Crear cuenta') }}
                                        </a>
                                    </li>
                                    @endif
                                    @else
                                    <li>
                                        <a class="dropdown-item" href="{{route('home')}}">
                                            {{ __('Mi Cuenta') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" target="_blank" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Desconectarme') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                    @endguest
                                </ul>
                            </div>
                            <!-- end::Header User End -->
                            <!-- begin::Header wishlist Start -->
                            <a href="#" class="ec-header-btn ec-header-wishlist">
                                <div class="header-icon">
                                    <i class="fi-rr-heart"></i>
                                </div>
                                <span class="ec-header-count ec-cart-wishlist">0</span>
                                <span class="ec-btn-title">{{ __('lista de deseos') }}</span>
                            </a>
                            <!-- end::Header wishlist End -->
                            <!-- begin::Header Cart Start -->
                            <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
                                <div class="header-icon">
                                    <i class="fi-rr-shopping-basket"></i>
                                </div>
                                <span class="ec-header-count ec-cart-count">0</span>
                                <span class="ec-btn-title">{{ __('En Carrito') }}</span>
                            </a>
                            <!-- end::Header Cart End -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end::Ec Header Button End -->
    <!-- begin::Header responsive Bottom  Start -->
    <div class="ec-header-bottom d-lg-none">
        <div class="container position-relative">
            <div class="row ">
                <!-- begin::Ec Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="{{ route('welcome') }}">
                            <img src="{{ asset('assets/images/logo/logo.png') }}" alt="{{ config('app.name') }}" />
                        </a>
                    </div>
                </div>
                <!-- end::Ec Header Logo End -->
                <!-- begin::Ec Header Search Start -->
                <div class="col align-self-center ec-header-search">
                    <div class="header-search">
                        <form class="ec-search-group-form" action="#">
                            <div class="ec-search-select-inner">
                                <select name="ec-search-cat">
                                    <option selected disabled>{{ __('Todas') }}</option>
                                    <option value="shoes">{{__('Categorias')}}</option>
                                </select>
                            </div>
                            <input class="form-control" placeholder="{{ __('Estoy buscando') }}..." type="text">
                            <button class="search_submit" type="submit">
                                <i class="fi-rr-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <!-- end::Ec Header Search End -->
            </div>
        </div>
    </div>
    <!-- end::Header responsive Bottom  End -->
    <!-- begin::EC Main Menu Start -->
    <div id="ec-main-menu-desk" class="sticky-nav">
        <div class="container position-relative">
            <div class="row">
                <div class="col-sm-2 ec-category-block">
                    <div class="ec-category-menu">
                        <div class="ec-category-toggle">
                            <span class="ec-category-title">{{ __('Categorias') }}</span>
                            <i class="ecicon eci-angle-down" aria-hidden="true"></i>
                        </div>
                        <div class="ec-category-content">
                            <div id="ec-category-menu" class="ec-category-menu">
                                <ul class="ec-category-wrapper">
                                    <li>
                                        <a title="" class="ec-cat-menu-link" href="#">
                                            <img src="{{ asset('assets/images/icons/category-10.png') }}"
                                                class="svg_img pro_svg" alt="" />Paint Tools
                                        </a>
                                    </li>
                                    <li>
                                        <a title="" class="ec-cat-menu-link" href="#">
                                            <img src="{{ asset('assets/images/icons/category-11.png') }}"
                                                class="svg_img pro_svg" alt="" />Drills Machines
                                        </a>
                                    </li>
                                    <li>
                                        <a title="" class="ec-cat-menu-link" href="#">
                                            <img src="{{ asset('assets/images/icons/category-12.png') }}"
                                                class="svg_img pro_svg" alt="" />Hammers
                                        </a>
                                    </li>
                                    <li>
                                        <a title="" class="ec-cat-menu-link" href="#">
                                            <img src="{{ asset('assets/images/icons/category-13.png') }}"
                                                class="svg_img pro_svg" alt="" />Wrenches
                                        </a>
                                    </li>
                                    <li>
                                        <a title="" class="ec-cat-menu-link" href="#">
                                            <img src="{{ asset('assets/images/icons/category-14.png') }}"
                                                class="svg_img pro_svg" alt="" />Grinding machine
                                        </a>
                                    </li>
                                    <li>
                                        <a title="" class="ec-cat-menu-link" href="#">
                                            <img src="{{ asset('assets/images/icons/category-15.png') }}"
                                                class="svg_img pro_svg" alt="" />Screw drivers
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 ec-main-menu-block align-self-center d-none d-lg-block">
                    <div class="ec-main-menu">
                        <ul>
                            <li><a href="javascript:void(0)">{{ __('Inicio') }}</a></li>
                            <li><a href="javascript:void(0)">{{ __('Ofertas') }}</a></li>
                            <li><a href="javascript:void(0)">{{ __('Vendedores') }}</a></li>
                            <li><a href="javascript:void(0)">{{ __('Distribuidores') }}</a></li>
                            <li><a href="javascript:void(0)">{{ __('Productores /Fabricantes') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end::Ec Main Menu End -->
    <!-- begin::Ekka Menu Start -->
    <div class="ec-mobile-menu-overlay"></div>
    <div id="ec-mobile-menu" class="ec-side-cart ec-mobile-menu">
        <div class="ec-menu-title">
            <span class="menu_title">{{ __('Menú Principal') }}</span>
            <button class="ec-close">×</button>
        </div>
        <div class="ec-menu-inner">
            <div class="ec-menu-content">
                <ul>
                    <li><a href="javascript:void(0)">{{ __('Inicio') }}</a></li>
                    <li><a href="javascript:void(0)">{{ __('Ofertas') }}</a></li>
                    <li><a href="javascript:void(0)">{{ __('Vendedores') }}</a></li>
                    <li><a href="javascript:void(0)">{{ __('Distribuidores') }}</a></li>
                    <li><a href="javascript:void(0)">{{ __('Productores /Fabricantes') }}</a></li>
                </ul>
            </div>
            <div class="header-res-lan-curr">
                <div class="header-top-lan-curr">
                    <!-- begin::Language Start -->
                    <div class="header-top-lan dropdown">
                        <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">
                            {{ __('Lenguaje') }}
                            <i class="ecicon eci-caret-down" aria-hidden="true"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li class="active">
                                <a class="dropdown-item" href="#">{{ __('Español') }}</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">{{ __('Ingles') }}</a>
                            </li>
                        </ul>
                    </div>
                    <!-- end::Language End -->
                    <!-- begin::Currency Start -->
                    <div class="header-top-curr dropdown">
                        <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">
                            {{ __('Moneda ') }}
                            <i class="ecicon eci-caret-down" aria-hidden="true"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li class="active">
                                <a class="dropdown-item" href="#">ARS $</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">USD $</a>
                            </li>
                        </ul>
                    </div>
                    <!-- end::Currency End -->
                </div>
                <!-- Social Start -->
                <div class="header-res-social">
                    <div class="header-top-social">
                        <ul class="mb-0">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="ecicon eci-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="ecicon eci-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="ecicon eci-instagram"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="ecicon eci-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Social End -->
            </div>
        </div>
    </div>
    <!-- end::Ekka Menu End -->
</header>
<!-- Header End  -->
