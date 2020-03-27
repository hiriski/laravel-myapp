<?php

namespace App\Http\Controllers\Api\Learn\Lang;

/** Sentence Resource */
use App\Http\Resources\Sentence as SentenceResource;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Learn\Lang\Sentence;

class SentenceController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        // $sentences  = Sentence::with(['user' => function($query) {
        //     $query->with(['profile' => function($query) {
        //         $query->get();
        //     }])->get();
        // }])->paginate(10);

        // return response()->json([
        //     'sentences'    => $sentences,
        // ], 200);
        return SentenceResource::collection(Sentence::paginate(1));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
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
