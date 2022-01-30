@extends('layouts.layout')
@section('content')
        <h1>Вещи в использовании:</h1>
        @foreach($usages as $usage)
        <p>{{$usage->thing->name}} находится в {{$usage->place->name}} у {{$usage->user->name}} в количестве: {{$usage->amount}}</p>
        @endforeach
@endsection