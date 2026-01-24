

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route("admin.index") }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Admins</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route("cat.index") }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Categories</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route("product.index") }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Products</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route("dashboard.message") }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Messages (<span class="text-primary">Porto</span>)</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route("dashboard.message") }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Messages (<span class="text-primary">Antomi</span>)</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Login Screens:</h6>
          <a class="dropdown-item" href="login.html">Login</a>
          <a class="dropdown-item" href="register.html">Register</a>
          <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Other Pages:</h6>
          <a class="dropdown-item" href="404.html">404 Page</a>
          <a class="dropdown-item" href="blank.html">Blank Page</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>


        @yield("body")
