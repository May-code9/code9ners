<div class="sidebar-left">
  <div class="user-menu-items">
    <div class="list-unstyled btn-group">
      <button class="media btn btn-link dropdown-toggle"   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="message_userpic">
          <img class="d-flex" src="{{asset('img/mayowa.png')}}" alt="Generic user image">
        </span>
        <span class="media-body">
          <span class="mt-0 mb-1">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
          @if( Auth::user()->role == 4 )
          <small> Super Admin</small>
          @elseif(Auth::user()->role < 4)
          <small> Admin</small>
          @endif
        </span>
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="">Profile</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
        </form>
      </div>
    </div>
  </div>
  <br>
  <ul class="nav flex-column in" id="side-menu">
    <li class="title-nav">MENU</li>
    <li class="nav-item"><a  href="{{ route('private.dashboard') }}" class="nav-link">DashBoard</a></li>
    <li class="nav-item"> <a href="javascript:void(0)" class="nav-link menudropdown ">Subscribers<i class="fa fa-angle-down "></i></a>
      <ul class="nav flex-column nav-second-level">
        <li class="nav-item"><a class="nav-link" href="#">Address Information</a> </li>
        <li class="nav-item"><a class="nav-link" href="#">Contact Information</a> </li>
      </ul>
    </li>
    <li class="nav-item"><a  href="javascript:void(0)" class="nav-link menudropdown">Site Category<i class="fa fa-angle-down "></i></a>
      <ul class="nav flex-column nav-second-level">
        <li class="nav-item"><a class="nav-link" href="{{ route('siteCategory.create') }}"><i class="fa fa-edit"></i>Add</a> </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('siteCategory.index') }}"><i class="fa fa-search"></i>View</a> </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('siteCategoryTrash.index') }}"><i class="fa fa-trash"></i>Trash</a> </li>
      </ul>
    </li>
    <!-- <li class="nav-item"><a  href="#" class="nav-link">Teller</a></li> -->
    <li class="nav-item"><a  href="javascript:void(0)" class="nav-link menudropdown">Website<i class="fa fa-angle-down "></i></a>
      <ul class="nav flex-column nav-second-level">
        <li class="nav-item"><a class="nav-link" href="{{ route('website.create') }}"><i class="fa fa-edit"></i>Add</a> </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('website.index') }}"><i class="fa fa-search"></i>View</a> </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('websiteTrash.index') }}"><i class="fa fa-trash"></i>Trash</a> </li>
      </ul>
    </li>
    <li class="nav-item"><a  href="javascript:void(0)" class="nav-link menudropdown">Video<i class="fa fa-angle-down "></i></a>
      <ul class="nav flex-column nav-second-level">
        <li class="nav-item"><a class="nav-link" href="#">View Videos</a> </li>
        <li class="nav-item"><a class="nav-link" href="#">Upload Videos</a> </li>
      </ul>
    </li>
    <li class="nav-item"><a  href="#" class="nav-link">Customer Care</a></li>
    @if(Auth::user()->role == 4)
    <li class="title-nav">
      <hr>
    </li>
    <li class="title-nav">Super Admin</li>
    <li class="nav-item"><a  href="#" class="nav-link">Admin</a></li>
    <li class="nav-item"> <a href="javascript:void(0)" class="nav-link menudropdown ">Rewards<i class="fa fa-angle-down "></i></a>
      <ul class="nav flex-column nav-second-level">
        <li class="nav-item"><a class="nav-link" href="#">Create Price List</a> </li>
        <li class="nav-item"><a class="nav-link" href="#">View Price List</a> </li>
      </ul>
    </li>
    @endif
  </ul>
  <hr>

  <hr>

  <br>
</div>
