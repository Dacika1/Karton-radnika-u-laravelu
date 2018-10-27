 <!-- container section start -->
    <header class="header dark-bg">
      <a href="#" class="logo">
        <img src="{{ URL::to('/img/LOGO.png') }}" style="width: 36px; height: 36px; ">
      </a>
      <!--logo start-->
      <a href="index.html" class="logo"> &nbsp; МЕФ <span class="lite"> Факултет за 21. век</span></a>
  <div class="nav search-row" id="top_menu">
        <!--  search form start -->
  <ul class="nav top-menu">
    <li>
      @if(Auth::user()->user_role=='admin')
      <form class="navbar-form" method="get" action='{{url("/search")}}'>
        {{csrf_field()}}
        <input class="form-control" placeholder="Научни радови" type="text" name="search">
        <input class="form-control" placeholder="датум од" type="text" name="od">
        <input class="form-control" placeholder="датум до" type="text" name="do">
        <button type="submit" class="btn btn-default"><span>Тражи</span></button>
      </form>
      @endif
    </li>
  </ul>
  <!--  search form end -->
   </div>
<!--logo end-->
<!-- user login dropdown start-->
<ul class="nav navbar-nav navbar-right">
<li class="dropdown">
  <a data-toggle="dropdown" class="dropdown-toggle" href="#">
      <span class="profile-ava">
          <img src="uploads/avatars/{{Auth::user()->avatar}}" style="width: 36px; height: 36px; ">
      </span>
      <span class="username">{{ Auth::user()->name }}</span>
      <b class="caret"></b>
  </a>
  <ul class="dropdown-menu" role="menu">
    <li><a href="{{url('podaci')}}"><i class="fa fa-user"></i> Профил</a>
    </li>
    <li>
      <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            
       <i class="icon_key_alt"></i> {{ __('Излаз') }}</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
      </li>
    </li>
  </ul>
    </li>   
    <!-- user login dropdown end -->
  </ul>
  <!-- notificatoin dropdown end-->
</header>
