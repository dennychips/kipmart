{{ Form::open(array('route' => array('connection.store'), 'class' => 'follow')) }}
<button class="btn btn-info btn-xs active">Follow</button>
{{ Form::hidden('user_id', $user_id) }}
{{Form::close()}}