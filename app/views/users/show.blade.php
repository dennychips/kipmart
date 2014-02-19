@extends('layouts.profile')

@section('content')
<div class="col-lg-offset-4 col-lg-8">
<aside class="panel">
      <div class="text-center clearfix bg-white">
        <img src="http://www.gravatar.com/avatar/c0f502ad15f19b2ccb8105fcb7b35e20?s=320">
      </div>
      <div class="bg-light padder padder-v">
        <span class="h4">{{$user->firstname . ' ' . $user->lastname}}</span>
        <small class="block m-t-mini">Freelancer</small>
        <!-- <button class="btn btn-primary btn-sm active" data-toggle="button">
          <span class="text">
            <i class="fa fa-eye-slash"></i> Follow
          </span>
          <span class="text-active">
            <i class="fa fa-eye"></i> Following
          </span>
        </button> -->

        @if(Auth::user()->id != $user->id)
        <div class="relations-btn-{{ $user->id }}">
        	@if( $rel )
        		@include('_partials.unfollow', ['id' => $rel_id])
        	@else 
        		@include('_partials.follow', ['user_id' => $user->id])
        	@endif
        </div>
        @endif
      </div>
      <div class="list-group list-normal m-b-none">
        <a href="#" class="list-group-item">Activity</a>
        
      </div>
    </aside>
</div>
@stop

@section('footerscript')
@parent
	@include('_partials.scripts.relations', ['user_id' => $user->id ]);
@stop
