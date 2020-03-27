<?php

namespace App\Http\Controllers\Learn\Lang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Learn\Lang\Sentence;

class SentenceController extends Controller {

    public function __construct() {
		return $this->middleware('auth');
    }
    
    public function index() {
        return view('learn.lang.sentence');
    }
}
