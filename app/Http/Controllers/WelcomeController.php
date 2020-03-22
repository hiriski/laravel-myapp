<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App;

class WelcomeController extends Controller {

	public function __construct() {
		return $this->middleware('auth');
	}

    public function index() {
    	$user 	= Auth::user();
        App::setLocale(getLangUserCode(Auth::user()->id));
    	return view('welcome', compact('user'));
    }

}
