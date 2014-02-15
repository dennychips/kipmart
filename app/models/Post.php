<?php 

class Post extends Eloquent {
	
	protected $table = 'posts';
	protected $fillable = ['message'];

	public function user() {
		return $this->belongsTo('Post');
	}
	public function users() {
		return $this->belongsToMany('User', 'users_has_posts', 'posts_id', 'users_id')->withTimestamps();
	}
	public function group() {
		return $this->belongsTo('group');
	}

	public function comments() {
		return $this->morphMany('Comment', 'commentable');
	}
	
	// public function user(){
	// 	return $this->belongsTo('User', 'sender_id');
	// }
	// public function feeds() {
	// 	return $this->hasMany('Feed');
	// }
	// public static function getStream(){
	// 	$followed_id = UserRelationship::select('followed_id')->where('user_id', '=', Auth::user()->id)->get();
		
	// 	if(count($followed_id) > 0){
	// 		foreach($followed_id->toArray() as $id ) {

	// 			$ids[] =  $id['followed_id'];
	// 		}

	// 		$posts = DB::table('posts')
	// 				->select('posts.message', 'posts.created_at', 'users.firstname', 'users.lastname', 'users.username')
	// 				->whereIn('user_id', $ids)
	// 				->leftJoin('users', 'users.id', '=', 'posts.user_id')
	// 				->orderBy('created_at', 'desc')
	// 				->get();
			
	// 		return $posts;
	// 	}
	// 	return false;
		
	// }
}