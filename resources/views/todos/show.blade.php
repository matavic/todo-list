@extends('layouts.app')

@section('content')
    <a class="btn btn-primary" href="/">Go Back</a>
    <h1>{{$todo->title}}</h1>
    <div class="card-body">  
        <p>{{$todo->body}}</p>
    </div>
    <div class="card-footer">
    <span class="label label-danger text-danger">
        {{$todo->due}}
    </span>
    </div>
    <a href="/todo/{{$todo->id}}/edit" class="btn btn-info">Edit</a>
@endsection