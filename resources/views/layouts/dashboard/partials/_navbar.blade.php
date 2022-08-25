  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary">
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
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="{{asset('img/blurred-image-1.jpg')}}">
        <ul class="navbar-nav">
          <li class="nav-item {{ request()->is('home')? 'active': '' }}">
            <a class="nav-link" href="{{route('home')}}">
              <p>{{ __('Dashboard')}}</p>
            </a>
          </li>
          <li class="nav-item {{ request()->is('home/categories*')? 'active': '' }}">
            <a class="nav-link" href="{{route('home.categories')}}">
              <p>{{ __('Categories')}}</p>
            </a>
          </li>
          <li class="nav-item {{ request()->is('home/products*')? 'active': '' }}">
            <a class="nav-link" href="{{route('home.products')}}">
              <p>{{ __('Products')}}</p>
            </a>
          </li>
          <li disabled class="disabled nav-item {{ request()->is('home/orders*')? 'active': '' }}">
            <a disabled class="disabled nav-link" href="{{route('home.orders')}}">
              <p>{{ __('Orders')}}</p>
            </a>
          </li>
          <li disabled class="disabled nav-item {{ request()->is('home/sales*')? 'active': '' }}">
            <a disabled class="disabled nav-link" href="{{route('home.sales')}}">
              <p>{{ __('Sales')}}</p>
            </a>
          </li>
        <!-- Authentication Links -->
        @guest
        @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
        @endif
        @else
          <li class="nav-item dropdown">
            <a class="nav-link" href="#"  class="nav-link dropdown-toggle" id="navbarDropdownMyAccount" data-toggle="dropdown" data-placement="bottom" title="{{ __('My Account')}}">
              <i class="now-ui-icons users_single-02"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMyAccount">
                <a class="dropdown-item disabled" href="#profile">
                  {{ __('My Profile')}}
                </a>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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
  <!-- End Navbar -->