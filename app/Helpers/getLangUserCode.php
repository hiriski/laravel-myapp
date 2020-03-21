<?php

use App\User;
use Illuminate\Support\Facades\DB;

if (!function_exists('getLangUserCode')) {

	/**
	 * Get User Language Code 
	 * @param Int
	 * @return String
	 */
	function getLangUserCode($userId) {
		$user = User::where('id', $userId)->first();
		if($user->profile !== NULL) {
			if($userLangCode = $user->profile->language->code) {
				return $userLangCode;
			}
		}
		return App::getLocale();
	}

}