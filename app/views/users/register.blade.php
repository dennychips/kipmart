@extends('layouts.form')

@section('content')
<div class="col-lg-4 col-lg-offset-4 m-t-large">
  <section class="panel">
    <header class="panel-heading text-center">
      Register
    </header>
    
    {{Form::open(['route' => 'user.store', 'class="panel-body"'])}}

    	<ul class="list-unstyled">
    		@foreach($errors->all() as $error)
    			<li class="alert alert-danger">{{ $error }}</li>
    		@endforeach
    	</ul>
    	
      <div class="block">
      	{{Form::label('username', 'Username',['class' => 'control-label'])}}
        {{Form::text('username', null, ['class' => 'form-control', 'id' => 'username', 'placeholder' => 'eg. john.doe'])}}
      </div>
      <div class="block">
		{{Form::label('email', 'Email',['class' => 'control-label'])}}
        {{Form::text('email', null, ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'eg. jhon@example.org'])}}
      </div>
      <div class="block">
        {{Form::label('password', 'Password',['class' => 'control-label'])}}
        {{Form::password('password', ['class' => 'form-control', 'id' => 'password', 'placeholder' => 'your password'])}}
      </div>
      <div class="block">
        {{Form::label('password_confirmation', 'Password Confirmation',['class' => 'control-label'])}}
        {{Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'password_confirmation', 'placeholder' => 'password Confirmation'])}}
      </div>
      <div class="block">
        {{Form::label('firstname', 'First Name',['class' => 'control-label'])}}
        {{Form::text('firstname', null, ['class' => 'form-control', 'id' => 'firstname', 'placeholder' => 'First Name'])}}
      </div>
      <div class="block">
        {{Form::label('lastname', 'Last Name',['class' => 'control-label'])}}
        {{Form::text('lastname', null, ['class' => 'form-control', 'id' => 'lastname', 'placeholder' => 'Last Name'])}}
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox"> Agree the <a href="#">terms and policy</a>
        </label>
      </div>
      {{Form::submit('Register', ['class' => 'btn btn-info'])}}
      <div class="line line-dashed"></div>
      <div class="row">
        <div class="col-sm-6 text-center">
           <a href="#" class="btn btn-facebook btn-circle btn-sm"><i class="fa fa-facebook"></i>Sign up with Facebook</a>
        </div>
        <div class="col-sm-6 text-center">
          <a href="#" class="btn btn-twitter btn-circle btn-sm"><i class="fa fa-twitter"></i>Sign up with Twitter</a>
        </div>
      </div>
      <div class="line line-dashed"></div>
      <p class="text-muted text-center"><small>Already have an account?</small></p>
      <a href="signin.html" class="btn btn-white btn-block">Sign in</a>
    {{Form::close()}}
  </section>
</div>
@stop

@section('footerscript')
	@parent
	{{HTML::script('assets/js/app.plugin.js', ['type'=> 'text/javascript'])}}
	{{HTML::script('assets/js/app.data.js', ['type'=> 'text/javascript'])}}
@stop