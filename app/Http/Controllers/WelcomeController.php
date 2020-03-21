<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App;

class WelcomeController extends Controller {

	public function __construct() {
		return $this->middleware('auth');
	}

    /**
     * Set bahasa untuk
     * @param String
     * @return String
     */
    public function getUserLang() {
        $userLang = Auth::user()->profile->language;
        return App::setLocale($userLang);
    }


    public function index() {
        Self::getUserLang();
    	return view('welcome');
    }
}
