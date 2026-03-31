<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title') - Tulsi Admin</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('/assets/images/logos/favicon.png') }}" />
  <link rel="stylesheet" href="{{ asset('/assets/css/styles.min.css') }}" />
</head>
<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="{{ route('admin.dashboard') }}" class="text-nowrap logo-img">
            <img src="{{ asset('assets/images/logos/logo.svg') }}" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('admin.dashboard') }}" aria-expanded="false">
                <iconify-icon icon="solar:atom-line-duotone"></iconify-icon>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li>
              <span class="sidebar-divider lg"></span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('admin.booking.index') }}" aria-expanded="false">
                <iconify-icon icon="solar:calendar-outline"></iconify-icon>
                <span class="hide-menu">Booking Enquiry</span>
              </a>
            </li>
            <li>
              <span class="sidebar-divider lg"></span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)" aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                    <iconify-icon icon="solar:wheel-angle-bold-duotone"></iconify-icon>
                  </span>
                  <span class="hide-menu">Cabs/Taxi</span>
                </div>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"
                    href="{{ route('admin.cabs.add') }}">
                    <div class="d-flex align-items-center gap-3">
                      <span class="d-flex">
                        <span class="icon-small"></span>
                      </span>
                      <span class="hide-menu">Add Cab/Taxi</span>
                    </div>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"
                    href="{{ route('admin.cabs.index') }}">
                    <div class="d-flex align-items-center gap-3">
                      <span class="d-flex">
                        <span class="icon-small"></span>
                      </span>
                      <span class="hide-menu">View Cab/Taxi</span>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <span class="sidebar-divider lg"></span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)" aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                    <iconify-icon icon="solar:routing-2-bold-duotone"></iconify-icon>
                  </span>
                  <span class="hide-menu">Services</span>
                </div>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"
                    href="{{ route('admin.service.add') }}">
                    <div class="d-flex align-items-center gap-3">
                      <span class="d-flex">
                        <span class="icon-small"></span>
                      </span>
                      <span class="hide-menu">Add Service</span>
                    </div>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"
                    href="{{ route('admin.service.index') }}">
                    <div class="d-flex align-items-center gap-3">
                      <span class="d-flex">
                        <span class="icon-small"></span>
                      </span>
                      <span class="hide-menu">View Service</span>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="sidebar-divider lg"></li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('admin.gallery.index') }}" aria-expanded="false">
                <iconify-icon icon="solar:gallery-minimalistic-bold-duotone"></iconify-icon>
                <span class="hide-menu">Gallery</span>
              </a>
            </li>
            <li class="sidebar-divider lg"></li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('admin.settings') }}" aria-expanded="false">
                <iconify-icon icon="solar:settings-bold-duotone"></iconify-icon>
                <span class="hide-menu">Site Settings</span>
              </a>
            </li>
            <li class="sidebar-divider lg"></li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('admin.logout') }}" aria-expanded="false">
                <iconify-icon icon="solar:logout-line-duotone"></iconify-icon>
                <span class="hide-menu">Logout</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler " id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link " href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="{{ asset('assets/images/profile/user-1.jpg') }}" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="{{ route('admin.logout') }}" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="body-wrapper-inner">
        @yield('content')
      </div>
    </div>
  </div>
  <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>
  <script src="{{ asset('assets/js/app.min.js') }}"></script>
  <script src="{{ asset('assets/libs/simplebar/dist/simplebar.js') }}"></script>
  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>