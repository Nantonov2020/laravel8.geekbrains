<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        $objCategories = new Category();
        $categories = $objCategories->getAllCategory();
        //dd($categories);
        //$categories = $this->getNewsCategories();
        return view('categories.index',['categories' => $categories]);
    }

    public function category($slug){
        $objCategories = new Category();

        $news = $objCategories->getAllNewsBySlugOfCategory($slug);
        $nameCategory = '';
        $val = $objCategories->getNameCategoryBySlug($slug);
        if ($val) {
            $nameCategory = $val[0];
        }
        //dd($nameCategory);
       /*
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

       */

        return view('categories.category',['news' => $news, 'name' => $nameCategory]);


    }
}
