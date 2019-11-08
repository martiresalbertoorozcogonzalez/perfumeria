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
          <a class="dropdown-item" href="#">Perfumes de Hombre</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Quienes somos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contacto</a>
      </li>


    <form class="form-inline">
      <div class="md-form my-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Que perfume buscas?" aria-label="Search">
      </div>
    </form>
      
    </ul>
    <!-- Links -->
     <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="nav-link" href="" data-toggle="modal" data-target="#modalLoginForm">{{ __('Login') }} </a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="" data-toggle="modal" data-target="#modalRegisterForm">{{ __('Register') }}</a>
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
                    <a class="dropdown-item" href="{{ route('home') }}">
                        {{ __('Admin') }}
                    </a>
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


{{-- Modal login --}}

<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header text-center">
    <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body mx-3">


<form method="POST" action="{{ route('login') }}">
    
        @csrf

    <div class="md-form mb-5">
        <i class="fas fa-envelope prefix grey-text"></i>
        <input class="form-control validate" id="email" type="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="md-form mb-4">
        <i class="fas fa-lock prefix grey-text"></i>
        <input class="form-control validate" id="password" type="password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
         @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>


    <div class="form-group row">
        <div class="col-md-6 offset-md-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>
    </div>

 

    </div>
    <div class="modal-footer d-flex justify-content-center">
    <button class="btn btn-default">Login</button>
    @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
    </div>
    
</form>
    
</div>
</div>
</div>


{{-- Modal de registro --}}

<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="POST" action="{{ route('register') }}">
        @csrf

      <div class="modal-body mx-3">
        
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" class="form-control validate" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
          <label data-error="wrong" data-success="right" for="name">Your name</label>
          @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" class="form-control validate" id="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
          <label data-error="wrong" data-success="right" for="email">Your email</label>
          @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input id="password" class="form-control validate" type="password" @error('password') is-invalid @enderror" name="password" required autocomplete="password">
          <label data-error="wrong" data-success="right" for="password">Your password</label>
          @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input id="password-confirm" type="password" class="form-control" name="password_confirm" required autocomplete="new-password">
          <label data-error="wrong" data-success="right" for="password-confirm">Password confirm</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-deep-orange">Sign up</button>
      </div>

      <form>
    </div>
  </div>
</div>