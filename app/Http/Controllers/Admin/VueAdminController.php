<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class VueAdminController extends Controller {

    public function __construct() {
        return $this->middleware('auth');
    }
    
    public function vue() {
        return view('back-vue.admin.index');
    }
}
