<?php 

class Group extends Eloquent {
	public function users() {
		return $this->belongsToMany('Groups');
	}

	public function posts() {
		return $this->hasMany('Post')
	}
}