@extends('Layouts.defult')
@section('content')   
    <h1>Tasks On Progress</h1>

    <ul>
        @foreach ($tasks as $task)
        <div >
            {{ $task->id}} - {{ $task->title}} - {{ $task->status}} - {{ $task->assigned_to}} - {{ $task->due_date}}
        </div>
        @endforeach
    </ul>
    
@endsection