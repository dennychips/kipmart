
<script type="text/javascript">

$('.relations-btn-{{$user_id}}').on('submit','.unfollow', function(e){
	e.preventDefault();
	
	 var action = $(this).attr("action")
	$.ajax({
		type : 'POST',
		data : $(this).serialize(),
		url: action,
		success: function(response) {
			// console.log($('.relations-btn-{{$user_id}}').find('form'));
			$('.relations-btn-{{$user_id}}').find('form').remove();
			$('.relations-btn-{{ $user_id }}').append(response.html);
		}
	})	
})

$('.relations-btn-{{$user_id}}').on('submit','.follow', function(e){
	e.preventDefault();
	var action = $(this).attr('action');
	$.ajax({
		type : 'POST',
		data : $(this).serialize(),
		url : action,
		success : function(r){
			// $('#follow_id_{{ $user_id }}').remove();
			$('.relations-btn-{{$user_id}}').find('form').remove();
			$('.relations-btn-{{ $user_id }}').append(r.html);	
		}
	})	
})
</script>