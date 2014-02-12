<?php 

class Feed extends Eloquent {
	protected $table = 'feeds';


	public function users() {
		return $this->belongsTo('User', 'sender_id');
	}
	public function posts() {
		return $this->belongsTo('Post', 'post_id');
	}

}