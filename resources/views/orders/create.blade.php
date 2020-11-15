@extends('layouts.main')

@section('content')
    <h1>Оформление заказа</h1>


    @if (session('success'))
        <div style="color:red">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('orders.store') }}">
        @csrf
        <div class="form-group col-md-6">
            <input type="text" name="name" class="form-control" required="required" value="{{ old('name') }}" placeholder="Имя">
            @error('name')
            <div class="alert alert-danger">
                @foreach($errors->get('name') as $error)
                    {{ $error }}
                @endforeach
            </div>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <input type="email" name="email" class="form-control" required="required" value="{{ old('email') }}" placeholder="Email">
            @error('email')
            <div class="alert alert-danger">
                @foreach($errors->get('email') as $error)
                    {{ $error }}
                @endforeach
            </div>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <input type="text" name="phone" class="form-control" required="required" value="{{ old('phone') }}" placeholder="Номер телефона">
            @error('phone')
            <div class="alert alert-danger">
                @foreach($errors->get('phone') as $error)
                    {{ $error }}
                @endforeach
            </div>
            @enderror
        </div>
        <div class="form-group col-md-12">
            <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Введите текст заказа">{!! old('message') !!}</textarea>
            @error('message')
            <div class="alert alert-danger">
                @foreach($errors->get('message') as $error)
                    {{ $error }}
                @endforeach
            </div>
            @enderror
        </div>
        <div class="form-group col-md-12">
            <input type="submit" name="submit" class="btn btn-primary pull-right" value="Отправить">
        </div>
    </form>

@stop
