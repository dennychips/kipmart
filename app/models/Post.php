<?php 

class Post extends Eloquent {
	protected $table = 'posts';
	public $timestamps = true;

	public function formattedCreatedDate() {        
		if($this->created_at->diffInDays() > 30) {
            return 'Created at ' . $this->created_at->toFormattedDateString();
        } else {
            return 'Created ' . $this->created_at->diffForHumans();
        }
    }

	public function user(){
		return $this->belongsTo('User', 'sender_id');
	}
	public function feeds() {
		return $this->hasMany('Feed');
	}
	public static function getStream(){
		$followed_id = UserRelationship::select('followed_id')->where('user_id', '=', Auth::user()->id)->get();
		// $ids = array();
		// print_r($followed_id);die();
		if(count($followed_id) > 0){
			foreach($followed_id->toArray() as $id ) {

				$ids[] =  $id['followed_id'];
			}
			$posts = DB::table('posts')
					->select('posts.message', 'posts.created_at', 'users.firstname', 'users.lastname', 'users.username')
					->whereIn('user_id', $ids)
					->leftJoin('users', 'users.id', '=', 'posts.user_id')
					->get();

			// print_r(DB::getQueryLog());die();
			// print_r($posts);die();
			return $posts;
		}
		return false;
		
	}
}