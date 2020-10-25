<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $categories = parent::getNewsCategories();
        return view('news.index',['categories' => $categories]);
    }

    public function category($slug){
        $categories = parent::getNewsCategories();
        $idCategory = 0;
        $nameCategory = '';
        foreach($categories as $category){
            if ($category['slug'] == $slug){
                $idCategory = $category['id'];
                $nameCategory = $category['title'];
            }
        }
        $allNews = parent::getNews();
        $news = [];
        foreach($allNews as $item){
            if ($item['category_id'] == $idCategory){
                $news[] = $item;
            }
        }
        return view('news.category',['news' => $news, 'name' => $nameCategory]);
    }

    public function showNews($id){
        $allNews = parent::getNews();
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
