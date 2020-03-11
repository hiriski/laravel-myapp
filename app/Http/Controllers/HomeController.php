<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    public function getUserLang() {
        /** check bahasa di profile user */
        $user_lang = Auth::user()->profile->language;
        switch ($user_lang) {
            case "vn": App::setLocale($user_lang); break;
            case "id": App::setLocale($user_lang); break;
            default : App::setLocale("en"); break;
        }
        return $user_lang;
    }

    public function index() {
        $this->getUserLang();
        return view('home');
    }
}
