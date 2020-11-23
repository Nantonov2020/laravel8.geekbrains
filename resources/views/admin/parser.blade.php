@extends('layouts.admin')


@section('content')

    <div style="color:red">
        {{ session('success') }}
    </div>


    <a href="{{ route('parser.news', ['name' => 'music', 'service'=>'yandex'])}}">Парсинг Яндекса. Музыка</a><br>
    <a href="{{ route('parser.news', ['name' => 'army', 'service'=>'yandex'])}}">Парсинг Яндекса. Армия</a><br>
    <a href="{{ route('parser.news', ['name' => 'auto', 'service'=>'yandex'])}}">Парсинг Яндекса. Автомобили</a><br>
    <a href="{{ route('parser.news', ['name' => 'politics', 'service'=>'yandex'])}}">Парсинг Яндекса. Политика</a><br>
    <a href="{{ route('parser.news', ['name' => 'culture', 'service'=>'lenta'])}}">Парсинг Лента.ру. Культура</a><br>
    <a href="{{ route('parser.news', ['name' => 'sport', 'service'=>'lenta'])}}">Парсинг Лента.ру. Спорт</a><br>
@stop
