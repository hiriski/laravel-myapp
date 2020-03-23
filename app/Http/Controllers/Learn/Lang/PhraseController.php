<?php

namespace App\Http\Controllers\Learn\Lang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Learn\Lang\Phrase;

class PhraseController extends Controller {
	public function index() {
    	return view('learn.lang.phrase');
    }   
}
