@extends('Layouts.defult')
@section('content')   
  
    <h1>All due tasks that are not (done)</h1>
    <br>


    <ul>
        @foreach ($tasks as $task)
        <br><br>
            <li> {{ $task->title }} : {{ $task->status }}</li>
        @endforeach
    </ul>
    
@endsection