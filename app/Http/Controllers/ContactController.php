<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
	public function save(Request $request)
	{
		$contact = new Contact($request->all());
		$contact->save();
		Mail::to('dblumenau@gmail.com', 'adam@brandsmiths.co.za`')->send(new ContactUs($contact));
		return redirect('/#acontact')->with('success_message', 'Thank you for contacting us. We will get back to you soon');
    }
}
