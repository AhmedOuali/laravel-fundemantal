@extends('modelpage')
@section('title')
articlesh Page
@stop
@section('content')
    <h1>All Articles</h1>
    <articles>
       
        @foreach( $article as $ar)
        
            <a href="article/{{$ar->id}}"><h3>{{ $ar->title }}</h3></a>
        @endforeach
        
    </articles>

@stop
