<?php 

class Feed extends Eloquent {
	protected $table = 'feeds';
	
	public function user(){
		return $this->belongsToMany('User');
	}

	public function feedable() {
		return $this->morphTo();
	}
}