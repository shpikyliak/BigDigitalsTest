@extends('layout')
@section('content')
    <h1>Создать</h1>
    {{ Form::open(['url' => '/api/users/', 'method' => 'post']) }}
    <div class="row">
        <p><b>Имя:</b> {{Form::text('name')}} </p>

        <p><b>Емейл:</b> {{Form::email('email')}}  </p>

        <p><b>Моб. номер:</b> {{Form::text('mobile_number')}}  </p>

        <p><b>Дом. номер:</b> {{Form::text('home_number')}}  </p>
        <button type="submit" class="btn btn-default">Создать</button>
    </div>
    {{ Form::close() }}
@endsection