<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;
use Auth;
use App\LearnLangSentence;
use App\LearnLangSentenceCategory;
use App\LearnLangSentenceLevel;

use Illuminate\Support\Str;

class LearnLangSentenceController extends Controller {

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
        $sentence = LearnLangSentence::paginate(20);
        return view('learn.lang.sentence.index', array('sentence' => $sentence));
    }


    public function create() {
        $this->getUserLang();

        $class = 'form-control';

        $categories = LearnLangSentenceCategory::orderBy('name', 'ASC')
            ->pluck('name','id');

        $levels = LearnLangSentenceLevel::orderBy('id', 'ASC')
            ->pluck('name','id');

        return view('learn.lang.sentence.create', compact(
            'categories', 'levels', 'class'
        ));
    }


    public function store(Request $request) {
        $this->getUserLang();

        $this->validate($request, array(
            'indonesia'     => 'required|min:5',
            'category_id'   => 'required|integer',
            'level_id'      => 'required|integer'
        ));
        
        $slug = Str::slug($request->english, '-');
        
        /* cegah slug kembar */
        if( LearnLangSentence::where('slug', $slug)->first() != NULL )
        $data['slug'] = $slug . '-' . Str::random(5);
        else
        $data['slug'] = $slug;

        $data = $request->all();
        $data['user_id']        = Auth::user()->id;
        $data['category_id']    = (int)$request->category_id;
        $data['level_id']       = (int)$request->level_id;

        LearnLangSentence::create($data);

        return redirect()->route('sentence.index')
            ->with('success', 'Sentence has been created!');
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
