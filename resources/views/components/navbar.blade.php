<nav class="navbar navbar-expand-lg fixed-top bg_nav">
    <div class="container-fluid justify-content-between">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img class="logo_navbar" src="/images/logo/logo.png" alt="">
        </a>
        <button class="navbar-toggler navbar_toggler_focused " type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class=" "><i class="bi bi-view-list"></i></span>
    </button>
    <div class="collapse justify-content-center navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            
            <li class="nav-item">
                <a class="nav-link transition_03 @if (Route::currentRouteName() == 'home') active @endif"
                aria-current="page" href="{{ route('home') }}">{{__('navbar.home')}}</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link transition_03 @if (Route::currentRouteName() == 'announcement.index') active @endif"
                href="{{ route('announcement.index') }}">{{__('navbar.annunci')}}</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link transition_03 @if (Route::currentRouteName() == 'announcement.create' || Route::currentRouteName() == 'login') active @endif"
                href="{{ route('announcement.create') }}">{{__('navbar.crea')}}</a>
            </li>
            
            
            
            
            
            
            
            
            <li class="nav-item dropdown">
                <a class="nav-link transition_03 dropdown-toggle" href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                {{__('navbar.categorie')}}
            </a>
            <ul class="dropdown-menu">
                @foreach ($categories as $category)
                <li>
                    <a class="dropdown-item d-flex justify-content-between"
                    href="{{ route('category.index', compact('category')) }}">{{ ucfirst($category->name) }}
                    <span>
                        {{ $category->announcements->where('is_accepted', true)->count() }}
                    </span>
                    
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
            <li class="nav-item">
                <div class="dropdown mt-2">
                    <button class="btn btn_standard dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-translate"></i>
                    </button>
                    <ul class="dropdown-menu dropdown_lang">
                        <li class="dropdown-item">
                            <x-_locale class="w-25" lang="es"/>
                        
                            <x-_locale class="w-25" lang="it"/>
                        
                            <x-_locale class="w-25" lang="en"/>
                        </li>    
                    </ul>
                </div>
            </li>
            <li class="nav-item w-50 my-3">
                <form action="{{route('announcement.search')}}" method="GET" class="d-flex" role="search">
                    <button class="btn me-2 btn-outline-success btn_standard" type="submit">Cerca</button>
                    <input name="searched" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
            </li>
            <li class="nav-item dropdown end-0">
                <a class="nav-link dropdown-toggle dropdown-toggle2" href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <button class="btn transition_03"><i class="bi fs-4 bi-person-circle"></i></button>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                @guest
                <li><a class=" dropdown-item" href="{{ route('register') }}">{{__('navbar.registrati')}}</a></li>
                <li><a class="dropdown-item" href="{{ route('login') }}">{{__('navbar.accedi')}}</a></li>
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
            <li class="nav-item align-items-center d-flex my-md-0">
                <div class="dropdown">
                    <button class="btn btn_standard dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-translate"></i>
                    </button>
                    <ul class="dropdown-menu dropdown_lang ">
                        <li class=" dropdown-item">
                            <x-_locale class="w-25" lang="es"/>
                        
                            <x-_locale class="w-25" lang="it"/>
                        
                            <x-_locale class="w-25" lang="en"/>
                        </li>    
                    </ul>
                </div>
            </li>
            <li class="nav-item align-items-center d-flex   ps-lg-2 my-2 my-md-0">
                <button type="button" class="btn btn_standard" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="bi bi-search"></i>
                </button>
                
            </li>
            <li class="nav-item dropdown end-0">
                <a class="nav-link dropdown-toggle dropdown-toggle2" href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <button class="btn transition_03"><i class="bi fs-4 bi-person-circle"></i></button>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                @guest
                <li><a class=" dropdown-item" href="{{ route('register') }}">{{__('navbar.registrati')}}</a></li>
                <li><a class="dropdown-item" href="{{ route('login') }}">{{__('navbar.accedi')}}</a></li>
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

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Cerca articolo</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('announcement.search')}}" method="GET" class="d-flex" role="search">
                    <input name="searched" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success btn_standard" type="submit">Cerca</button>
                </form>                              
            </div>
        </div>
    </div>
</div>