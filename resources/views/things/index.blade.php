@extends('layouts.layout')
@section('content')
<h1>Все вещи</h1>
@foreach($things as $thing)
    <div>Название: {{$thing->name}} <br> Описание: {{$thing->description}} <br> Гарантия: {{$thing->wrnt}} <br> Создатель:{{$thing->user->name}}
    <a href="things/delete/{{$thing->id}}">Удалить</a>
    <a href="things/update/{{$thing->id}}">Изменить</a></div>
    <hr>
@endforeach
<br>
@if(Auth::check())<a href="/things/add">Создать вещь</a>@endif
@endsection