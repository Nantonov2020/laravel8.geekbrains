@extends('layouts.main')

@section('content')
    <h4>Новости из категории: {{ $name }}</h4>
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

            @forelse($news as $item)

                <div class="post-preview">
                    <a href="{{ route('detail',['id' => $item['id']]) }}">

                        <h2 class="post-title">
                            {{ $item['title'] }}
                        </h2>
                        <h3 class="post-subtitle">
                            Подробнее >>
                        </h3>
                    </a>
                    <p class="post-meta">Опубликовано:
                        <a href="#">А.В. Иванов</a>
                        {{ \Carbon\Carbon::now()  }}</p>
                </div>
                <hr>
            @empty
                <h3>Новостей не найдено</h3>
        @endforelse


        <!-- Pager -->
            <div class="clearfix">
                <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
            </div>
        </div>
    </div>

@stop




