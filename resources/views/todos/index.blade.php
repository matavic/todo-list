@extends('layouts.app')

@section('content')
<h1 class='mt-3'>Todos</h1>
@if(count($todos) > 0)
    @foreach($todos as $todo)
        <div class="card text-white bg-info mb-3">
            <div class="card-header">
            <h3><a href="todo/{{$todo->id}}">{{$todo->title}}</a></h3>
                <div class="card-body">  
                <p>{{$todo->body}}</p>
                </div>
                <div class="card-footer">
                <span class="label label-danger text-danger">
                    {{$todo->due}}
                </span>
                </div>
            </div>
        </div>
    @endforeach
@endif
@endsection