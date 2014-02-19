<!-- header -->
<header id="header" class="navbar navbar-fixed-top"  data-spy="affix" data-offset-top="1">
<div class="container">
  <button type="button" class="btn btn-link btn-sm pull-right visible-xs navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    <i class="fa fa-bars fa-lg text-default"></i>
  </button>
  <a class="navbar-brand" href="#">first</a>
  <p class="navbar-text pull-left text-muted hidden-xs"><small><em>Base on Bootstrap 3</em></small></p>
  <ul class="nav navbar-nav navbar-right collapse navbar-collapse">
    <li class="hide">
      <a href="#header">Home</a>
    </li>
    <li>
      <a href="#about">About</a>
    </li>
    <li>
      <a href="#features">Features</a>
    </li>
    <li>
      <a href="#screenshot">Screenshot</a>
    </li>
    <li>
      <a href="{{URL::route('user.create')}}">Register</a>
    </li>
    <li>
      <a href="{{URL::route('user.signin')}}">Sign In</a>
    </li>
  </ul>
</div>
</header>