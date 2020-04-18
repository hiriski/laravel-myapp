<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theme;

/** SEO */

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

/** Settings */
use App\Models\Setting;

class ThemeController extends Controller {

    public function __construct() {
        /** Settings */
        $this->setting      = Setting::findOrFail(1);
        $this->blog_perpage = $this->setting->blog_perpage;
    }
    
    /** Index Theme */
    public function index() {
        $setting  = Setting::findOrFail(1);

        $themes = Theme::with(['category'])->where('status_id', 1)
            ->orderBy('created_at', 'DESC')->paginate($this->blog_perpage);

        /** SEO META     */
        SEOMeta::setTitle('Theme index')
                ->setDescription('Deskripsi halaman theme index disini')
                ->setKeywords('Keyword1, keyword2 and more')
                ->addMeta('author', 'Riski' . ', hi@riski.web.id', 'name')
                ->addMeta('copyright', 'Riski Web ID', 'name')
                ->addMeta('designer', 'Riski', 'name')
                ->setCanonical(route('theme.index'));

        /** OpenGraph */
        OpenGraph::setTitle('Theme')
                ->setDescription('Deskripsi halaman Theme index disini')
                ->setUrl(route('theme.index'))
                ->setSiteName('Riski Web ID')
                ->addImage(getBlogImage('image-jpg'))
                ->addProperty('locale', 'id-ID')
                ->addProperty('locale:alternate', ['id-ID', 'en-US']);

        /** return view if record not empty */
        if(count($themes) !== 0) {
            return view('front.themes.index', compact('themes'));
        }
        return abort(404);
    }

    /** Show Theme */
    public function show($slug) {
        $theme = Theme::where('slug', $slug)->where('status_id', 1)->firstOrFail();
        
        /** SEO META     */
        SEOMeta::setTitle($theme->title)
            ->setDescription($theme->description)
            ->setKeywords($theme->keywords)
            ->addMeta('article:published_time', $theme->created_at->toW3CString(), 'property')
            ->addMeta('article:section', $theme->category->name, 'property')
            ->addMeta('author', $theme->user->name . ', hi@riski.web.id', 'name')
            ->addMeta('copyright', 'Riski Web ID', 'name')
            ->addMeta('designer', 'Riski', 'name')
            ->setCanonical(route('theme.show', $theme->slug));
    
        /** OpenGraph */
        OpenGraph::setTitle($theme->title)
            ->setDescription($theme->description)
            ->setUrl(route('theme.show', $theme->slug))
            ->setSiteName('Riski Web ID')
            ->addImage(getThemeImage($theme->featured_image))
            ->addProperty('type', 'article')
            ->addProperty('locale', 'id-ID')
            ->addProperty('locale:alternate', ['id-ID', 'en-US']);

        return view('front.themes.show', compact('theme'));
    }

}
