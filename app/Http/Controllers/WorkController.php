<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;

class WorkController extends Controller {
    public function index() {
        return view('front.works.index');
    }
}
