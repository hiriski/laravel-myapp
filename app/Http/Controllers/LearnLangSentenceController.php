<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\LearnLangSentence;
use App\LearnLangSentenceCategory;
use App\LearnLangSentenceLevel;

// use Illuminate\Support\Str;

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
        $sentence = new LearnLangSentence;

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        dd($data);
        $sentence->save();
        return redirect()->route('sentence.index');
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
