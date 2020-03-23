<?php

namespace App\Http\Controllers\Api\Learn\Lang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Learn\Lang\Phrase;
use Illuminate\Support\Facades\Response;

class PhraseController extends Controller {
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $phrases  = Phrase::with(['user' => function($query) {
            $query->with(['profile' => function($query) {
                $query->get();
            }])->get();
        }])->paginate(12);

        return Response::json($phrases);
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
