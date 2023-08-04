<?php

namespace App\Http\Controllers;

use App\Mail\jobApplicationSendMail;
use App\Models\JobApplication;
use Illuminate\Support\Facades\Mail;

class JobApplicationController extends Controller
{

    public function create()
    {
        return view('job-application');
    }

    public function store()
    {

        $data =$this->inputsValidation();

        $application = JobApplication::create($data);

        \request('upload_file')->store('jobApplications/uploads', 'public');

        Mail::to('test@test.com')->send(new jobApplicationSendMail($data));

        return redirect('job-application')->with('message', 'Your Application successfully sent');
    }

    public function inputsValidation(){

        return \request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'upload_file'=>'required|file'
        ]);
    }

}
