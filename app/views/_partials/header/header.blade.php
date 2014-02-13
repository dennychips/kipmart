<!-- header -->
  <header id="header" class="navbar bg bg-black">
  
    <ul class="nav navbar-nav navbar-avatar pull-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">            
          <span class="hidden-xs-only">{{ Auth::user()->firstname . ' ' . Auth::user()->lastname }}</span>
          <span class="thumb-small avatar inline"><img src="{{ URL::asset('assets/img/avatar.jpg') }}" alt="Mika Sokeil" class="img-circle"></span>
          <b class="caret hidden-xs-only"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Settings</a></li>
          <li><a href="#">Profile</a></li>
          <li><a href="#"><span class="badge bg-danger pull-right">3</span>Notifications</a></li>
          <li class="divider"></li>
          <li><a href="docs.html">Help</a></li>
          <li>{{ HTML::link('logout', 'Logout')}}</li>
        </ul>
      </li>
    </ul>

    <a class="navbar-brand" href="#">Market</a>
    
  </header>
  <!-- / header -->