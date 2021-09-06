<header>
    <div class="header-bar">

    </div>
    <div class="container-center">
        <div class="container-logo">
            <img src="{{asset('img/dc-logo.png')}}" alt="dc comics">
        </div>
        <nav>
            <ul>
                <li><a href="{{ route('characters') }}">characters</a></li>
                <li><a href="{{ route('comics') }}">comics</a></li>
                <li><a href="{{ route('movie') }}">movies</a></li>
                <li><a href="{{ route('tv') }}">tv</a></li>
                <li><a href="{{ route('game') }}">games</a></li>
                <li><a href="{{ route('collectibles') }}">collectibles</a></li>
                <li><a href="{{ route('videos') }}">videos</a></li>
                <li><a href="{{ route('fans') }}">fans</a></li>
                <li><a href="{{ route('news') }}">news</a></li>
                <li><a href="{{ route('shop') }}">shop</a></li>
            </ul>
        </nav>
        <div class="box-search-bar">
            <input type="text" placeholder="Search">

        </div>
    </div>
    <div class="jumbotron"></div>
</header>
