@extends('layouts.main')

@section('content')
    <h4>Новости</h4>

    <div style="color:red">
        {{ session('success') }}
    </div>

    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            {{ $news->links() }}
            @forelse($news as $item)

                <div class="post-preview">

                        <h2 class="post-title">
                            {{$item->title}}
                        </h2>
                    <p class="post-meta">Опубликовано:
                        <a href="#">{{$item->author}}</a>
                        {{$item->created_at}}</p>

                    <a href="{{route('correctnews',['id'=>$item->id])}}">Редактировать</a>
                    <a href="#">Удалить</a>
                </div>
                <hr>
            @empty
                <h3>Новостей не найдено</h3>
        @endforelse


        <!-- Pager -->
            <div class="clearfix">
                {{ $news->links() }}
            </div>
        </div>
    </div>

@stop
