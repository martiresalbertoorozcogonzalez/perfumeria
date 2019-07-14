<!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" style="color:white;">PerfuVentas</a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/default.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Beto Orozco</div>
                    <div class="email">john.doe@example.com</div>
                    
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li>
                        <a href="{{ url('/') }}">
                            <i class="material-icons">home</i>
                            <span>Pagina principal</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{ url('/home') }}">
                            <i class="material-icons">dashboard</i>
                            <span>Admin</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('category') }}">
                            <i class="material-icons">list</i>
                            <span>Categorias</span>
                        </a>
                    </li>
                     <li>
                        <a href="{{ url('perfumeria') }}">
                            <i class="material-icons">store</i>
                            <span>Perfumeria</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                          <i class="material-icons">exit_to_app</i>
                          <span>Salir</span>
                        </a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                           @csrf
                         </form>

                        </li>   
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2019 <a href="javascript:void(0);">PerfuVentas</a>.
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
       
    </section>