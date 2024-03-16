<header>
    <div class="upper-header">
        <div class="container">
            <ul>
                <li><a href="#">DC POWER VISA</a></li>
                <li><a href="#">ADDITIONAL DC SITES</a></li>
            </ul>
        </div>
    </div>

    <div class="bottom-header container py-3">

        <div class="logo">
            <img src=" {{ Vite::asset("resources/images/dc-logo.png")}} " alt=""></div>
        <nav class="navbar">
            <ul>
                <li>
                    <a @if (Route::currentroutename()=="home" ) class="active" @endif href="{{route('home')}}">CHARACTERS</a>
                </li>
                <li>
                    <a @if (Route::currentroutename()=="comics" ) class="active" @endif href="{{route('comics')}}">COMICS</a>
                </li>
                <li>
                    <a @if (Route::currentroutename()=="home" ) class="active" @endif href="{{route('home')}}">MOVIES</a>
                </li>
                <li>
                    <a @if (Route::currentroutename()=="home" ) class="active" @endif href="{{route('home')}}">TV</a>
                </li>
                <li>
                    <a @if (Route::currentroutename()=="home" ) class="active" @endif href="{{route('home')}}">GAMES</a>
                </li>
                <li>
                    <a @if (Route::currentroutename()=="home" ) class="active" @endif href="{{route('home')}}">COLLECTIBLES</a>
                </li>
                <li>
                    <a @if (Route::currentroutename()=="home" ) class="active" @endif href="{{route('home')}}">VIDEOS</a>
                </li>
                <li>
                    <a @if (Route::currentroutename()=="home" ) class="active" @endif href="{{route('home')}}">FANS</a>
                </li>
                <li>
                    <a @if (Route::currentroutename()=="home" ) class="active" @endif href="{{route('home')}}">NEWS</a>
                </li>
                <li>
                    <a @if (Route::currentroutename()=="home" ) class="active" @endif href="{{route('home')}}">SHOP</a>
                </li>
            </ul>
        </nav>
        <div class="search-bar">
            <input type="text" placeholder="Search...">
        </div>


    </div>
</header>
