<?php

namespace App\Http\Controllers;

use App\LearnLangPhraseCategory;
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
        
        $class      = 'form-control';
        $categories = LearnLangPhraseCategory::orderBy('name', 'ASC')
                                        ->pluck('name', 'id');
        
        return view('learn.lang.phrase.create', compact(
            'class', 'categories'
            ));
    }


    public function store(Request $request) {
        $this->getUserLang();

        $data = $request->all();
        $data['user_id']        = Auth::user()->id;
        $data['category_id']    = (int)$request->category_id;
        LearnLangPhrase::create($data);

        return redirect()->route('phrase.index')
            ->with(['success' => 'The Phrase has been created!']);
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
