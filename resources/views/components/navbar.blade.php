<nav class="navbar navbar-expand-lg fixed-top bg-body-tertiary">
    <div class="container-fluid justify-content-between">
        <a class="navbar-brand" href="{{ route('home') }}">
        <img class="logo_navbar" src="{{Storage::url('public/logo/logo.png')}}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse justify-content-center navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link @if (Route::currentRouteName() == 'home') active @endif" aria-current="page"
                        href="{{ route('home') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link @if (Route::currentRouteName() == 'announcement.index') active @endif"
                        href="{{ route('announcement.index') }}">Annunci</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link  @if (Route::currentRouteName() == 'announcement.create') active @endif"
                        href="{{ route('announcement.create') }}">Crea annuncio</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                            <li><a class="dropdown-item d-flex justify-content-between" href="{{route('category.index', compact('category'))}}">{{ucfirst($category->name)}}
                                    <span>{{ $category->announcements->count() }}</span></a></li>
                        @endforeach

                    </ul>
                </li>
                <div class="d-lg-none">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown end-0">
                            <a class="nav-link dropdown-toggle dropdown-toggle2" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <button class="btn"><i class="bi fs-4 bi-person-circle"></i></button>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                @guest
                                    <li><a class=" dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                                    <li><a class="dropdown-item" href="{{ route('login') }}">Accedi</a></li>
                                @endguest
                                @auth
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button class="dropdown-item" type="submit">Logout <i
                                                    class="bi bi-box-arrow-right px-2"></i></button>
                                        </form>
                                    </li>
                                @endauth
                        </li>
    
                    </ul>
                    </li>
    
                    </ul>
                </div>
            </ul>
        </div>
        <div class="d-none d-lg-block">
            <div>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown end-0">
                        <a class="nav-link dropdown-toggle dropdown-toggle2" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <button class="btn"><i class="bi fs-4 bi-person-circle"></i></button>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            @guest
                                <li><a class=" dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                                <li><a class="dropdown-item" href="{{ route('login') }}">Accedi</a></li>
                            @endguest
                            @auth
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button class="dropdown-item" type="submit">Logout <i
                                                class="bi bi-box-arrow-right px-2"></i></button>
                                    </form>
                                </li>
                            @endauth
                    </li>

                </ul>
                </li>

                </ul>
            </div>
        </div>
    </div>
</nav>
<nav class="navbar opacity-0 navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">Presto the last commit</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse justify-content-between  navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link @if (Route::currentRouteName() == 'home') active @endif" aria-current="page"
                        href="{{ route('home') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link @if (Route::currentRouteName() == 'announcement.index') active @endif"
                        href="{{ route('announcement.index') }}">Annunci</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link  @if (Route::currentRouteName() == 'announcement.create') active @endif"
                        href="{{ route('announcement.create') }}">Crea annuncio</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                            <li><a class="dropdown-item d-flex justify-content-between" href="{{route('category.index', compact('category'))}}">{{ucfirst($category->name)}}
                                    <span>{{ $category->announcements->count() }}</span></a></li>
                        @endforeach

                    </ul>
                </li>
                
            </ul>
            <div>
                <div>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown end-0">
                            <a class="nav-link dropdown-toggle dropdown-toggle2" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <button class="btn"><i class="bi fs-4 bi-person-circle"></i></button>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                @guest
                                    <li><a class=" dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                                    <li><a class="dropdown-item" href="{{ route('login') }}">Accedi</a></li>
                                @endguest
                                @auth
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button class="dropdown-item" type="submit">Logout <i
                                                    class="bi bi-box-arrow-right px-2"></i></button>
                                        </form>
                                    </li>
                                @endauth
                        </li>

                    </ul>
                    </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>