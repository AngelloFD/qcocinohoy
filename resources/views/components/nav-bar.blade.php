<nav class="navbar navbar-light navbar-expand-sm bg-corpa-primary">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="{{ route('home') }}">¿QCocinoHoy?</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            {{-- <span class="navbar-toggler-icon"></span> --}}
            <i class="bi bi-list text-light d-flex justify-self-center align-self-center"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-light" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-light dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Explorar
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Acerca</a></li>
                        <li><a class="dropdown-item" href="#">Contacto</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Comida del día</a></li>
                    </ul>
                </li>
            </ul>

            {{-- d-none d-x-block = hide on smaller than x screens --}}
            <form class="d-none d-md-flex container" role="search" method="GET" action="{{ route('home') }}">
                <input name=ingredients class="form-control mx-5" type="search" placeholder="Papa, cebolla, camote.."
                    aria-label="Search">
                <button class="btn btn-outline-light d-flex" type="submit"><i
                        class="bi bi-search justify-self-center align-self-center me-2"></i>Buscar</button>
            </form>
            <form class="d-md-none d-md-flex d-flex" role="search" method="GET" action="{{ route('home') }}">
                <input class="form-control me-2" type="search" placeholder="Papa, cebolla, camote.."
                    aria-label="Search">
                <button class="btn btn-outline-light" type="submit"><i
                        class="bi bi-search justify-self-center align-self-center"></i></button>
            </form>

            {{-- d-none d-x-block = hide on smaller than x screens --}}
            <div class="d-none d-md-flex">
                @guest
                    <a class="btn btn-outline-light mx-2 d-flex" href="{{ route('login') }}"><i
                            class="bi bi-person-fill justify-self-center align-self-center me-2"></i>{{ __('Login') }}</a>
                @else
                    <div class="dropdown">
                        <button class="btn btn-outline-light dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Mi perfil</a></li>
                            <li><a class="dropdown-item" href="#">Mi semana</a></li>
                            <li><a class="dropdown-item" href="#">Mis comentarios</a></li>
                            <li><a class="dropdown-item" href="#">Mis recetas favoritas</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                                @csrf
                                <button class="btn btn-outline-dark mx-2" type="submit">Logout</button>
                            </form>
                        </ul>
                    </div>
                @endguest
            </div>
            <div class="d-md-none d-md-flex mt-2 mx-auto">
                @guest
                    <a class="btn btn-outline-light mx-2 d-flex" href="{{ route('login') }}"><i
                            class="bi bi-person-fill justify-self-center align-self-center me-2"></i>{{ __('Login') }} /
                        {{ __('Register') }}</a>
                @else
                    <div class="dropdown">
                        <button class="btn btn-outline-light dropdown-toggle container-fluid" type="button"
                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end w-100" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Mi perfil</a></li>
                            <li><a class="dropdown-item" href="#">Mi semana</a></li>
                            <li><a class="dropdown-item" href="#">Mis comentarios</a></li>
                            <li><a class="dropdown-item" href="#">Mis recetas favoritas</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                                @csrf
                                <button class="btn btn-outline-dark mx-2" type="submit">Logout</button>
                            </form>
                        </ul>
                    </div>
                @endguest
            </div>
        </div>
    </div>
</nav>
