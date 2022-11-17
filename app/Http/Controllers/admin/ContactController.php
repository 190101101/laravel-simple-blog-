<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\admin\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $data['contact'] = Contact::orderBy('id', 'DESC')->paginate(10);
        return view('admin.contact.index', compact('data'));
    }

    public function show($id)
    {
        $contact = Contact::where('id', $id)->first();
        return $contact 
            ? view('admin.contact.show', compact('contact'))
            : redirect('/admin/contact')->with('error', 'contact not found');
    }

    public function delete($id)
    {
        Contact::find($id)->delete();
        return back()->with('success', 'successfully deleted');
    }
}
