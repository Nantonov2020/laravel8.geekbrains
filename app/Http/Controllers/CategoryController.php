<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = $this->getNewsCategories();
        return view('categories.index',['categories' => $categories]);
    }

    public function category($slug){
        $categories = $this->getNewsCategories();
        $idCategory = 0;
        $nameCategory = '';
        foreach($categories as $category){
            if ($category['slug'] == $slug){
                $idCategory = $category['id'];
                $nameCategory = $category['title'];
            }
        }
        $allNews = $this->getNews();
        $news = [];
        foreach($allNews as $item){
            if ($item['category_id'] == $idCategory){
                $news[] = $item;
            }
        }
        return view('categories.category',['news' => $news, 'name' => $nameCategory]);
    }
}
