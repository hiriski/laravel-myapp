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
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $setting  = Setting::findOrFail(1);

        $posts = Blog::with(['category'])->where('status_id', 1)
            ->orderBy('created_at', 'DESC')->paginate($this->blog_perpage);

        /** SEO META     */
        SEOMeta::setTitle('Blog index')
                ->setDescription('Deskripsi halaman blog index disini')
                ->setKeywords('Keyword1, keyword2 and more')
                ->addMeta('author', 'Riski' . ', hi@riski.web.id', 'name')
                ->addMeta('copyright', 'Riski Web ID', 'name')
                ->addMeta('designer', 'Riski', 'name')
                ->setCanonical(route('blog.index'));

        /** OpenGraph */
        OpenGraph::setTitle('Blog')
                ->setDescription('Deskripsi halaman blog index disini')
                ->setUrl(route('blog.index'))
                ->setSiteName('Riski Web ID')
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
        $post = Blog::where('slug', $slug)->firstOrFail();
        
        $related_post = Blog::where('category_id', $post->category_id)
                            ->orderBy('created_at', 'DESC')->take(4)->get();

        /** SEO META     */
        SEOMeta::setTitle($post->title)
                ->setDescription($post->description)
                ->setKeywords($post->keywords)
                ->addMeta('article:published_time', $post->created_at->toW3CString(), 'property')
                ->addMeta('article:section', $post->category->name, 'property')
                ->addMeta('author', $post->user->name . ', hi@riski.web.id', 'name')
                ->addMeta('copyright', 'Riski Web ID', 'name')
                ->addMeta('designer', 'Riski', 'name')
                ->setCanonical(route('blog.show', $post->slug))
                ->setPrev(route('blog.show', $post->slug))
                ->setNext(route('blog.show', $post->slug));

        /** OpenGraph */
        OpenGraph::setTitle($post->title)
                ->setDescription($post->description)
                ->setUrl(route('blog.show', $post->slug))
                ->setSiteName('Riski Web ID')
                ->addImage(getBlogImage($post->featured_image))
                ->addProperty('type', 'article')
                ->addProperty('locale', 'id-ID')
                ->addProperty('locale:alternate', ['id-ID', 'en-US']);

        return view('front.blog.show', compact('post', 'related_post'));
    }

}
