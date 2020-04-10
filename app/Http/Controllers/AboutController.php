<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller {
    public function index() {
        $about = About::findOrFail(1);
        return view('front.about', ['about' => $about]);
    }
}
