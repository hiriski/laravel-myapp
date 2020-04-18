<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/** SEO */
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

use App\Models\ThemeCategory as Category;

/** Global Settings */
use App\Models\Setting;

class ThemeCategoryController extends Controller {
    public function __construct() {
        /** Setting */
        $this->setting  = Setting::findOrFail(1);
        $this->blog_perpage = $this->setting->blog_perpage;
    }

    /** Theme Category Index */
    public function index() {
        $categories = Category::all();
        /** SEO META     */
        SEOMeta::setTitle('Theme Categories')
                ->setDescription('Deskripsi halaman theme category index disini')
                ->setKeywords('Keyword1, keyword2 and more')
                ->addMeta('author', 'Riski' . ', hi@riski.web.id', 'name')
                ->addMeta('copyright', 'Riski Web ID', 'name')
                ->addMeta('designer', 'Riski', 'name')
                ->setCanonical(route('theme.category.index'));

        /** OpenGraph */
        OpenGraph::setTitle('Theme Category')
                ->setDescription('Deskripsi halaman theme category index disini')
                ->setUrl(route('theme.category.index'))
                ->setSiteName('Riski Web ID')
                ->addImage(getBlogImage('image-jpg'))
                ->addProperty('locale', 'id-ID')
                ->addProperty('locale:alternate', ['id-ID', 'en-US']);

        return view('front.theme.categories.index', compact('categories'));
    }


    /** Theme Category Single (Spesific Category) */
    public function show($slug) {
        $category = Category::with(['themes' => function($query) {
            $query->orderBy('created_at', 'DESC')->paginate($this->blog_perpage);
        }])->where('slug', $slug)->firstOrFail();


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
                ->setUrl(route('theme.show', $category->slug))
                ->setSiteName('Riski Web ID')
                // ->addImage(getBlogImage($category->featured_image))
                ->addProperty('type', 'article')
                ->addProperty('locale', 'id-ID')
                ->addProperty('locale:alternate', ['id-ID', 'en-US']);

        return view('front.theme.categories.show', compact('category'));
    }
}
