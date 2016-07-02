@extends('app')
@section('title')
Create Page
@stop
@section('content')
 <h3>Write an Article</h3>
 <hr/>
    {!! Form::open(['url'=>'articles']) !!}
        <div class="form-group">
            {!! Form::label('title','Name :') !!}
            {!! Form::text('title',null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('body','Body :') !!}
            {!! Form::textarea('body',null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            
            {!! Form::submit('Add Article',null,['class'=>'btn btn-primary form-control'])!!}
        </div>
    {!! Form::close() !!}

@stop