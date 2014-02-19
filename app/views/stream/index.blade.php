@extends('layouts.default');

@section('content')
	<section class="comment-list block">
	
	@if($streams)
		@foreach($streams as $stream)
			
	    <article id="comment-id-1" class="comment-item media arrow arrow-left">
	      <a class="pull-left thumb-small avatar"><img src="{{ URL::asset('assets/img/avatar.jpg') }}" class="img-circle"></a>
	      <section class="media-body panel">
	        <header class="panel-heading clearfix">
	          <a href="{{ URL::route('user.show', $stream->username)}}">{{ $stream->firstname .' '. $stream->lastname}}</a>
	          <span class="text-muted m-l-small pull-right"><i class="fa fa-clock-o"></i> {{ $stream->created_at }} 24 minutes ago</span>
	        </header>
	        
	        <div class="panel-body">
	          <div>{{ $stream->message }}</div>
	          <div class="comment-action m-t-small">
	            <a href="#" data-toggle="class" class="btn btn-white btn-xs active">
	              <i class="fa fa-star-o text-muted text"></i><i class="fa fa-star text-danger text-active"></i> Like
	            </a>
	            <a href="#comment-form" class="btn btn-white btn-xs"><i class="fa fa-mail-reply text-muted"></i> Reply</a>
	          </div>
	        </div>
	        

	      </section>
	    </article>
	    	
	    @endforeach
	@else
	    <article id="comment-id-1" class="comment-item media arrow arrow-left">
	      <a class="pull-left thumb-small avatar"><img src="{{ URL::asset('assets/img/avatar.jpg') }}" class="img-circle"></a>
	      <section class="media-body panel">
	        <header class="panel-heading clearfix">
	          <a href="{{ URL::route('user.show', Auth::user()->username)}}">{{ Auth::user()->firstname .' '. Auth::user()->lastname}}</a>
	          <span class="text-muted m-l-small pull-right"><i class="fa fa-clock-o"></i> 24 minutes ago</span>
	        </header>
	        <div class="panel-body">
	          <div>Welcome to your stream</div>
	          <div class="comment-action m-t-small">
	            <a href="#" data-toggle="class" class="btn btn-white btn-xs active">
	              <i class="fa fa-star-o text-muted text"></i><i class="fa fa-star text-danger text-active"></i> Like
	            </a>
	            <a href="#comment-form" class="btn btn-white btn-xs"><i class="fa fa-mail-reply text-muted"></i> Reply</a>
	          </div>
	        </div>
	      </section>
	    </article>
    @endif
	  </section>


@stop