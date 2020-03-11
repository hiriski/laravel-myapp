<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LearnLangPhrase;
use Auth;
use App;

class LearnLangPhraseController extends Controller {

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
        $phrases = LearnLangPhrase::paginate(20);
        return view('learn.lang.phrase.index', array( "phrases" => $phrases));
    }


    public function create() {
        $this->getUserLang();
        //
    }


    public function store(Request $request) {
        $this->getUserLang();
        //
    }


    public function show($id) {
        $this->getUserLang();
        //
    }


    public function edit($id) {
        $this->getUserLang();
        //
    }


    public function update(Request $request, $id) {
        $this->getUserLang();
        //
    }


    public function destroy($id) {
        $this->getUserLang();
        //
    }
}
