
@extends('Layouts.defult')
@section('content')   

    <h1>To Do List</h1>
    
    @foreach ($tasks as $task)
    <div>
        {{ $task->id}} - {{ $task->title}} - {{ $task->status}} - {{ $task->assigned_to}} - {{ $task->due_date}}
    </div>
    @endforeach
    
@endsection
