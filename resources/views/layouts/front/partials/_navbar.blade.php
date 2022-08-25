{{-- 
<nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="30">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="{{route('welcome')}}" rel="tooltip" title="Courses online" data-placement="bottom">
        Liftitfy
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="/img/blurred-image-1.jpg">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <p>{{ __('Home')}}</p>
            </a>
          </li>
          @if (request()->is('/'))
          <li class="nav-item">
            <a class="nav-link" id="counter" href="#" data-toggle="modal" data-target="#cart" data-toggle="modal" data-target="#cart" data-placement="bottom" title="{{ __('Shopping Cart')}}">
              <i class="now-ui-icons shopping_cart-simple"></i>
              <span class="badge badge-secondary px-1 total-count" style="font-size:10px;">
                0
              </span>
            </a>
          </li>
          @endif
          @guest
          @if (Route::has('login'))
          @endif
          @else
            <li class="nav-item dropdown">
              <a class="nav-link" href="#"  class="nav-link dropdown-toggle" id="navbarDropdownMyAccount" data-toggle="dropdown" data-placement="bottom" title="{{ __('My Account')}}">
                <i class="now-ui-icons users_single-02"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMyAccount">
                  <a class="dropdown-item" disabled href="{{route('home')}}">
                    {{ __('My Account')}}
                  </a>
                  <a class="dropdown-item" disabled href="#profile">
                    {{ __('My Profile')}}
                  </a>
                  <a class="dropdown-item" target="_blank" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout')}}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                </div>
            </li>
            @endguest
        </ul>
      </div>
    </div>
  </nav>  
--}}
<header class="header_area">
<!-- Begin::Menu -->
<nav class="navbar navbar-expand-lg menu_one support_menu">
    <div class="container">
        <a class="navbar-brand" href="#">
          <img class="" src="{{asset('img/altcoin.png')}}" srcset="/img/altcoin.png 2x" alt="logo">
      </a>
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
        <div class="alter_nav my-2">
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
  <!-- End::Menu -->
</header>