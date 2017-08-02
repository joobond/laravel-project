@extends('template')

@section('title')
    <title>Notas</title>
@stop

@section('content')
<h1>Anotações</h1>
<ul>
    @foreach($notas as $nota)
        <li>{{$nota}}</li>
    @endforeach
</ul>
@stop