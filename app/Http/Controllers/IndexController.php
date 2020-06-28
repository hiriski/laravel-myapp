<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeaturePost;

use App\Models\Setting;
use App\Models\Blog;
use App\Models\Work;


/** SEO */
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

class IndexController extends Controller {

  public function __construct() {
    $this->page_title = "index";
    $this->setting = Setting::findOrFail(1);
  }

  public function index() {
    $setting = $this->setting;

    $featured_posts = [];
    $posts = [];
    $works = [];

    /** Check setting for show featured post in homepage */
    if($setting->showFeaturedPost()) {
      $featured_posts = FeaturePost::all();
    }

    /** Check setting for show blog in homepage */
    if($setting->showBlog()) {
      $posts = Blog::with(['category'])->where('status_id', 1)
        ->orderBy('created_at', 'DESC')->simplePaginate(6);
    }

    /** Check setting for show work in homepage */
    if($setting->showWork()) {
      $works = Work::with(['category'])->where('status_id', 1)
        ->orderBy('created_at', 'DESC')->simplePaginate(6);
    }

    /** SEO META     */
    SEOMeta::setTitle($this->page_title)
      ->setDescription('Riski Web ID')
      ->setKeywords('')
      ->addMeta('author', 'Riski' . ', hi@riski.web.id', 'name')
      ->addMeta('copyright', 'Riski Web ID', 'name')
      ->addMeta('designer', 'Riski', 'name')
      ->setCanonical(route('index'));

    /** OpenGraph */
    OpenGraph::setTitle('Homepage')
      ->setDescription('Deskripsi halaman home disini')
      ->setUrl(route('index'))
      ->setSiteName('Riski Web ID')
      ->addImage(getBlogImage('image-jpg'))
      ->addProperty('locale', 'id-ID')
      ->addProperty('locale:alternate', ['id-ID', 'en-US']);
      
    return view('front.index', compact('featured_posts', 'setting', 'posts', 'works'));
  }
}
