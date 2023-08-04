<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsSendEmail;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function create()
    {
        return view('menu.contactus');
    }

    public function store()
    {
        $data= \request()->validate([
            'nickname'=>'required',
            'name'=>'required',
            'company'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'upload_file'=>'required|file',
            'message'=>'required',
        ]);

        $contact = Contact::create($data);

        request()->upload_file->store('contacts', 'public');

        Mail::to('gogo@gmail.com')->send(new ContactUsSendEmail($data));

        return redirect('contactus')->with('message', 'Thank you '. $data['name'] . ' Your msg successfully sent');

    }
}
