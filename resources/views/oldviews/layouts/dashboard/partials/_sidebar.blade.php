<div class="sidebar" data-color="orange">
    <div class="logo">
        <a href="{{ route('welcome') }}" target="_blank" class="simple-text logo-mini">
            DP
        </a>
        <a href="{{ route('welcome') }}" target="_blank" class="simple-text logo-normal">
            {{ __('Admin Panel') }}
        </a>
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ request()->is('home') ? 'active' : '' }}">
                <a href="{{ route('home') }}">
                    <i class="now-ui-icons design_app"></i>
                    <p>{{ __('Home') }}</p>
                </a>
            </li>
            <li class="{{ request()->is('home/manage-orders') ? 'active' : '' }}">
                <a href="{{ url('home/manage-orders') }}">
                    <i class="now-ui-icons shopping_shop"></i>
                    <p>{{ __('Manage Orders') }}</p>
                </a>
            </li>
            <li class="{{ request()->is('home/categories*') ? 'active' : '' }}">
                <a href="{{ route('home.categories') }}">
                    <i class="now-ui-icons shopping_tag-content"></i>
                    <p>{{ __('Categories') }}</p>
                </a>
            </li>
            <li class="{{ request()->is('home/products*') ? 'active' : '' }}">
                <a href="{{ route('home.products') }}">
                    <i class="now-ui-icons shopping_box"></i>
                    <p>{{ __('Products') }}</p>
                </a>
            </li>
            <li class="{{ request()->is('home/users*') ? 'active' : '' }}">
                <a href="{{ route('home.users') }}">
                    <i class="now-ui-icons business_badge"></i>
                    <p>{{ __('Users') }}</p>
                </a>
            </li>
            <li class="active-pro" {{ request()->is('home/documentation/*') ? 'active' : '' }}>
                <a href="{{ route('home.documentation') }}">
                    <i class="now-ui-icons travel_info"></i>
                    <p>{{ __('Documentation') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
