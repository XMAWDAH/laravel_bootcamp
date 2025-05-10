@extends('Layouts.defult')
@section('content')   
  
    <h1>The task has been deleted</h1>
    <br>
    <ul>
        @foreach ($tasks as $task)
        <br><br>
            <li> The task of id = {{ $task->id }} is deleted </li>
        @endforeach
        <button><a href="/">Home</a></button>
          
    </ul>

@endsection