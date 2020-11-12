<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function showNews($id){

        return view('news.item',['news' => News::query()->find($id)]);
    }
}
