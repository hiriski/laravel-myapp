<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Str;

use Auth;
use App\Models\Blog;
use App\Models\BlogCategory as Category;

use App\Http\Requests\StoreBlog;

/** Image */
use Image;
use File;

class BlogController extends Controller {

    public function __construct() {
        $this->destinationPath = public_path() . '/uploads/blog/';
        $this->dimentions      = ['240', '360', '640', null];

        return $this->middleware('auth');
    }

    public function index() {
        $pageTitle = 'Blog';
        $posts = Blog::orderby('created_at', 'DESC')->with(['category'])->paginate(6);
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


    public function store(StoreBlog $request) {
        $validated  = $request->validated();

        $data = $request->all();
        $data['user_id']    = getUserId();
        $data['slug']       = Str::slug($request->slug);

        /** get */
        $title = $data['title'];

        // Jika foldernya belum ada, maka buat folder tersebut
        if (!File::isDirectory($this->destinationPath)) {
            File::makeDirectory($this->destinationPath);
        }

        /** image */
        if($file = $request->file('image')) {

            /** give a file name for image */
            $fileName          = Str::slug($title) . '_' . Str::random(5) . '.' . $file->getClientOriginalExtension();

            /** looping dimention */
            foreach($this->dimentions as $dimentions) {
                /** membuat canvas image sebesar dimensi yang ada di dalam array */
                $canvas = Image::canvas($row, $row);

                /** resize image dan mempertahankan ratio */
                $resizeImage = Image::make($file)->resize($row, $row, function($constraint){
                    $constraint->aspectRatio();
                });

                /** Masukan image yang telah di resize ke dalam canvas */
                $canvas->insert($resizeImage, 'center');

                /** Simpan image */
                // $canvas->save($this->destinationPath . '/' . $fileName);
                $canvas->save($this->destinationPath . '/' . $row . '___' . $fileName);
            }

            /** Add to data */
            $data['image'] = $fileName;

            // $fileName          = Str::slug($title) . '_' . Str::random(5) . '.' . $image->getClientOriginalExtension();
            // $image->move($destinationPath, $fileName);

        }

        Blog::create($data);
        return redirect()->route('admin.blog.index')
            ->with([
                'blog_create_success' => '',
                'status'    => 'success',
                'message'   => 'Post berhasil dibuat!' 
            ]);
    }


    public function edit($id) {
        /** untuk form model */
        $blog       = Blog::where('id', $id)->first();

        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('admin.blog.edit', compact('blog', 'categories'));
    }

    public function update(Request $request, $id) {
        //
    }


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
