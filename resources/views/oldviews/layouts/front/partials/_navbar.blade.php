      @php
          $counter = 0;
          $id = 0;
          try {
              if (Request::ip()) {
                  $cart = \App\Models\Cart::where('ip', Request::ip())->first()->id;
                  $products_in_cart = \App\Models\CartDetail::where('cart_id', $cart)->count();
                  if (!$products_in_cart) {
                      $counter = 0;
                  }
                  if ($products_in_cart > 0) {
                      $counter = $products_in_cart;
                  }
              } else {
              }
          } catch (\Throwable $th) {
              //throw $th;
          }

      @endphp
      <nav class="navbar navbar-expand-lg bg-primary {{ request()->is('/','login', 'password/reset', 'register') ? 'fixed-top navbar-transparent' : '' }}"
          @if (request()->is('/')) color-on-scroll="30" @else @endif>

          <div class="container py-0">

              <div class="navbar-translate">

                  <a class="navbar-brand" href="{{ route('welcome') }}" rel="tooltip" title="Courses online"
                      data-placement="bottom">
                      <img src="{{ asset('images/altcoin.png') }}" width="40%" alt="">Liftitfy
                  </a>

                  <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse"
                      data-target="#navigation" aria-controls="navigation-index" aria-expanded="false"
                      aria-label="Toggle navigation">

                      <span class="navbar-toggler-bar top-bar"></span>

                      <span class="navbar-toggler-bar middle-bar"></span>

                      <span class="navbar-toggler-bar bottom-bar"></span>

                  </button>

              </div>

              <div class="collapse navbar-collapse justify-content-end" id="navigation"
                  data-nav-image="/img/blurred-image-1.jpg" id="main">

                  <ul class="navbar-nav">

                      {{-- <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">

                          <a class="nav-link" href="{{ request()->is('/') ? '#' : '/' }}">

                              <p>{{ __('Home') }}</p>

                          </a>

                      </li> --}}

                      <li class="nav-item {{ request()->is('ecourses') ? 'active' : '' }}">

                          <a class="nav-link" href="{{ request()->is('ecourses') ? '#' : '/ecourses' }}">

                              <p>{{ __('eCourses') }}</p>

                          </a>

                      </li>

                      <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}">

                          <a class="nav-link" href="{{ request()->is('contact') ? '#' : '/contact' }}">

                              <p>{{ __('Contact') }}</p>

                          </a>

                      </li>
                      @if (auth()->check())
                          @if (auth()->user()->cart->details->count() > 0)
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ url('/home') }}" data-placement="bottom"
                                      title="Shopping Cart">
                                      <i class="now-ui-icons shopping_cart-simple"></i>
                                      <span class="badge badge-secondary px-1 total-count" style="font-size: 10px">
                                          {{ auth()->user()->cart->details->count() }}
                                      </span>
                                  </a>
                          @endif
                          </li>
                      @endif

                      @guest
                          @if (Route::has('login'))
                              <li class="nav-item">

                                  <a class="nav-link btn btn-neutral btn-round" href="{{ route('login') }}">
                                      <i class="now-ui-icons users_single-02"></i>
                                      <p>{{ __('Login') }}</p>
                                  </a>

                              </li>
                          @endif
                      @else
                          <li class="nav-item dropdown">

                              <a class="nav-link" href="#" class="nav-link dropdown-toggle"
                                  id="navbarDropdownMyAccount" data-toggle="dropdown" data-placement="bottom"
                                  title="{{ __('My Account') }}">

                                  <i class="now-ui-icons users_single-02"></i>

                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMyAccount">

                                  <a class="dropdown-item" href="{{ route('home.my_account') }}">

                                      {{ __('My Account') }}

                                  </a>

                                  @if (auth()->check() && auth()->user()->admin == 0)
                                      <a class="dropdown-item" href="{{ url('/home/orders') }}">

                                          {{ __('My Orders') }}

                                      </a>
                                  @else
                                  <a class="dropdown-item" href="{{ url('/home/manage-orders') }}">

                                    {{ __('Manage Orders') }}

                                    </a>
                                  @endif
                                  <a class="dropdown-item" href="{{ route('home.documentation') }}">

                                    {{ __('Documentation') }}

                                </a>

                                  <a class="dropdown-item" target="_blank" href="{{ route('logout') }}"
                                      onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                                      {{ __('Logout') }}

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
