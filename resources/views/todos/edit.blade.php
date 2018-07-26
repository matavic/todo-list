@extends('layouts.app')

@section('content')
<a href="/todo/{{$todo->id}}" class="btn btn-default">Go Back</a>
    <h1>Edit Todo</h1>

    {!! Form::open(['action' => ['TodosController@update',$todo->id], 'method' => 'PUT']) !!}
        {{ Form::bsText('title', $todo->title) }}
        {{ Form::bsTextArea('body', $todo->body) }}
        {{ Form::bsText('due', $todo->due) }}
        {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection