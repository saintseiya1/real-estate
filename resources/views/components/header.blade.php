<header class="header">
    <div class="container">
        <a href="/" class="header__logo">
            Smith Realty
        </a>
        <div class="header__menu">
            <a href="/1/2/3" class="header__menu-link 
            @if(request()->routeIs('listings'))
                header__menu-link--active            
            @endif">Listings</a>
            <a href="" class="header__menu-link">Property</a>
            <a href="" class="header__menu-link">Pages</a>
        </div>
        <div class="header__account">

            @if (Route::has('login'))
                    @auth
                        <a href="{{ route('account')}}" class="header__account-link">
                            <i class="fa-solid fa-heart"></i>
                        </a>
                        <a href="{{ route('show-status')}}" class="header__account-link">
                            <i class="fa-solid fa-user"></i>
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}" class="header__account-link--anchor"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                            Logout</a>                        
                        </form>
                        {{-- <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a> --}}
                    @else
                        <a href="{{ route('login') }}" class="header__account-link--anchor">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="header__account-link--anchor">Register</a>
                        @endif
                    @endauth
            @endif
        </div>
    </div>
</header>