@extends('Layouts.defult')
@section('content')   
  

@section('content')
    <h1>Done Tasks</h1>
    <ul>  
         @foreach ($tasks as $task)
        <div>
            {{ $task->id}} - {{ $task->title}} - {{ $task->status}} - {{ $task->assigned_to}} - {{ $task->due_date}}
        </div>
        @endforeach
    </ul>
@endsection