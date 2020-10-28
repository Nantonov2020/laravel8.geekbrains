@extends('layouts.main')

@section('content')

    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">


                <div class="post-preview">

                        <h2 class="post-title">
                            {{ $news['title'] }}
                        </h2>
                        <p class="post-subtitle">
                            {{ $news['text'] }}
                        </p>

                    <p class="post-meta">Опубликовано:
                        <a href="#">А.В. Иванов</a>
                        {{ \Carbon\Carbon::now()  }}</p>
                </div>
                <hr>

        <!-- Pager -->
            <div class="clearfix">
                <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
            </div>
        </div>
    </div>



@stop




