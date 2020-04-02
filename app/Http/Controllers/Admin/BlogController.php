<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Str;

use Auth;
use App\Models\Blog;
use App\Models\BlogCategory as Category;
use App\Models\BlogStatus as Status;

use App\Http\Requests\StoreBlog;

/** Image */
use Image;
use File;

class BlogController extends Controller {

    public function __construct() {

        /** define destination path and dimentions for images upload */
        $this->destinationPath  = public_path() . '/uploads/blog/';
        $this->dimentions       = [
            'image_xs'          => 82,
            'image_sm'          => 240,
            'image_md'          => 520,
            'featured_image'    => 780,
        ];

        return $this->middleware('auth');
    }

    public function index() {
        $pageTitle = 'Blog';
        $posts = Blog::orderby('created_at', 'DESC')->with(['category'])->paginate(6);
        return view('back.admin.blog.index', compact('pageTitle', 'posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        $status = Status::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('back.admin.blog.create', compact('categories', 'status'));
    }


    public function store(StoreBlog $request) {
        $validated  = $request->validated();

        $data = $request->all();
        $data['user_id']    = getUserId();
        $data['slug']       = Str::slug($request->slug);

        /** result checkbox dari blade ternyata hasilnya "On" jika ti check (dalam string) */
        if(!empty($request->show_sidebar)) {
            $data['show_sidebar'] = 1;
        }

        /** get title */
        $title = $request->title;

        /** if directory doesn't exists, create directory  */
        if (!File::isDirectory($this->destinationPath)) {
            File::makeDirectory($this->destinationPath);
        }
        

        /** if request has a file */
        if($file = $request->file('image')) {

            /** give a file name for image */
            $fileName       = Str::slug($title) . '_' . Str::random(5);

            /** get extension file. example : .jpg, .png  */
            $fileExtension  = '.' . $file->getClientOriginalExtension();

            /** loop dimentions */
            foreach($this->dimentions as $row => $dimention) {

                /** resize image by (width) and keep aspect ratio */
                $img = Image::make($file);
                $img->resize($dimention, null, function($constraint) {
                    $constraint->aspectRatio();
                });

                /** Image. example hello_XHrSc_240.jpg, example hello_XHrSc_780.jpg  */
                $imageFile = $fileName . '_' . $dimention . $fileExtension;

                /** Save image */
                $img->save($this->destinationPath . '/' . $imageFile);

                /** add to request with dimention */
                $data[$row]  = $imageFile;

            }

            $originalImageSize = Image::make($file)->save($this->destinationPath . '/' . $fileName . $fileExtension);

            /** add to request original image size */
            $data['image']      = $fileName . $fileExtension;

        }

        /** insert to the database */
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
        $post       = Blog::where('id', $id)->first();
        $status = Status::pluck('name', 'id');
        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('back.admin.blog.edit', compact('post', 'categories', 'status'));
    }

    public function update(Request $request, $id) {
        // $validated  = $request->validated();
        $blog = Blog::find($id)->first();
        $data = $request->all();


        /** if request has a file */
        if($file = $request->file('image')) {

            /** give a file name for image */
            $fileName       = Str::slug($title) . '_' . Str::random(5);

            /** get extension file. example : .jpg, .png  */
            $fileExtension  = '.' . $file->getClientOriginalExtension();

            /** loop dimentions */
            foreach($this->dimentions as $row => $dimention) {

                /** resize image by (width) and keep aspect ratio */
                $img = Image::make($file);
                $img->resize($dimention, null, function($constraint) {
                    $constraint->aspectRatio();
                });

                /** Image. example hello_XHrSc_240.jpg, example hello_XHrSc_780.jpg  */
                $imageFile = $fileName . '_' . $dimention . $fileExtension;

                /** Save image */
                $img->save($this->destinationPath . '/' . $imageFile);

                /** add to request with dimention */
                $data[$row]  = $imageFile;

            }

            $originalImageSize = Image::make($file)->save($this->destinationPath . '/' . $fileName . $fileExtension);

            /** add to request original image size */
            $data['image']      = $fileName . $fileExtension;

        }

        dd($data);
        $blog->save($data);

        return redirect()->route('admin.blog.index')
            ->with([
                'blog_update_success' => '',
                'status'    => 'success',
                'message'   => 'Posr berhasil diupdate!' 
            ]);
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
