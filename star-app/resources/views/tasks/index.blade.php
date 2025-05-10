@extends('Layouts.defult')
@section('content')   
  
    <h1>All Tasks</h1>
    <br>
    Welcome to the tasks page!
    <br><br>
    <br><br>
    NOTE: All tasks order by 'due_date'
    <br><br>
    <ul>
        <div class="tasks">
            @foreach ($tasks as $task)
            <div class="task">
              <span>  <i> id = {{ $task->id }} | {{ $task->title }} | {{ $task->status }} |{{ $task->due_date }} </i></span>
              <a href="/tasks/{{$task->id}}/delete">delete</a>
              <div>
@if ($task->status ==='Todo')
<a href="/tasks/{{$task->id}}/onprogress">onprogress</a>
    
@elseif (($task->status ==='Inprogress'))
<a href="/tasks/{{$task->id}}/done">done</a>
@endif
             </div>
              @endforeach
            </div>
        </div>
    </ul>
    <br>

    <div class="container">
        <h1 style="text-align:center;"></h1>
        <a href="/tasks/create">
            <button class="btn btn-primary btn-lg">Create Task</button>
        </a>
    </div>

@endsection