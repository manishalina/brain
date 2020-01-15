<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->

    <!-- SEARCH FORM -->
<!--     <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
 -->
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="btn btn-danger" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        </form>

      </li>
      <!-- Notifications Dropdown Menu -->
    
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
     <!--  <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8"> -->
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
   <!--    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ URL('blog') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Blog
              
              </p>
            </a>
          </li>

            <li class="nav-item">
            <a href="{{ URL('student') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Student
       
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="{{ URL('faq') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Faq
               
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ URL('news') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                News & Event
             
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="{{ URL('requestlist') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Request Guidance
               
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="{{ URL('subscribelist') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Subscribe
               
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="{{ URL('contactlist') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Contact Us
               
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="{{ URL('catlog') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Career Catalogue
               
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="{{ URL('feedback') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Student Feedback
              
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>