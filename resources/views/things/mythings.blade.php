@extends('layouts.layout')
@section('content')
<h1>Мои вещи</h1>
@if(!sizeof($things))У вас нет вещей!@endif
@foreach($things as $thing)
    <p>Название: {{$thing->name}} <br> Описание: {{$thing->description}} <br> Гарантия:{{$thing->wrnt}}</p>
    <a href="things/delete/{{$thing->id}}">Удалить</a>
    <a href="things/update/{{$thing->id}}">Изменить</a>
    <a href="/usages/{{$thing->id}}">Изменить состояние хранения</a>
    <hr>
<br>
@endforeach
@endsection