@extends('master')

@section('title', "| Edit Category")

@section('content')
    
    {{ Form::model($categories, ['route' => ['categories.update', $tag->id], 'method' => "PUT"]) }}
        
        {{ Form::label('name', "Name:") }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}

        {{ Form::submit('Save Changes', ['class' => 'btn btn-success', 'style' => 'margin-top:20px;']) }}
    {{ Form::close() }}

@endsection