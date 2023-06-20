<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
      <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
      <!-- nav bar -->
      <div class="w-100 mb-4 d-flex">
        <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
          <img src="{{ asset('assets/img/favicon.png') }}" alt="..." class="avatar-img">
          
        </a>
      </div>
      <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item w-100">
          <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fe fe-home fe-16"></i>
            <span class="ml-3 item-text">Home</span>
          </a>
        </li>
      </ul>
      <p class="text-muted nav-heading mt-4 mb-1">
        <span>Components</span>
      </p>
      <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item dropdown">
          <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-grid fe-16"></i>
            <span class="ml-3 item-text">Berita</span>
          </a>
          <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
            <li class="nav-item">
              <a class="nav-link pl-3" href="./ui-progress.html"><span class="ml-1 item-text">Semua Berita</span></a>
            </li>
          </ul>
        </li>
      </ul>
      <p class="text-muted nav-heading mt-4 mb-1">
        <span>Users</span>
      </p>
      <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item w-100">
          <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fe fe-user fe-16"></i>
            <span class="ml-3 item-text">Profile</span>
          </a>
        </li>
        <li class="nav-item w-100">
          <form method="POST" action="{{ route('logout') }}"">
            @csrf
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
            this.closest('form').submit();">
             <i class="fe fe-log-out fe-16"></i>
             <span class="ml-3 item-text">Logout</span>
            </a>
           
        </form>
        </li>
      </ul>
    </nav>
  </aside>