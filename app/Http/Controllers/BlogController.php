<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller {

    public function __construct() {
        return $this->middleware('auth')->only('create', 'update', 'delete');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $posts = Blog::with(['category'])->where('status_id', 1)
            ->orderBy('created_at', 'DESC')->paginate(6);
        $title = "Blog";
        return view('front.blog.index', compact('posts', 'title'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug) {
        $post = Blog::where('slug', $slug)->firstOrFail();
        return view('front.blog.show', compact('post'));
    }

}
