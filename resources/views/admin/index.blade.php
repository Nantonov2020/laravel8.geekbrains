@extends('layouts.main')

@section('content')
    <h1>Список категорий</h1>
    <hr>
    <div style="color:red">
        {{ session('success') }}
    </div>

    @forelse($categories as $item)

        <div class="post-preview">
                <div class="post-title">
                    {{ $item->title }}
                    <br>
                    <a href="{{ route('correctcategory',['id'=>$item->id]) }}">Редактировать</a>
                    <a href="#">Удалить</a>
                </div>
        </div>
        <hr>
    @empty
        <h3>Категорий не найдено</h3>
    @endforelse

    <h3>Добавить категорию.</h3>
    <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="{{ route('categories.store') }}">
        @csrf
        <div class="form-group col-md-6">
            <input type="text" name="title" class="form-control" required="required" placeholder="Наименование категории">
        </div>
        <div class="form-group col-md-12">
            <input type="submit" name="submit" class="btn btn-primary pull-right" value="Добавить">
        </div>
    </form>

@stop


