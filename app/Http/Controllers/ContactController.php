<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
    	\Mail::send('mails.contact', ['messageBody' => $request->message] + $request->all(), function($message) {
    		$message->to('info.solspooltechno@gmail.com');
    		$message->subject('Website Enquiry');
    	});
    	return [
    		'status' => 'ok',
    		'message' => 'Your query has been submitted, Our team will contact your shortly'
    	];
    	return back()->with('success', 'Form has been sent');
    }
}
