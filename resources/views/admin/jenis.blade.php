<!DOCTYPE html>
<html lang="en">
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin AllStar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('Alladmin')}}/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="{{asset('Alladmin')}}/vendors/feather/feather.css" />
    <link rel="stylesheet" href="{{asset('Alladmin')}}/vendors/base/vendor.bundle.base.css" />
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{asset('Alladmin')}}/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="{{asset('Alladmin')}}/vendors/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{asset('Alladmin')}}/vendors/jquery-bar-rating/fontawesome-stars-o.css"/>
    <link rel="stylesheet" href="{{asset('Alladmin')}}/vendors/jquery-bar-rating/fontawesome-stars.css"/>
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('Alladmin')}}/css/style.css" />
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('Alladmin')}}/images/favicon.png" />
</head>
<body>
<div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div
          class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center"
        >
          <a class="navbar-brand brand-logo" href="index.html"
            ><img src="{{asset('Alladmin')}}/images/allstar.png" alt="logo"
          /></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"
            ><img
              src="{{asset('Alladmin')}}/images/allstar.png
            "
              alt="logo"
          /></a>
        </div>
        <div
          class="navbar-menu-wrapper d-flex align-items-center justify-content-end"
        >
          <button
            class="navbar-toggler navbar-toggler align-self-center"
            type="button"
            data-toggle="minimize"
          >
            <span class="icon-menu"></span>
          </button>
          <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="search">
                    <i class="icon-search"></i>
                  </span>
                </div>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Search Projects.."
                  aria-label="search"
                  aria-describedby="search"
                />
              </div>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">

          </ul>
          <button
            class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
            type="button"
            data-toggle="offcanvas"
          >
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-profile">
            <div class="user-image">
              <img src="{{asset('Alladmin')}}/images/faces/kita2.jpg" />
            </div>
            <div class="user-name">AllStar</div>
            <div class="user-designation">Admin</div>
          </div>
          <ul class="nav">
          <li class="nav-item">
              <a class="nav-link" href="user">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Data User</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dashboard">
                <i class="icon-command menu-icon"></i>
                <span class="menu-title">Data Boneka</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="jenis">
                <i class="icon-command menu-icon"></i>
                <span class="menu-title">Data Jenis Boneka</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="template">
                <i class="icon-box menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}" class="nav-link ">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        <i class="icon-arrow-right menu-icon">
                                            
                          {{ __('Logout') }} </i>
                    </x-responsive-nav-link>
                </form>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-sm-12 mb-4 mb-xl-0">
                
                
              </div>
            </div>
<div class="container">
    <h1>Data Jenis Boneka</h1>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Jenis Boneka</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jenis as $jenis)
            <tr>
                <td>{{ $jenis->id }}</td>
                <td>{{ $jenis->jenis }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div> 
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->

          <footer class="footer">
            <center><div>
              <span
                class="text-muted d-block text-center text-sm-left d-sm-inline-block"
                >Copyright © AllStar</span>
            </div></center>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    
</body>
</html>