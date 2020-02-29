<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\LearnLangSentence;
use App\LearnLangSentenceCategory;
use App\LearnLangSentenceLevel;

use Illuminate\Support\Str;

class LearnLangSentenceController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $sentence = LearnLangSentence::paginate(20);
        return view('learn.lang.sentence.index', array('sentence' => $sentence));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        $class = 'form-control';

        $categories = LearnLangSentenceCategory::orderBy('name', 'ASC')
            ->get()
            ->pluck('name','id');

        $levels = LearnLangSentenceLevel::orderBy('id', 'ASC')
            ->get()
            ->pluck('name','id');

        return view('learn.lang.sentence.create', compact(
            'categories', 'levels', 'class'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $this->validate($request, array(
            'indonesia'     => 'required|min:5',
            'category_id'   => 'required|integer',
            'level_id'      => 'required|integer'
        ));

        $data = $request->all();

        $slug = Str::slug($request->english, '-');
        /* cegah slug kembar */
        if( LearnLangSentence::where('slug', $slug)->first() != NULL ) {
            $data['slug'] = Str::slug($request->id . '-' . $request->english, '-');
        }
        else {
            $data['slug'] = $slug;
        }

        $data['user_id']        = Auth::user()->id;

        $data['category_id']    = (int)$request->category_id;
        $data['level_id']       = (int)$request->level_id;

        LearnLangSentence::create($data);

        return redirect()->route('sentence.index')
            ->with('success', 'Sentence has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
}
