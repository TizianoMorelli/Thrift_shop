<nav class="navbar navbar-expand-lg fixed-top bg_nav">
    <div class="container-fluid justify-content-between">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img class="logo_navbar" src="{{ Storage::url('public/logo/logo.png') }}" alt="">
        </a>
        <button class="navbar-toggler navbar_toggler_focused " type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class=" "><i class="bi bi-view-list"></i></span>
        </button>
        <div class="collapse justify-content-center navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link transition_03 @if (Route::currentRouteName() == 'home') active @endif"
                        aria-current="page" href="{{ route('home') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link transition_03 @if (Route::currentRouteName() == 'announcement.index') active @endif"
                        href="{{ route('announcement.index') }}">Annunci</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link transition_03 @if (Route::currentRouteName() == 'announcement.create' || Route::currentRouteName() == 'login') active @endif"
                        href="{{ route('announcement.create') }}">Crea annuncio</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link transition_03 dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                            <li>
                                <a class="dropdown-item d-flex justify-content-between"
                                    href="{{ route('category.index', compact('category')) }}">{{ ucfirst($category->name) }}
                                    <span>{{ $category->announcements->count() }}</span>
                                </a>
                            </li>
                        @endforeach

                    </ul>
                </li>

                <li class="nav-item">
                    @if (Auth::user() && Auth::user()->is_revisor)
                    <a href="{{route('revisor.home')}}" class="btn btn_standard position-relative">
                    Revisor
                      <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        {{App\Models\Announcement::toBeRevisionedCount()}}
                      </span>
                    </a>
                    @endif
                </li>


              

                <div class="d-lg-none">
                    <ul class="navbar-nav">
                        <div class="search-box">
                            <button class="btn-search"></button>
                            <input type="text" class="input-search" placeholder="Type to Search...">
                          </div>
                        <li class="nav-item dropdown end-0">
                            <a class="nav-link dropdown-toggle dropdown-toggle2" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <button class="btn transition_03"><i class="bi fs-4 bi-person-circle"></i></button>
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
                                            <button class="dropdown-item" type="submit">Logout
                                                <i class="bi bi-box-arrow-right px-2"></i></button>
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
            <ul class="navbar-nav justify-content-end d-flex">
                <li class="nav-item align-items-center d-flex   ps-lg-5 my-2 my-md-0">
                    <form action="{{route('announcement.search')}}" method="GET" class="d-flex" role="search">
                        <div class="search-box">
                          <button class="btn-search">
                            
                        </button>
                          <input name="searched" type="search" placeholder="Search" aria-label="Search" class="input-search">
                          <button type="submit" class="btn"><i class="bi bi-search"></i></button>
                        </div>                        
                    </form>
                  </li>
                <li class="nav-item dropdown end-0">
                    <a class="nav-link dropdown-toggle dropdown-toggle2" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <button class="btn transition_03"><i class="bi fs-4 bi-person-circle"></i></button>
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
