<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Work;
use App\Models\WorkStatus as Status;
use App\Models\WorkCategory as Category;

/** Helpers */
use Illuminate\Support\Str;

/** Request */
use App\Http\Requests\StoreWork;

/** Image */
use Image;

class WorkController extends Controller {
    public function __construct() {

        /** define destination path and dimentions for images upload */
        $this->destinationPath  = storage_path() . '/app/public/uploads/images/blog';
        $this->dimentions       = [
            'image_xs'          => 82,
            'image_md'          => 640,
        ];
        /** INGAT! Dimensi gambar untuk blog dan work itu berbeda */
    }

    public function index() {
        $pageTitle = 'Work';
        $works     = Work::orderby('created_at', 'DESC')->with(['category'])->paginate(6);
        return view('back.admin.works.index', compact('pageTitle', 'works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        $status = Status::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('back.admin.works.create', compact('categories', 'status'));
    }


    public function store(StoreWork $request) {
        $validated  = $request->validated();

        $data = $request->all();
        $data['user_id']    = getUserId();
        $data['slug']       = Str::slug($request->slug);

        /** get name */
        $workName = $request->name;

        /** if request has a file */
        if($file = $request->file('image')) {

            /** give a file name for image */
            $fileName       = Str::slug($workName) . '_' . Str::random(5);

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
        Work::create($data);

        return redirect()->route('admin.work.index')
            ->with([
                'work_create_success' => true,
                'status'    => 'success',
                'message'   => 'Work berhasil dibuat!' 
            ]);
    }


    public function edit($id) {
        /** untuk form model */
        $work       = Work::findOrFail($id);
        $status     = Status::pluck('name', 'id');
        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('back.admin.works.edit', compact('work', 'categories', 'status'));
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
        
        return redirect()->route('admin.work.index')
            ->with([
                'work_update_success' => true,
                'status'    => 'success',
                'message'   => 'Posr berhasil diupdate!' 
            ]);
    }


    public function destroy($id) {
        Work::findOrFail($id)->delete();
    }

}
