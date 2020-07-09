<nav class="navbar navbar-expand-md navbar-dark bg-danger p-0">
  <div class="container">
    <a href="" class="navbar-brand">My Companys</a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav">
        <li class="nav-item px-2">
          <a href="/" class="nav-link active">Company</a>
        </li>
        <li class="nav-item px-2">
          <a href="{{ route('PIC.index') }}" class="nav-link active">PIC</a>
        </li>
        <li class="nav-item px-2">
          <a href="" class="nav-link active">Manajemen User</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown mr-3">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-user"></i> Hi, Admin
          </a>
          <div class="dropdown-menu">
            <a href="profile.html" class="dropdown-item">
              <i class="fa fa-sign-out-alt"></i> Logout
            </a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>