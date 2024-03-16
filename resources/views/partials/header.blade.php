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
                    <a @if (Route::currentroutename()=="characters" ) class="active" @endif href="{{route('characters')}}">CHARACTERS</a>
                </li>
                <li>
                    <a @if (Route::currentroutename()=="comics" ) class="active" @endif href="{{route('comics')}}">COMICS</a>
                </li>
                <li>
                    <a @if (Route::currentroutename()=="movies" ) class="active" @endif href="{{route('movies')}}">MOVIES</a>
                </li>
                <li>
                    <a @if (Route::currentroutename()=="tv" ) class="active" @endif href="{{route('tv')}}">TV</a>
                </li>
                <li>
                    <a @if (Route::currentroutename()=="games" ) class="active" @endif href="{{route('games')}}">GAMES</a>
                </li>
                <li>
                    <a @if (Route::currentroutename()=="collectibles" ) class="active" @endif href="{{route('collectibles')}}">COLLECTIBLES</a>
                </li>
                <li>
                    <a @if (Route::currentroutename()=="videos" ) class="active" @endif href="{{route('videos')}}">VIDEOS</a>
                </li>
                <li>
                    <a @if (Route::currentroutename()=="fans" ) class="active" @endif href="{{route('fans')}}">FANS</a>
                </li>
                <li>
                    <a @if (Route::currentroutename()=="news" ) class="active" @endif href="{{route('news')}}">NEWS</a>
                </li>
                <li>
                    <a @if (Route::currentroutename()=="shop" ) class="active" @endif href="{{route('shop')}}">SHOP</a>
                </li>
            </ul>
        </nav>
        <div class="search-bar">
            <input type="text" placeholder="Search...">
        </div>


    </div>
</header>
