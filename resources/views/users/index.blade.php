@extends('layout')
@section('content')
    <h1>Все пользователи</h1>
    <a class="btn btn-success" href="/create">Создать</a>
    <form method="GET" action="/createSearch" style="float: right">
        <input name="name" style="display: inline; width: 150px;" class="form-control" placeholder="Пошук">
        <button style="display: inline" class="btn btn-default">
            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
        </button>

    </form>
    <hr>
    @foreach($users as $user)
        <div class="row">
            <p><b>Имя:</b> {{$user->name}} </p>

            <p><b>Емейл:</b> {{$user->email}} </p>

            <p><b>Моб. номер:</b> {{$user->mobile_number}} </p>

            <p><b>Дом. номер:</b> {{$user->home_number}} </p>

            <a class="btn btn-default" href="/api/users/{{$user->id}}">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            </a>
            {{ Form::open(['url' => '/api/users/'.$user->id, 'method' => 'delete']) }}
            <button class="btn btn-default">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
            </button>
            {{ Form::close() }}

        </div>
        <hr>
    @endforeach
@endsection