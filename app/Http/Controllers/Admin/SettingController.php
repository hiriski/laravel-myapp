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

    $settings->show_featured_post = !empty($request->show_featured_post) ? $request->show_featured_post : 0;

    $settings->show_blog_homepage = !empty($request->show_blog_homepage) ? $request->show_blog_homepage : 0;

    $settings->show_work_homepage = !empty($request->show_work_homepage) ? $request->show_work_homepage : 0;

    $settings->save();

    return redirect()->back()->with([
      'status'    => 'success',
      'message'   => 'Setting updated!'
      ]);
  }
}