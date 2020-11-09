@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

            @forelse($categories as $item)

            <div class="post-preview">
                <a href="{{ route('category',['slug' => $item->slug]) }}">

                    <h2 class="post-title">
                        {{ $item->title }}
                    </h2>
                </a>
            </div>
                <hr>
            @empty
                <h3>Категорий не найдено</h3>
            @endforelse


            <!-- Pager -->
            <div class="clearfix">
                <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
            </div>
        </div>
    </div>

@stop


