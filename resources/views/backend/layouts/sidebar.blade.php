<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/home" class="brand-link">
      <img src="{{ asset('backend/dist/img/Situsindo.jpg') }}" alt="CV Situsindo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Lisensi Sister</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
              <li class="nav-item">
                  <a href="{{ URL::to('/home') }}" class="nav-link">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>
                          Dashboard
                      </p>
                  </a>
              </li>

              <li class="nav-item">
                      <a href="{{ URL::to('/all-lisensi') }}" class="nav-link">
                      <i class="nav-icon fas fa-copy"></i>
                      <p>
                          Pengajuan Lisensi
                      </p>
                  </a>
              </li>

              <li class="nav-item">
                      <a href="{{ URL::to('/all-aktivasi') }}" class="nav-link">
                        <i class="nav-icon fas fa-key"></i>
                      <p>
                          Aktivasi
                      </p>
                  </a>
              </li>

              <li class="nav-item">
                <a href="{{ URL::to('/all-toko') }}" class="nav-link">
                      <i class="nav-icon fas fa-store"></i>
                      <p>
                          Toko
                      </p>
                  </a>
              </li>

              @if(auth()->user()->role=='Admin')

              <li class="nav-header">PENGGUNA</li>
              <li class="nav-item">
                  <a href="{{ URL::to('all-user') }}" class="nav-link">
                      <i class="nav-icon fas fa-users"></i>
                      <p>
                          Pengguna
                      </p>
                  </a>
              </li>

              <li class="nav-item">
                  <a href="{{ route('logout') }}" class="nav-link"
                      onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                      <i class="nav-icon fas fa-sign-out-alt"></i>
                      <p>
                          Logout
                      </p>
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
              </li>

              @endif

          </ul>
      </nav>
      <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
