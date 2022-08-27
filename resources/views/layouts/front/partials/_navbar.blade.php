      @php
        $counter = 0;
        $id = 0;
        try {
          if(Request::ip()){
          $cart = \App\Models\Cart::where('ip', Request::ip())->first()->id;
          $products_in_cart = \App\Models\CartDetail::where('cart_id', $cart)->count();
          if(!$products_in_cart){
            $counter = 0;
            $id = 0;
          }
          if($products_in_cart > 0){
            $counter = $products_in_cart;
            $id = $cart;
          }
        }else{
        }
        } catch (\Throwable $th) {
          //throw $th;
        }
        
    @endphp
<nav class="navbar navbar-expand-lg bg-primary {{request()->is('/')? 'fixed-top navbar-transparent' : ''}}" @if(request()->is('/')) color-on-scroll="30" @else @endif>

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

      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="/img/blurred-image-1.jpg" id="main">

        <ul class="navbar-nav">

          <li class="nav-item">

            <a class="nav-link" href="#">

              <p>{{ __('Home')}}</p>

            </a>

          </li>

          <li class="nav-item">

            <a class="nav-link" href="#">

              <p>{{ __('eCourse')}}</p>

            </a>

          </li>
          
          <li class="nav-item">

            <a class="nav-link" href="#">

              <p>{{ __('Contact')}}</p>

            </a>

          </li>

          <li class="nav-item">
            <a
                class="nav-link"
                href="{{url('/cart/'.$id)}}"
                data-placement="bottom"
                title="Shopping Cart"
            >
                <i class="now-ui-icons shopping_cart-simple"></i>
                <span
                    class="badge badge-secondary px-1 total-count"
                    style="font-size: 10px"
                >
                    {{ $counter }}
                </span>
            </a>
        </li>

          @guest

          @if (Route::has('login'))

              {{-- <li class="nav-item">

                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>

              </li> --}}

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