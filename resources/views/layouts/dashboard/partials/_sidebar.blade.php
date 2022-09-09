<div class="sidebar" data-color="orange">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
    <div class="logo">
        <a href="{{ route('welcome') }}" target="_blank" class="simple-text logo-mini">
            AP
        </a>
        <a href="{{ route('welcome') }}" target="_blank" class="simple-text logo-normal">
            Liftitfy
        </a>
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ request()->is('home') ? 'active' : '' }}">
                <a href="{{ route('home') }}">
                    <i class="now-ui-icons design_app"></i>
                    @if (auth()->user()->admin == true)
                        <p>{{ __('Dashboard') }}</p>
                    @else
                        <p>{{ __('Cart') }}</p>
                    @endif
                </a>
            </li>
            <li class="{{ request()->is('home/orders') ? 'active' : '' }}">
              <a href="{{ url('home/orders') }}">
                  <i class="now-ui-icons design_app"></i>
                  <p>{{ __('Orders') }}</p>
              </a>
          </li>
            @if (auth()->user()->admin == true)
                <li class="{{ request()->is('home/categories*') ? 'active' : '' }}">
                    <a href="{{ route('home.categories') }}">
                        <i class="now-ui-icons education_atom"></i>
                        <p>{{ __('Categories') }}</p>
                    </a>
                </li>
                <li class="{{ request()->is('home/products*') ? 'active' : '' }}">
                    <a href="{{ route('home.products') }}">
                        <i class="now-ui-icons location_map-big"></i>
                        <p>{{ __('Products') }}</p>
                    </a>
                </li>
            @endif
        </ul>
    </div>
</div>
