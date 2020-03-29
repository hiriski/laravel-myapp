<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Str;

use Auth;
use App\Models\Blog;
use App\Models\BlogCategory as Category;

use App\Http\Requests\StoreBlog;

class BlogController extends Controller {

    public function __construct() {
        return $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $pageTitle = 'Blog';
        $posts = Blog::with(['category'])->paginate(12);
        return view('admin.blog.index', compact('pageTitle', 'posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('admin.blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlog $request) {
        $validated  = $request->validated();
        $data = $request->all();
        $data['slug']       = Str::slug($data['title'], '-');
        $data['user_id']    = getUserId();

        Blog::create($data);
        return redirect()->route('admin.blog.index')
            ->with([
                'status'    => 'success',
                'message'   => 'Post berhasil dibuat!' 
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        /** untuk form model */
        $blog       = Blog::where('id', $id)->first();

        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('admin.blog.edit', compact('blog', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

    /** mencegah slug kembar */
    private function checkSlug($slug) {
        if(Blog::where('slug', $slug)->first() !== null) {
            return $slug . '-' . Str::random(3); // tambahkan random string
        } else {
            return $slug;
        }
    }

}
