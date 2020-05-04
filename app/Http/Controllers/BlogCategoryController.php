<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogCategory as Category;
use App\Models\Blog;

/** SEO */
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

/** Global Settings */
use App\Models\Setting;

class BlogCategoryController extends Controller {


  public function __construct() {
    /** Setting */
    $this->setting  = Setting::findOrFail(1);
    $this->post_perpage = $this->setting->blog_perpage;
    $this->tile_color   = "#f7f7f7"; // default tile color
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index() {

    $categories = Category::all();
    /** SEO META     */
    SEOMeta::setTitle('Blog Categories')
			->setDescription('Deskripsi halaman blog index disini')
			->setKeywords('Keyword1, keyword2 and more')
			->addMeta('author', 'Riski' . ', hi@riski.web.id', 'name')
			->addMeta('copyright', 'Riski Web ID', 'name')
			->addMeta('designer', 'Riski', 'name')
			->setCanonical(route('blog.category.index'));

    /** OpenGraph */
    OpenGraph::setTitle('Blog Category')
			->setDescription('Deskripsi halaman blog index disini')
			->setUrl(route('blog.category.index'))
			->setSiteName('Riski Web ID')
			->addImage(getBlogImage('image-jpg'))
			->addProperty('locale', 'id-ID')
			->addProperty('locale:alternate', ['id-ID', 'en-US']);

    return view('front.blog.categories.index', compact('categories'));
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($slug) {
    // $category = Category::with(['blogs' => function($query) {
    //   $query->orderBy('created_at', 'DESC')->paginate(10);
    // }])->where('slug', $slug)->firstOrFail();
    
    $category = Category::where('slug', $slug)->firstOrFail();
    $category_id = $category->id;
    $posts = Blog::with('category')->where('category_id', $category_id)->simplePaginate($this->post_perpage);
		
		/** Tile Color for Mobile Browsers */
    /** define tile color yang isinya warna default dari method __construct */
    $tile_color = $this->tile_color;
    /** jika tile color ada di database ubah isi variable $tile_color */
    if(!empty($category->tile_color)) {
      $tile_color = $category->tile_color;
    }

    /** SEO META     */
    SEOMeta::setTitle($category->name)
			->setDescription($category->description)
			->setKeywords($category->keywords)
			->addMeta('author', 'Riski' . ', hi@riski.web.id', 'name')
			->addMeta('copyright', 'Riski Web ID', 'name')
			->addMeta('designer', 'Riski', 'name')
			->setCanonical(route('blog.show', $category->slug));

    /** OpenGraph */
    OpenGraph::setTitle($category->name)
			->setDescription($category->description)
			->setUrl(route('blog.show', $category->slug))
			// ->addImage(getBlogImage($category->featured_image))
			// ->addProperty('type', 'article')
			->addProperty('locale', 'id-ID')
			->addProperty('locale:alternate', ['id-ID', 'en-US']);

    return view('front.blog.categories.show', compact(
      'category', 'posts', 'tile_color'
    ));
  }

}
