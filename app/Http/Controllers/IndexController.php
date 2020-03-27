<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeaturePost;

class IndexController extends Controller {
	
	public function __construct() {
	}

	public function index() {
		$feature_posts = FeaturePost::all();
		return view('index', compact('feature_posts'));
	}
}
