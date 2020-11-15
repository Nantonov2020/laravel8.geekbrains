@extends('layouts.admin')


@section('content')
    <hr>
    <div style="color:red">
        {{ session('success') }}
    </div>

    <h3>Редактирование новости. - {{ $news->title }}</h3>
    <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="{{ route('newsresource.update',$news->id) }}">
        @method("put")
        @csrf
        <div class="form-group col-md-7">Залоговок:
            <input type="text" name="title" class="form-control" required="required" placeholder="Введите скорректированное название категории" value="{{$news->title}}">
            @error('title')
            <div class="alert alert-danger">
                @foreach($errors->get('title') as $error)
                    {{ $error }}
                @endforeach
            </div>
            @enderror
        </div>
        <div class="form-group col-md-7">Описание:
            <input type="text" name="description" class="form-control" required="required" placeholder="Введите скорректированное название категории" value="{{$news->description}}">
            @error('description')
            <div class="alert alert-danger">
                @foreach($errors->get('description') as $error)
                    {{ $error }}
                @endforeach
            </div>
            @enderror
        </div>
        <div class="form-group col-md-7">Текст:
            <textarea name="text" id="text" required="required" class="form-control" rows="8" placeholder="Введите Ваше сообщение">{!! $news->text !!}</textarea>
            @error('text')
            <div class="alert alert-danger">
                @foreach($errors->get('text') as $error)
                    {{ $error }}
                @endforeach
            </div>
            @enderror
        </div>
        <div class="form-group col-md-7">Автор:
            <input type="text" name="author" class="form-control" required="required" placeholder="Введите скорректированное название категории" value="{{$news->author}}">
            @error('author')
            <div class="alert alert-danger">
                @foreach($errors->get('author') as $error)
                    {{ $error }}
                @endforeach
            </div>
            @enderror
        </div>
        <div class="form-group col-md-12">
            <input type="submit" name="submit" class="btn btn-primary pull-right" value="Изменить">
        </div>
    </form>

@stop
