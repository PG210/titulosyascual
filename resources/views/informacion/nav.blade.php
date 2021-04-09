<nav class="navbar navbar-expand-lg navbar-light beta">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{url('img/logo.jpeg')}}" class="imagen" alt="cargando ....">
            </a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
            </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/')}}"><h3 class="letra">Inicio</h3></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{route('historia')}}"><h3 class="letra">Historia</h3></a>
              </li>
                <li class="nav-item">
                <a class="nav-link" href="#"><h3 class="letra">Ubicacion</h3></a>
                </li>
            </ul>
            <ul class="nav justify-content-end">
            @if (Route::has('login'))
                <li class="nav-item">
                <div>
                    @auth
                        <a class="nav-link" href="{{ url('/dashboard') }}" >Dashboard</a>
                    @else
                        <a class="nav-link" href="{{ route('login') }}"><b>Iniciar sesion</b></a>
                </li>
                <li class="nav-item">
                        @if (Route::has('register'))
                            <a  class="nav-link" href="{{ route('register') }}"><b>Registrarse<b></a>
                        @endif
                    @endauth
                </div>
                </li>
                @endif
           </ul>
            </div>
        </div>
        </nav>