<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        return view('categories.index',['categories' => Category::paginate(5)]);
    }

    public function category($slug){

        $category = Category::where('slug',$slug)->first();

        $nameCategory = $category['title'];
        $news = $category->news()->paginate(5);

        return view('categories.category',['news' => $news, 'name' => $nameCategory]);


    }
}
