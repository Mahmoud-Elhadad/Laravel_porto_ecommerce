

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index">
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
