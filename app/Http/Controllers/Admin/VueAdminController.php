<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class VueAdminController extends Controller {
    public function vue() {
        return view('admin.vue.index');
    }
}
