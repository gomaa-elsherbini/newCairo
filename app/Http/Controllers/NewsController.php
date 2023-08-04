<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function search(Request $request){

            if($request->ajax()) {
                $search = $request->search;
                $data = News::where("name", "like", "%{$search}%")->orderby('id', 'ASC')->paginate(1);

                return view('news-search-result', ['data'=>$data]);
            }
        }
}
