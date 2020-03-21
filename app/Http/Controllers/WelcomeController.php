<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App;

class WelcomeController extends Controller {

	public function __construct() {
		return $this->middleware('auth');
	}

	public function getUserLang() {
        /** check bahasa di profile user */
        $user_lang = Auth::user()->language;
        switch ($user_lang) {
            case "vn"	: App::setLocale($user_lang); break;
            case "id"	: App::setLocale($user_lang); break;
            default 	: App::setLocale("en"); break;
        }
        return $user_lang;
    }

    public function index() {
    	Self::getUserLang();
    	return view('welcome');
    }
}
