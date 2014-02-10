@extends('layouts.form')

@section('content')
<div class="col-lg-4 col-lg-offset-4 m-t-large">
  <section class="panel">
    <header class="panel-heading text-center">
      Sign in
    </header>
    <!-- <form action="index.html" class="panel-body"> -->
    {{Form::open(['route' => 'user.login', 'class' => 'panel-body'])}}
      @if(Session::has('message'))
            <p class="alert alert-info">{{ Session::get('message') }}</p>
        @endif
        <ul class="list-unstyled">
        @foreach($errors->all() as $error)
            <li class="alert alert-danger">{{ $error }}</li>
        @endforeach
        </ul>
      <div class="block">
        {{Form::label('username', 'Username',['class' => 'control-label'])}}
        {{ Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'john.doe']) }}
        
      </div>
      <div class="block">
        {{Form::label('password', 'Password',['class' => 'control-label'])}}
        {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'your password']) }}
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox"> Keep me logged in
        </label>
      </div>
      <a href="#" class="pull-right m-t-mini"><small>Forgot password?</small></a>
      {{ Form::submit('Login', ['class' => 'btn btn-info']) }}
      <div class="line line-dashed"></div>
      <a href="#" class="btn btn-facebook btn-block m-b-small"><i class="fa fa-facebook pull-left"></i>Sign in with Facebook</a>
      <a href="#" class="btn btn-twitter btn-block"><i class="fa fa-twitter pull-left"></i>Sign in with Twitter</a>
      <div class="line line-dashed"></div>
      <p class="text-muted text-center"><small>Do not have an account?</small></p>
      <a href="signup.html" class="btn btn-white btn-block">Create an account</a>
    </form>
  </section>
</div>

@stop

@section('footerscript')
	@parent
	{{HTML::script('assets/js/app.plugin.js', ['type'=> 'text/javascript'])}}
	{{HTML::script('assets/js/app.data.js', ['type'=> 'text/javascript'])}}
@stop