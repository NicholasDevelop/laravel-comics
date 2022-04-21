<header class="header">
    <div class="container">
        <figure>
            <img src="{{asset('/img/dc-logo.png')}}" alt="">
        </figure>

        <ul class="navbar">
            <li class="nav-list {{Request::route()->getName() == 'characters.index' ? 'active' : ''}}">
                <a class="{{Request::route()->getName() == 'characters.index' ? 'active' : ''}}" href="../characters">Characters</a>
            </li>
            <li class="nav-list {{Request::route()->getName() == 'comics.index' || Request::route()->getName() == 'comics.show' ? 'active' : ''}}">
                <a class="{{Request::route()->getName() == 'comics.index' || Request::route()->getName() == 'comics.show' ? 'active' : ''}}" href="{{ route('comics.index') }}">Comics</a>
            </li>
            <li class="nav-list {{Request::route()->getName() == 'movies.index' ? 'active' : ''}}">
                <a class="{{Request::route()->getName() == 'movies.index' ? 'active' : ''}}" href="../movies">Movies</a>
            </li>
            <li class="nav-list {{Request::route()->getName() == 'tv.index' ? 'active' : ''}}">
                <a class="{{Request::route()->getName() == 'tv.index' ? 'active' : ''}}" href="../tv">Tv</a>
            </li>
            <li class="nav-list {{Request::route()->getName() == 'games.index' ? 'active' : ''}}">
                <a class="{{Request::route()->getName() == 'games.index' ? 'active' : ''}}" href="../games">Games</a>
            </li>
            <li class="nav-list {{Request::route()->getName() == 'collectibles.index' ? 'active' : ''}}">
                <a class="{{Request::route()->getName() == 'collectibles.index' ? 'active' : ''}}" href="../collectibles">Collectibles</a>
            </li>
            <li class="nav-list {{Request::route()->getName() == 'videos.index' ? 'active' : ''}}">
                <a class="{{Request::route()->getName() == 'videos.index' ? 'active' : ''}}" href="../videos">Videos</a>
            </li>
            <li class="nav-list {{Request::route()->getName() == 'fans.index' ? 'active' : ''}}">
                <a class="{{Request::route()->getName() == 'fans.index' ? 'active' : ''}}" href="../fans">Fans</a>
            </li>
            <li class="nav-list {{Request::route()->getName() == 'news.index' ? 'active' : ''}}">
                <a class="{{Request::route()->getName() == 'news.index' ? 'active' : ''}}" href="../news">News</a>
            </li>
            <li class="nav-list {{Request::route()->getName() == 'shop.index' ? 'active' : ''}}">
                <a class="{{Request::route()->getName() == 'shop.index' ? 'active' : ''}}" href="../shop">Shop</a>
            </li>
        </ul>

    </div>
</header>