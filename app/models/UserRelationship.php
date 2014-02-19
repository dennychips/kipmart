<?php 

class UserRelationship extends Eloquent {
	protected $table = 'user_relationships';

	public function user() {
		return $this->belongsTo('User');
	}
	// public static function checkFollowing($followed_id) {
	// 	$user_id = Auth::user()->id;
	// 	$following = DB::table('user_relationships')
	// 						->where('user_id', '=', $user_id)
	// 						->where('followed_id', '=', $followed_id)
	// 						->get();
	// 	// var_dump($following);
	// 	// var_dump(DB::getQueryLog());
	// 	if(count($following) > 0){
	// 		return true;
	// 	} else {
	// 		return false;
	// 	}
		
	// }
	// public static function followingID($followed) {
	// 	$user = Auth::user();
	// 	$following = DB::table('user_relationships')
	// 			->where('user_id', '=', $user->id)
	// 			->where('followed_id', '=', $followed)
	// 			->first();
	// 	// var_dump($following->id);
	// 	// var_dump(DB::getQueryLog());
		
	// 	if(count($following) > 0){
	// 		return $following->id;
	// 	} else {
	// 		return false;
	// 	}
	// }


	// public static function getAllFollowingID() {
	// 	$user = Auth::user();
	// 	$following = DB::table('user_relationships')
	// 			->where('user_id', '=', $user->id)
	// 			->get();
	// 	// var_dump($following->id);
	// 	// var_dump(DB::getQueryLog());
	// 	return $following;
		
	// }
	public function feeder() {
		return $this->morphMany('Feed', 'feedable');
	}
}