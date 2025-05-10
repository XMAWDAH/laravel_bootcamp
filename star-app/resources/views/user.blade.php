@extends('Layouts.defult')
@section('content')   
  
    <h1>Tasks</h1>
    <ul>
        @foreach ($user->tasks as $task)
            {{ $task->title }} | 
            {{ $task->status }} |
            {{ $task->due_date }} 
            <br>
        @endforeach
    </ul>
    @endsection