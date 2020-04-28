<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Setting;
use App\Models\Language;

class SettingController extends Controller {

    public function __construct() {
        $this->page_title = "Setttings";
    }

    public function index() {
        $settings   = Setting::findOrFail(1);
        $languages  = Language::pluck('name', 'id');
        $page_title = $this->page_title;

        return view('back.admin.settings', compact(
            'languages',
            'settings',
            'page_title'
        ));
    }


    public function update(Request $request) {
        $settings = Setting::findOrFail(1);
        $settings->title = $request->title;
        $settings->app_name = $request->app_name;
        $settings->description = $request->description;
        $settings->keywords = $request->keywords;
        $settings->save();

        return redirect()->back()->with([
            'status'    => 'success',
            'message'   => 'Setting updated!'
            ]);
    } 
}
