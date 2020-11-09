<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    public function getAllCategory()
    {
        //return \DB::select("SELECT * FROM {$this->table}");

        return \DB::table($this->table)->get();
    }

    public function getAllNewsBySlugOfCategory($slug)
    {
        return \DB::table($this->table)->join('news', 'categories.id', '=', 'news.category_id')->where('slug','=',$slug)->get();
    }

    public function getNameCategoryBySlug($slug){
        return \DB::table($this->table)->where('slug','=',$slug)->get('title');
    }

}
