@extends('layouts.admin')


@section('content')
    <h4>Добавление новости</h4>

    <div style="color:red">
        {{ session('success') }}
    </div>
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

            <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="{{ route('newsresource.store') }}">
                @csrf
                <div class="form-group col-md-7">
                    <input type="text" name="title" class="form-control" required="required" value="{{ old('title') }}" placeholder="Заголовок новости">
                    @error('title')
                    <div class="alert alert-danger">
                        @foreach($errors->get('title') as $error)
                            {{ $error }}
                        @endforeach
                    </div>
                    @enderror
                </div>
                <div class="form-group col-md-7">
                    <input type="text" name="description" class="form-control" required="required" value="{{ old('description') }}" placeholder="Краткое описание">
                    @error('description')
                    <div class="alert alert-danger">
                        @foreach($errors->get('description') as $error)
                            {{ $error }}
                        @endforeach
                    </div>
                    @enderror
                </div>
                <div class="form-group col-md-7">
                    <textarea name="text" id="text" required="required" class="form-control" rows="8" placeholder="Введите текст новости">{!! old('description') !!}</textarea>
                    @error('text')
                    <div class="alert alert-danger">
                        @foreach($errors->get('text') as $error)
                            {{ $error }}
                        @endforeach
                    </div>
                    @enderror
                </div>

                <div class="form-group col-md-7">
                    Выберите категорию:
                    <br>
                    <select name="category_id">

                        @forelse($categories as $item)

                            <option value="{{$item->id}}">{{$item->title}}</option>
                        @empty
                            <option value="0">-</option>
                        @endforelse

                    </select>
                    <br><br>
                </div>

                <div class="form-group col-md-7">
                    <input type="text" name="author" class="form-control" required="required" value="{{ old('author') }}" placeholder="Автор">
                    @error('author')
                    <div class="alert alert-danger">
                        @foreach($errors->get('author') as $error)
                            {{ $error }}
                        @endforeach
                    </div>
                    @enderror
                </div>
                <div class="form-group col-md-12">
                    <input type="submit" name="submit" class="btn btn-primary pull-right" value="Добавить">
                </div>
            </form>


            <!-- Pager -->
        </div>
    </div>


@stop

