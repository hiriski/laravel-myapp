<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactTopic as Topic;
use App\Models\Contact;

/** Request validation */
use App\Http\Requests\StoreContact;

/** Email */
use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;

/** SEO */
use Artesaos\SEOTools\Facades\SEOMeta;

class ContactController extends Controller {

	public function __construct() {
		$this->page_title = "Say hello 👋";
		$this->tile_color = "#1f77ff";
	}

	public function index() {

		/** SEO META     */
		SEOMeta::setTitle($this->page_title)
		->setDescription('Contact')
		->addMeta('author', 'Riski' . ', hi@riski.web.id', 'name')
		->addMeta('copyright', 'Riski Web ID', 'name')
		->addMeta('designer', 'Riski', 'name')
		->setCanonical(route('contact.index'));
		
		$tile_color = $this->tile_color;

		$topic = Topic::orderBy('id', 'ASC')->pluck('name', 'id');
		return view('front.contact.index', compact('topic', 'tile_color'));
	}


	public function store(StoreContact $request) {
		$validated = $request->validated();

		// $contact = array(
		//   'topic_id'  => $request->topic_id,
		//   'name'      => $request->name,
		//   'email'     => $request->email,
		//   'content'   => $request->message
		// );
			// Contact::create($contact);

			$contact = new Contact;
			$contact->topic_id 	= $request->topic_id;
			$contact->name 			= $request->name;
			$contact->email 		= $request->email;
			$contact->content 	= $request->message;
			$contact->save();
			
			/** Send Mail */
			Mail::to('riski.web.id@gmail.com')->send(new ContactEmail($contact));

		return redirect()->route('contact.index')->with([
		'contact_success'   => true,
		'message'           => 'Your message has been send!'
		]);
	}
}
