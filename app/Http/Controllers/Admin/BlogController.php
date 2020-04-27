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
use App\Http\Requests\UpdateBlog;

/** Image */
use Image;
use File;

class BlogController extends Controller {

    public function __construct() {

        /** define destination path and dimentions for images upload */
        $this->destinationPath  = storage_path() . '/app/public/uploads/images/blog';
        $this->dimentions       = [
            'image_xs'          => 82,
            'image_sm'          => 240,
            'image_md'          => 520,
            'featured_image'    => 780,
        ];

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

        /** if request has a file */
        if($file = $request->file('image')) {

            /** Jika folder destination belum ada maka buat folder tersebut */
            if(!file_exists($this->destinationPath)) {
                $createNewDirectories = 'public/uploads/images/blog';
                Storage::makeDirectory($createNewDirectories);
            }

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
        $post       = Blog::findOrFail($id);
        $status = Status::pluck('name', 'id');
        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('back.admin.blog.edit', compact('post', 'categories', 'status'));
    }


    public function update(Request $request, $id) {
        // $validated  = $request->validated();
        $blog   = Blog::findOrFail($id);
        
        $blog->title        = $request->title;
        $blog->slug         = Str::slug($request->slug, '-');
        $blog->description  = $request->description;
        $blog->keywords     = $request->keywords;
        $blog->content      = $request->content;

        $blog->update();
        
        return redirect()->route('admin.blog.index')
            ->with([
                'blog_update_success' => '',
                'status'    => 'success',
                'message'   => 'Posr berhasil diupdate!' 
            ]);
    }


    public function destroy($id) {
        Blog::findOrFail($id)->delete();
    }

}
