@extends('layouts.admin')


@section('content')
    <h2>Список пользователей.</h2>
    <ul>
    @forelse($users as $user)

        <li>{{ $user->name }}

        @if ($user->is_admin)
            <span class="alert alert-success" role="alert">Администратор</span>
            <span><form method="post" action="{{ route('makeStatusAdmin') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <input type="hidden" name="status" value="0">
                    <input type="submit" name="submit" class="btn btn-danger pull-right" value="Убрать статус администратора"></form></span>
        @else
            <span><form method="post" action="{{ route('makeStatusAdmin') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <input type="hidden" name="status" value="1">
                    <input type="submit" name="submit" class="btn btn-primary pull-right" value="Установить статус администратора"></form></span>
        @endif

        </li>
            <hr>

    @empty
        <h3>Пользователей не найдено</h3>
    @endforelse
    </ul>
@stop
