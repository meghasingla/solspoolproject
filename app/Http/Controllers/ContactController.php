<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send()
    {
    	\Mail::send('mails.contact',[], function($message) {
    		$message->to('');
    		$message->subject();
    	});

    	return back()->with('success', 'Form has been sent');
    }
}
