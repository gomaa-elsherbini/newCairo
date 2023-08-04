<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Support\Facades\DB;

class ClientsController extends Controller
{
    public function index()
    {
        $clients=Client::paginate(6);
        return view('menu.clients', ['clients'=>$clients]);
    }
}
