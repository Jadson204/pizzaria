      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="{{url('/')}}">PIZZA PLANET</a>
          <a class="sidebar-brand brand-logo-mini" href="{{url('/home.blade.php')}}"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item nav-category">
            <span class="nav-link">Navegação</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('users')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Usuários</span>
            </a>
          </li>
          
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/pizzas')}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Pizzas</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Funcionários</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/viewreservation')}}">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Reservas</span>
            </a>
          </li>
        </ul>
      </nav>
