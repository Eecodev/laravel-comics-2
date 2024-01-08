<header class="container my-4">
    <div class="d-flex justify-content-between align-items-center">
        <img class="logo-head" src="{{Vite::asset('/resources/img/dc-logo.png')}}" alt="">
        <ul class="nav nav-underline">
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : ''}}" aria-current="page"
                    href="{{ route('home')}}">
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'comics.index' ? 'active' : ''}}" href="{{ route('comics.index')}}">
                    Comics
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Movies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Tv</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Games</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Collectibles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Videos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Fans</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Shop</a>
            </li>
        </ul>
    </div>
</header>

<div class="jumbo-container">

</div>
