@extends('template');

@section('title')
    <title>Posts - Blog do Bond</title>
@stop

@section('content')
   <h1>Posts Recentes</h1>
   <p>Esta área é para mostrar os post recentes do Blog do Bond =)</p>
   <br>
   <ul>
       @foreach($posts as $post)
       <h2>{{$post->title}} <i>{{$post->created_at}}</i></h2>
           <p>{{$post->content}}</p>
           <hr>
       @endforeach
   </ul>
@stop