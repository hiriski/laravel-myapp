<?php

use App\User;

if(!function_exists('getUserPic')) {

	/**
	 * Get User Profile Picture
	 * 
	 * @param Int - User ID
	 * @return String - picture size
	 */
	function getUserPic($userId, $size = NULL) {
		$path 			= url('images/profiles/');
		$user 			= User::where('id', $userId)->first();
		$userPic;
		switch($size) {
			case "sm"	: $userPic  = $path . '/' . $user->profile->image_sm; break;
			case "md" 	: $userPic  = $path . '/' . $user->profile->image_md; break;
			default 	: $userPic  = $path . '/' . $user->profile->image;    break;
		}
		return $userPic;
	}

}