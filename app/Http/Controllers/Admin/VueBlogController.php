<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class VueBlogController extends Controller {

    public function __construct() {
        return $this->middleware('auth');
    }
    
    public function vue() {
        return view('back-vue.admin.blog.index');
    }

}
