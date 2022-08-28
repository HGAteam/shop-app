  <!-- Navbar -->

  {{-- <nav class="navbar navbar-expand-lg bg-primary">

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

  </nav> --}}

  <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
    <div class="container-fluid">
      <div class="navbar-wrapper">
        <div class="navbar-toggle">
          <button type="button" class="navbar-toggler">
            <span class="navbar-toggler-bar bar1"></span>
            <span class="navbar-toggler-bar bar2"></span>
            <span class="navbar-toggler-bar bar3"></span>
          </button>
        </div>
        <a class="navbar-brand" href="#pablo">{{ __('Dashboard')}}</a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <form>
          <div class="input-group no-border">
            <input type="text" value="" class="form-control" placeholder="Search...">
            <div class="input-group-append">
              <div class="input-group-text">
                <i class="now-ui-icons ui-1_zoom-bold"></i>
              </div>
            </div>
          </div>
        </form>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#pablo">
              <i class="now-ui-icons media-2_sound-wave"></i>
              <p>
                <span class="d-lg-none d-md-block">Stats</span>
              </p>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="now-ui-icons location_world"></i>
              <p>
                <span class="d-lg-none d-md-block">Some Actions</span>
              </p>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#pablo">
              <i class="now-ui-icons users_single-02"></i>
              <p>
                <span class="d-lg-none d-md-block">Account</span>
              </p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- End Navbar -->