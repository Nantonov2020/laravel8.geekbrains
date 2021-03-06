@extends('layouts.main')

@section('content')
    <h4>Новости из категории: {{ $name }}</h4>
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            {{ $news->links() }}
            @forelse($news as $item)

                <div class="post-preview">
                    <a href="{{ route('detail',['id' => $item->id]) }}">

                        <h2 class="post-title">
                            {{$item->title}}
                        </h2>
                        <h3 class="post-subtitle">
                            {{$item->description}}
                            <br>
                            Подробнее >>
                        </h3>
                    </a>
                    <p class="post-meta">Опубликовано:
                        <a href="#">{{$item->author}}</a>
                        {{$item->created_at}}</p>
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




