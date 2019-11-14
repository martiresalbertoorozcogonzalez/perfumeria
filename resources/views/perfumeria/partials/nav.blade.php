<nav class="navbar navbar-expand-lg navbar-dark secondary-color lighten-3 navbar fixed-top navbar-expand-md navbar-light white double-nav scrolling-navbar">

<!-- Navbar brand -->
<span class="navbar-brand">PerfuVentas</span>

<!-- Collapse button -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
  aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<!-- Collapsible content -->
<div class="collapse navbar-collapse" id="basicExampleNav">

  <!-- Links -->
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="{{ url('/') }}">Home
        <span class="sr-only">(current)</span>
      </a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">Perfumeria</a>
      <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="{{ url('perfumemujer') }}">Perfumes de Mujer</a>
        <a class="dropdown-item" href="{{ url('perfumehombre')}}">Perfumes de Hombre</a>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ url('acercade') }}">Quienes somos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('contacto') }}">Contacto</a>
    </li>


   {{-- seccion de barra de busqueda --}}
  <form class="form-inline" action="/search" method="GET">
    {{ csrf_field()}}
    <div class="md-form my-0">
      <input class="form-control mr-sm-2" name="search" type="text" placeholder="Que perfume buscas?" aria-label="Search">
    </div>
  </form>
    


</ul>
  <!-- Links -->
    <!-- Right Side Of Navbar -->
  <ul class="navbar-nav ml-auto">
      <!-- Authentication Links -->
      @guest
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }} </a>
          </li>
          @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
          @endif
      @else
          <li class="nav-item avatar">
            <a class="nav-link p-0" href="#">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-1.jpg" class="rounded-circle z-depth-0"
                alt="avatar image" height="35">
            </a>
          </li>
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              @if (auth()->user()->hasRoles(['admin','usuario']))
                <a class="dropdown-item" href="{{ route('home') }}">
                 {{ __('Admin') }}
                </a>
              @endif
                  <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>
      
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>

              </div>
          </li>
      @endguest
  </ul>
</div>
<!-- Collapsible content -->

</nav>


