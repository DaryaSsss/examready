@extends('layouts.layout')
@section('content')
<h1>Места хранения</h1>
@foreach($places as $place)
    <div>Название: {{$place->name}} <br> Описание: {{$place->description}} <br> Специальное место = @if($place->repair==1)Да @else Нет @endif <br> Рабочее место = @if($place->work==1)Да @else Нет @endif
    <a href="places/delete/{{$place->id}}">Удалить</a>
    <a href="places/update/{{$place->id}}">Изменить</a></div>
    <hr>
@endforeach
<br>
<a href="/places/add">Создать место</a>
@endsection