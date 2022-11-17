<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\models\main\Contact;

class ContactController extends Controller
{
    public function contact()
    {
        return view('main.contact.contact');
    }

    public function send(Request $request)
    {
        $request->validate([
            'contact_email' => 'bail|required|min:5|max:50',
            'contact_text' => 'bail|required|min:10|max:1000',
        ]);

        return Contact::create([
            'contact_email' => $request->contact_email,
            'contact_text' => $request->contact_text,
        ])
        ? back()->with('success', 'successfully updated')
        : back()->with('error', 'something wrong');
    }
}
