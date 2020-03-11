<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profile;
use Auth;
use App;

class ProfileController extends Controller {

    public function __construct() {
        return $this->middleware('auth');
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
        $current_user = Profile::findOrFail(Auth::user()->id);
        return view('profile.index', array('profile' => $current_user));
    }


    public function create() {
        $this->getUserLang();
    }


    public function store(Request $request) {

    }


    public function show($id) {
        $this->getUserLang();
    }


    public function edit($id) {
        $this->getUserLang();
    }


    public function update(Request $request, $id) {
        
    }
    

    public function destroy($id) {
        
    }
}
