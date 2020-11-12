@extends('layouts.main')

@section('content')
    <hr>
    <div style="color:red">
        {{ session('success') }}
    </div>

    <h3>Редактирование категории. - {{ $category->title }}</h3>
    <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="{{ route('categories.update',$category->id) }}">
        @method("put")
        @csrf
        <div class="form-group col-md-6">
            <input type="text" name="title" class="form-control" required="required" placeholder="Введите скорректированное название категории" value="{{$category->title}}">
        </div>
        <div class="form-group col-md-12">
            <input type="submit" name="submit" class="btn btn-primary pull-right" value="Изменить">
        </div>
    </form>

@stop
