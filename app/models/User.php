<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use LaravelBook\Ardent\Ardent;

class User extends Eloquent implements UserInterface, RemindableInterface {
		
	
	public static $rules = [
	// 'username' => 'required|between:4,16',
	// 'email' => 'required|email',
	// 'password' => 'required|alpha_num|min:8|confirmed',
	// 'password_confirmation' => 'required|alpha_num|min:8',
	'firstname' 			=> 'required|alpha|min:2',
	'lastname' 				=> 'required|alpha|min:2',
	'username'	 			=> 'required|alpha_num|between:4,18',
	'email' 				=> 'required|email',
	'password' 				=> 'required|alpha_num|between:6,12|confirmed',
	'password_confirmation' => 'required|alpha_num|between:6,12',
	
	];
	/**
	 * Factory
	 */
	public static $factory = array(
		'username' => 'string',
		'firstname' => 'string',
		'lastname' => 'string',
		'email' => 'email',
		'password' => 'password',
		'password_confirmation' => 'password',
		'admin' => false
	);

	public $autoPurgeRedundantAttributes = true;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	public function posts() {
		// return $this->belongsToMany('Post', 'users_has_posts', 'users_id', 'posts_id')->withTimestamps();
		return $this->hasMany('Post');
		
	}
	public function follow() {
		return $this->belongsToMany('User', 'user_relationships', 'user_id', 'followed_id')->withTimestamps();
	}
	public function followers() {
		return $this->belongsToMany('User', 'user_relationships', 'followed_id', 'user_id')->withTimestamps();
	}
	public function group() {
		return $this->belongsToMany('Group');
	}
	
	// public function feeds() {
	// 	return $this->hasMany('Feed', 'sender_id');
	// }

}