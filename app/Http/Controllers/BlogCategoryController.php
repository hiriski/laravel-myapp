<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogCategory as Category;

class BlogCategoryController extends Controller {


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $categories = Category::all();
        $title      = 'Blog Category';
        return view('front.blog.categories.index', compact('categories', 'title'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug) {
        $category = Category::with(['blogs' => function($query) {
            $query->orderBy('created_at', 'DESC');
        }])->where('slug', $slug)->firstOrFail();

        return view('front.blog.categories.show', compact('category'));
    }

}
