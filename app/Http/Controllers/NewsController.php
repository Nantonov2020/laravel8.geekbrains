<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function showNews($id){
        $allNews = $this->getNews();
        $news = [];
        foreach($allNews as $item){
            if ($item['id'] == $id){
                $news = $item;
                break;
            }
        }

        return view('news.item',['news' => $news]);
    }
}
