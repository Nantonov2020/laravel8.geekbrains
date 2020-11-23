<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Orchestra\Parser\Xml\Facade as XmlParser;

class ParserController extends Controller
{
    public function index()
    {
        return view('admin.parser');
    }


    public function parseYandex($name, $service)
    {


        if ($service == 'yandex') $url = "https://news.yandex.ru/$name.rss";
        if ($service == 'lenta') $url = "https://lenta.ru/rss/news/$name";

        $load = XmlParser::load($url);

        $data = $load->parse([
            'title' => [
                'uses' => 'channel.title'
            ],
            'link' => [
                'uses' => 'channel.link'
            ],
            'description' => [
                'uses' => 'channel.description'
            ],
            'news' => [
                'uses' => 'channel.item[title,link,guid,description,puDate]'
            ],
        ]);

        $arrayNews = $data['news'];

        $numCategory = [
            'music' => 10,
            'army' => 9,
            'auto'=>5,
            'politics'=>3,
            'sport'=>2,
            'culture'=>8
        ];

        foreach ($arrayNews as $item){
            $news = new News();
            $news->title = $item['title'];
            $news->text = $item['description'];
            $news->author = $service;
            $news->category_id = $numCategory[$name];
            $news->published = 1;
            $news->save();
        }
        $text = "Новости категории \"$name\" успешно сохранены на сайте.";
        return view('admin.parser')->with('success', $text);

    }
}
