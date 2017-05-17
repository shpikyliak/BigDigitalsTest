@extends('layout')
@section('content')
    <h1>Редактировать</h1>
    {{ Form::open(['url' => '/api/users/'.$user->id, 'method' => 'put']) }}
        <div class="row">
            <p><b>Имя:</b> {{Form::text('name', $user->name)}} </p>

            <p><b>Емейл:</b> {{Form::text('email', $user->email)}}  </p>

            <p><b>Моб. номер:</b> {{Form::text('mobile_number', $user->mobile_number)}}  </p>

            <p><b>Дом. номер:</b> {{Form::text('home_number', $user->home_number)}}  </p>
            <button type="submit" class="btn btn-default">Изменить</button>
        </div>
    {{ Form::close() }}
@endsection