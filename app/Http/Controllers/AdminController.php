<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index',['categories' => Category::orderBy('id', 'desc')->get()]);
    }

    public function correctCategory($id){
        return view('admin.correctcategory',['category' => Category::find($id)]);
    }

    public function showAllNews(){
        return view('admin.news',['news' => News::paginate(20)]);
    }

    public function correctNews($id){
        return view('admin.correctnews',['news' => News::find($id)]);
    }

    public function addNews(){
        return view('admin.addnews',['categories' => Category::all()]);
    }


}
