@extends('layouts.app')

@section('content')
    <a class="btn btn-light" href="/">Go Back</a>
    <h1>{{$todo->title}}</h1>
    <div class="card-body">  
        <p>{{$todo->body}}</p>
    </div>
    <div class="card-footer  mb-3">
    <span class="label label-danger text-danger">
        {{$todo->due}}
    </span>
    </div>
    <a href="/todo/{{$todo->id}}/edit" class="btn btn-info">Edit</a>
     {!! Form::open(['action' => ['TodosController@destroy',$todo->id], 'class' => 'd-inline', 'method' => 'DELETE']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
     {!! Form::close() !!}
@endsection