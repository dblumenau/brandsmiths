<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class ContactController extends Controller
{
	public function save(Request $request)
	{
		$contact = new Contact($request->all());
		$contact->save();
		
		return redirect('/#acontact')->with('success_message', 'Thank you for contacting us. We will get back to you soon');
    }
}
