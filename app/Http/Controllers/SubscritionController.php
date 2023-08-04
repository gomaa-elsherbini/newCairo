<?php

namespace App\Http\Controllers;

use App\Mail\SubsecriptionMail;
use App\Models\Subscription;
use Illuminate\Support\Facades\Mail;

class SubscritionController extends Controller
{
    public function create()
    {
        return view('subscription-form');
    }

    public function store()
    {
        $data = \request()->validate([
            'email'=>'required|email',
            ]);

        $subscription= Subscription::create($data);

        Mail::to('test@test.com')->send(new SubsecriptionMail($data));

        return redirect()->back();
    }
}
