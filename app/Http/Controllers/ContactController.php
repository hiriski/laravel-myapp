<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactTopic as Topic;
use App\Models\Contact;

/** Request validation */
use App\Http\Requests\StoreContact;

class ContactController extends Controller {

    public function index() {
        $topic = Topic::orderBy('id', 'ASC')->pluck('name', 'id');
        return view('front.contact', compact('topic'));
    }

    public function store(StoreContact $request) {
        $validated = $request->validated();
        
        $contact   = $request->all();
        Contact::create($contact);
        return redirect()->route('contact.index')->with([
            'contact_success'   => true,
            'message'           => 'Your message has been send!'
        ]);
    }
}
