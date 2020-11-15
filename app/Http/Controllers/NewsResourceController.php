<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsResourceStore;
use App\Http\Requests\NewsResourceUpdate;
use Illuminate\Http\Request;
use App\Models\News;

class NewsResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsResourceStore $request)
    {
        $data = $request->only(['title','text','description','author','category_id']);

        $news = new News();

        $news->title = $data['title'];
        $news->text = $data['text'];
        $news->description = $data['description'];
        $news->author = $data['author'];
        $news->category_id = $data['category_id'];

        $news->save();

        return redirect()->route('showallnews')->with('success', 'Новость добавлена.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsResourceUpdate $request, $id)
    {
        $data = $request->only(['title','text','description','author']);

        $news = News::find($id);
        $news->title = $data['title'];
        $news->text = $data['text'];
        $news->description = $data['description'];
        $news->author = $data['author'];

        $news->save();

        return redirect()->route('showallnews')->with('success', 'Новость скорректирована.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = News::find($id);
        $category->delete();
        return redirect()->route('showallnews')->with('success', 'Новость удалена.');
    }
}
