<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Advanced admin login">
  <meta name="author" content="Admin Dashboard">

  <title>Admin Panel - Login</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset("dashboard")}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="{{ asset("dashboard") }}/css/sb-admin.css" rel="stylesheet">



</head>

<body class="bg-dark" style="background: url('{{ asset("storage/images/wallpaperflare.com_wallpaper (12).jpg") }}') center/cover">

  <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="card shadow-lg border border-1" style="max-width: 900px; width: 100%; overflow: hidden; background: linear-gradient(rgba(0,0,0,0.4) , rgba(0,0,0,0.4)); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px);  ">
      <div class="row no-gutters">

        <!-- Left side: branding / illustration -->
        <div class="col-md-5 d-none d-md-flex flex-column justify-content-center text-white" style="border-right: 1px solid white" >
          <div class="p-4">
            <h3 class="font-weight-bold mb-3">
              <i class="fas fa-chart-line mr-2"></i>
              Admin Dashboard
            </h3>
            <p class="mb-4">
              Manage your products, categories, and admins from one powerful control panel.
            </p>
            <ul class="list-unstyled small mb-0">
              <li class="mb-2"><i class="fas fa-check-circle mr-2"></i>Real-time overview</li>
              <li class="mb-2"><i class="fas fa-check-circle mr-2"></i>Secure access</li>
              <li><i class="fas fa-check-circle mr-2"></i>Fast & responsive UI</li>
            </ul>
          </div>
        </div>

        <!-- Right side: login form -->
        <div class="col-md-7 text-white">
          <div class="card-body">
            <div class="text-center mb-4">
              <h4 class=" mb-1">Welcome Back</h4>
              <p class="small text-muted mb-0">Sign in to continue to your dashboard</p>
            </div>

            @if (session("message"))
             <div class="alert alert-danger text-center mb-3">{{ session("message") }}</div>
            @endif
            @if (session("login"))
             <div class="alert alert-danger text-center mb-3">{{ session("login") }}</div>
            @endif

        <form action="{{ route("login.check") }}" method="post">
            @csrf
          <div class="form-group">
            <div class="form-label-group">
              <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
              <label  style="cursor: pointer" for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
              <label style="cursor: pointer"  for="inputPassword">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember me
              </label>
            </div>
          </div>
          <button class="btn btn-primary btn-block font-weight-bold">
              <i class="fas fa-sign-in-alt mr-1"></i>
              Sign In
          </button>
        </form>
        <div class="text-center mt-3">
          <a class="d-block small" href="#">Forgot your password?</a>
        </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset("dashboard")}}/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset("dashboard")}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset("dashboard")}}/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
