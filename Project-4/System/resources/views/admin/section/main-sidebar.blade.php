@php
function checkRouteActive($route) {
    if (Route::current()->uri == $route) return 'active';
  }

@endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ url('public')}}/assets-admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SP Store</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('public')}}/assets-admin/dist/img/via2.jpg" class="img-circle elevation-2" alt="User Image" style="width: 40px; height: 40px;">
        </div>
        <div class="info">
          <a href="#" class="d-block">Syarifah Putri</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ url('dashboard')}}" class="nav-link {{ checkRouteActive('dashboard') }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="nav-item"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('produk')}}" class="nav-link {{ checkRouteActive('produk') }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Produk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('diskon')}}" class="nav-link {{ checkRouteActive('diskon') }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Diskon
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('kategori')}}" class="nav-link {{ checkRouteActive('kategori') }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Kategori
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link {{ checkRouteActive('pages') }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('supplier')}}" class="nav-link {{ checkRouteActive('supplier') }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Supplier</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('pelanggan')}}" class="nav-link {{ checkRouteActive('pelanggan') }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pelanggan</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>