<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Str;

use Auth;
use App\Models\Theme;
use App\Models\ThemeCategory as Category;
use App\Models\ThemeStatus as Status;

use App\Http\Requests\StoreTheme;
use App\Http\Requests\UpdateTheme;

/** Image */
use Image;
use File;


class ThemeController extends Controller {

    public function __construct() {
        /** define destination path and dimentions for images upload */
        $this->destinationPath  = storage_path() . 'app/public/uploads/images/themes';
        $this->dimentions       = [
            'image_xs'          => 82,
            'image_sm'          => 240,
            'image_md'          => 560,
            'featured_image'    => 840,
        ];
    }

    /** List of themes */
    public function index() {
        $pageTitle = 'Theme';
        $themes = Theme::orderby('created_at', 'DESC')->with(['category'])->paginate(6);
        return view('back.admin.themes.index', compact('pageTitle', 'themes'));
    }

    /** Create A New Theme */
    public function create() {
        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        $status = Status::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('back.admin.themes.create', compact('categories', 'status'));
    }

    /** Store Theme to the Database */
    public function store(StoreTheme $request) {
        $validated  = $request->validated();

        $data = $request->all();
        $data['user_id']    = getUserId();
        $data['slug']       = Str::slug($request->slug);

        /** get title */
        $title = $request->title;

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
        Theme::create($data);

        return redirect()->route('back.admin.theme.index')
            ->with([
                'theme_create_success' => '',
                'status'    => 'success',
                'message'   => 'Theme berhasil dibuat!'
            ]);
    }


    /** Edit specific theme by id */
    public function edit($id) {
        /** untuk form model */
        $theme      = Theme::findOrFail($id);
        $status     = Status::pluck('name', 'id');
        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('back.admin.themes.edit', compact('theme', 'categories', 'status'));
    }


    /** Update the specified resource in storage.  */
    public function update(Request $request, $id) {
        // $validated  = $request->validated();
        $theme   = Theme::findOrFail($id);
        
        $theme->title        = $request->title;
        $theme->slug         = Str::slug($request->slug, '-');
        $theme->description  = $request->description;
        $theme->keywords     = $request->keywords;

        $theme->update();
        
        return redirect()->route('admin.blog.index')
            ->with([
                'theme_update_success' => '',
                'status'    => 'success',
                'message'   => 'Theme berhasil diupdate!'
            ]);
    }

    
    /** Remove the specified resource from storage. */
    public function destroy($id) {
        Theme::destroy($id);
    }
}
