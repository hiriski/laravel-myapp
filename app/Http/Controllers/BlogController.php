<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

/** SEO */
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

/** Global Settings */
use App\Models\Setting;

class BlogController extends Controller {

  public function __construct() {
    /** Setting */
    $this->setting  = Setting::findOrFail(1);
    $this->blog_perpage = $this->setting->blog_perpage;
    $this->tile_color   = "#f7f7f7"; // default tile color
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index() {
    $posts = Blog::with(['category'])->where('status_id', 1)
      ->orderBy('created_at', 'DESC')->simplePaginate($this->blog_perpage);

    /** SEO META     */
    SEOMeta::setTitle('📰 blog')
        ->setDescription('Blog belajar programming bahasa indonesia')
        ->setKeywords('Belajar programming, laravel, javascript, html, css3, vuejs, backend, frontend developer')
        ->addMeta('author', 'Riski' . ', hi@riski.web.id', 'name')
        ->addMeta('copyright', 'Riski Web ID', 'name')
        ->addMeta('designer', 'Riski', 'name')
        ->setCanonical(route('blog.index'));

    /** OpenGraph */
    OpenGraph::setTitle('📰 blog')
      ->setDescription('Artikel belajar programming bahasa indonesia')
      ->setUrl(route('blog.index'))
      ->addImage(getBlogImage('image-jpg'))
      ->addProperty('locale', 'id-ID')
      ->addProperty('locale:alternate', ['id-ID', 'en-US']);

    return view('front.blog.index', compact('posts'));
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($slug) {
    $post = Blog::where('slug', $slug)->where('status_id', 1)->firstOrFail();

    /** Tile Color for Mobile Browsers */
    /** define tile color yang isinya warna default dari method __construct */
    $tile_color = $this->tile_color;
    /** jika tile color ada di database ubah isi variable $tile_color */
    if(!empty($post->tile_color)) {
      $tile_color = $post->tile_color;
    }

    /** Related Posts */
    $related_post = Blog::with('category')->where('category_id', $post->category_id)
      ->orderBy('created_at', 'DESC')->take(4)->get();

    /** Next and Previous Post */
    $next_post_id   = Blog::where('id', '>', $post->id)->min('id');
    $prev_post_id   = Blog::where('id', '<', $post->id)->max('id');
    $blog_pager     = array(
      'next'      => Blog::where('id', $next_post_id)->first(),
      'previous'  => Blog::where('id', $prev_post_id)->first()
    );
    
    /** SEO META     */
    SEOMeta::setTitle($post->title)
      ->setDescription($post->description)
      ->setKeywords($post->keywords)
      ->addMeta('article:published_time', $post->created_at->toW3CString(), 'property')
      ->addMeta('article:section', $post->category->name, 'property')
      ->addMeta('author', $post->user->name . ', hi@riski.web.id', 'name')
      ->addMeta('copyright', 'Riski Web ID', 'name')
      ->addMeta('designer', 'Riski', 'name')
      ->setCanonical(route('blog.show', $post->slug));
    if($blog_pager['previous']) {
      SEOMeta::setPrev(route('blog.show', $blog_pager['previous']->slug));
    }
    if($blog_pager['next']) {
      SEOMeta::setNext(route('blog.show', $blog_pager['next']->slug));
    }
    
    /** OpenGraph */
    OpenGraph::setTitle($post->title)
      ->setDescription($post->description)
      ->setUrl(route('blog.show', $post->slug))
      ->setSiteName('Riski Web ID')
      ->addImage(getBlogImage($post->featured_image))
      ->addProperty('type', 'article')
      ->addProperty('locale', 'id-ID')
      ->addProperty('locale:alternate', ['id-ID', 'en-US']);

    return view('front.blog.show', compact(
      'post',
      'tile_color',
      'blog_pager',
      'related_post'
    ));
  }

}
