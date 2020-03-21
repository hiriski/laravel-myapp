<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App;

class WelcomeController extends Controller {

	public function __construct() {
		return $this->middleware('auth');
	}

    public function index() {
        App::setLocale(getLangUserCode(Auth::user()->id));
    	return view('welcome');
    }

}
