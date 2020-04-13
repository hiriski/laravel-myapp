<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogTag as Tag;

class BlogTagController extends Controller {

    public function index() {
        $tags = Tag::paginate(6);
        return view('front.blog.tags.index', compact('tags'));
    }

    public function show($slug) {
        $tag = Tag::where('slug', $slug)->firstOrFail();
        return view('front.blog.tags.show', compact('tag'));
    }

}