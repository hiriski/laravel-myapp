<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeaturePost;

/** SEO */
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

class IndexController extends Controller {
	
	public function __construct() {
	}

	public function index() {
		$feature_posts = FeaturePost::all();
		/** SEO META     */
        SEOMeta::setTitle('Home')
                ->setDescription('Deskripsi homepage disini')
                ->setKeywords('Keyword1, keyword2 and more')
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
				
		return view('front.index', compact('feature_posts'));
	}
}
