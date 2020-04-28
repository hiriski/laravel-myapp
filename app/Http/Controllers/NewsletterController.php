<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;

class NewsletterController extends Controller {
    public function store(Request $request) {
        return redirect()->back()->with('subscribe_message', 'Subscribe success');
    }
}
