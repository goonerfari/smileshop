@extends('master')

@section('title', "| Edit Category")

@section('content')
    <div class="container">
        <div class="col-md-5" style="margin: 30px;">
            {{ Form::model($category, ['route' => ['categories.update', $category->id], 'method' => "PUT"]) }}
                
                {{ Form::label('name', "Name:") }}
                {{ Form::text('name', null, ['class' => 'form-control']) }}

                {{ Form::submit('Save Changes', ['class' => 'btn btn-success', 'style' => 'margin-top:20px;']) }}
            {{ Form::close() }}
        </div>
    </div>
@endsection