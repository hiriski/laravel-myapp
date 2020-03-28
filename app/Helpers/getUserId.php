<?php

use Auth as UserAuth;

if(!function_exists('getUserId')) {

	/**
	 * Get User ID
	 * 
	 * @return Int - user id
	 */
	function getUserId() {
		$user_id = UserAuth::user()->id;
		return $user_id;
	}

}