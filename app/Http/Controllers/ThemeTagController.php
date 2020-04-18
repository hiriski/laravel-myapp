<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ThemeTag as Tag;

class ThemeTagController extends Controller {
    
    public function index() {
        $tags = Tag::paginate(6);
        return view('front.theme.tags.index', compact('tags'));
    }

    public function show($slug) {
        $tag = Tag::where('slug', $slug)->firstOrFail();
        return view('front.theme.tags.show', compact('tag'));
    }
}
