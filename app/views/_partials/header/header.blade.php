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
    <ul class="nav navbar-nav hidden-xs">
      <li>
      <div class="m-t-small"><a class="btn btn-sm btn-info" data-toggle="modal" href="#postModal"><i class="icon-plus"></i> POST</a></div>
      </li>
    </ul>

    <form class="navbar-form pull-left shift" action="" data-toggle="shift:appendTo" data-target=".nav-primary">
      <i class="icon-search text-muted"></i>
      <input type="text" class="input-sm form-control" placeholder="Search">
    </form>
    
  </header>
  <!-- / header -->