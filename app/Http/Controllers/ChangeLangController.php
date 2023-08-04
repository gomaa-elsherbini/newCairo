<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;

class ChangeLangController extends Controller
{
    public function changeLanguage($locale){

        if (in_array($locale, ['ar', 'en'])) {
//
            session()->put('locale', $locale);
        }
        return redirect()->back();
    }
}
