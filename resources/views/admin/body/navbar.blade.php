@if(Auth::User()->isactive == '1')
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>
        <span class="badge badge-warning navbar-badge">15</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-item dropdown-header">15 Notifications</span>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-envelope mr-2"></i> 4 new messages
          <span class="float-right text-muted text-sm">3 mins</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-users mr-2"></i> 8 friend requests
          <span class="float-right text-muted text-sm">12 hours</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-file mr-2"></i> 3 new reports
          <span class="float-right text-muted text-sm">2 days</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
      </div>
    </li>
    <li class="nav-item dropdown user-menu">
      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
      @php 
      $profile = Auth::User()->profile_photo_path;
      $name = Auth::User()->name;
      $fullName = Auth::User()->name.' '.Auth::User()->lname;
      $role = Auth::User()->role;
      $reg_date = Auth::User()->created_at;
      @endphp
        <img src="{{(!empty(Auth::User()->profile_photo_path))? url('uploads/userImages/'.$profile): url('uploads/userImages/maleDefault.png')}}" class="user-image img-circle elevation-2" alt="User Image">
        <span class="d-none d-md-inline">{{$name}}</span>
      </a>
      <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <!-- User image -->
        <li class="user-header bg-gray">
          <img src="{{(!empty(Auth::User()->profile_photo_path))? url('uploads/userImages/'.$profile): url('uploads/userImages/maleDefault.png')}}" class="img-circle elevation-2" alt="User Image">

          <p>
            {{$fullName}} - {{$role}}
            <small>Since {{$reg_date}}</small>
          </p>
        </li>
        <!-- Menu Footer-->
        <li class="user-footer bg-dark">
          <a href="#" class="btn btn-secondary btn-flat">Change pwd<span class="fa fa-key"></span></a>
          <a href="{{ route('logout')}}" class="btn btn-danger btn-flat float-right">Logout <span class="fa fa-power-off"></span></a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
        <i class="fas fa-th-large"></i>
      </a>
    </li>
  </ul>
</nav>
<!-- /.navbar -->
@endif