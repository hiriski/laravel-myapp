<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

/** SEO */
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

class AboutController extends Controller {

  public function __construct() {
    $this->page_title = "About me 🧑";
  }

  public function index() {
		$about = About::findOrFail(1);
		
		/** SEO META     */
		SEOMeta::setTitle($this->page_title)
			->setDescription('Tentang riski')
			->addMeta('author', 'Riski' . ', hi@riski.web.id', 'name')
			->addMeta('copyright', 'Riski Web ID', 'name')
			->addMeta('designer', 'Riski', 'name')
			->setCanonical(route('blog.index'));

		/** OpenGraph */
		OpenGraph::setTitle($this->page_title)
			->setDescription('Tentang riski')
			->setUrl(route('about'))
			// ->setSiteName('Riski Web ID')
			->addImage(asset('me/md-c@2x.jpg'))
			->addProperty('locale', 'id-ID')
			->addProperty('locale:alternate', ['id-ID', 'en-US']);

    return view('front.about', ['about' => $about]);
	}
	
}
