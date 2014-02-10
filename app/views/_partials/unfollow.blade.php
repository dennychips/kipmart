{{Form::open(array('route' => array('connection.destroy', $id), 'method' => 'delete', 'class' => 'unfollow'))}}
{{Form::submit('Unfollow', array('class' => 'btn btn-danger btn-xs active') )}}
{{Form::close()}}