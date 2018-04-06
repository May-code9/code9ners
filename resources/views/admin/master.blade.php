<!DOCTYPE html>
<html lang="en">
@include('admin.top.head')
<body class="menuclose menuclose-right">
  @if(Route::currentRouteName() == "register")
  <figure class="background"> <img src="{{asset('img/login_bg.jpg')}}" alt="Adminux- sign in "> </figure>
  @endif
  <!-- Page Loader -->
  <div class="loader_wrapper inner align-items-center text-center">
    <div class="load7 load-wrapper">
      <div class="loading_img"></div>
      <div class="loader"> Loading... </div>
      <div class="clearfix"></div>
    </div>
  </div>
  <!-- Page Loader Ends -->

  <header class="navbar-fixed">
    <nav class="navbar navbar-toggleable-md navbar-inverse bg-faded">
      <div class="sidebar-left"> <a class="navbar-brand imglogo" href="{{route('private.dashboard')}}"></a>
        <button class="btn btn-link icon-header mr-sm-2 pull-right menu-collapse" ><span class="fa fa-bars"></span></button>
      </div>
      <form class="form-inline mr-sm-2  pull-left search-header hidden-md-down">
        <input class="form-control " type="text" placeholder="Search" id="search_header">
        <button class="btn btn-link icon-header " type="submit"><span class="fa fa-search"></span></button>
      </form>
      <div class="d-flex mr-auto"> &nbsp;</div>
      <ul class="navbar-nav content-right">
        <li class="align-self-center hidden-md-down"> <a  href="{{ route('public_home') }}" class="btn btn-sm btn-primary mr-2"><span class="fa fa-home "></span> Home</a> </li>
        <li class="v-devider"></li>
      </ul>
      <div class="sidebar-right pull-right " >
        <ul class="navbar-nav  justify-content-end">
          <li class="nav-item">
            <button class="btn-link btn userprofile"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="userpic">
                <img src="{{asset('img/mayowa.png')}}" alt="user pic">
              </span>
              <span class="text">{{ Auth::user()->first_name }}</span>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="customerprofile.php">Profile</a>
              <a class="dropdown-item" href="#">Analytics Report</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Setting</a>
            </div>
          </li>
          <li>
            <a href="{{ route('logout') }}" class="btn btn-link icon-header" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="fa fa-sign-out"></span></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  @include('admin.top.leftbar')

  @yield('content')

  @include('admin.footer.footer')
  @include('admin.bottom.script')
</body>
</html>
