<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function showNews($id){

        $objNews = new News();
        $news = $objNews->getNewByID($id);
        //dd($news);

        /*
        $allNews = $this->getNews();
        $news = [];
        foreach($allNews as $item){
            if ($item['id'] == $id){
                $news = $item;
                break;
            }
        }
        */
        return view('news.item',['news' => $news]);
    }
}
