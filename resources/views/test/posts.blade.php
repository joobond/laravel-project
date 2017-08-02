@extends('template');

@section('title')
    <title>Posts - Blog do Bond</title>
@stop

@section('content')
   <h1>Posts Recentes</h1>
   <p>Esta área é para mostrar os post recentes do Blog do Bond =)</p>
   <hr>
   <ul>
       @foreach($posts as $post)
       <li>{{$post}}</li>
       @endforeach
   </ul>
@stop