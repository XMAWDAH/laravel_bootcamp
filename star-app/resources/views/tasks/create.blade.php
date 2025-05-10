@extends('Layouts.defult')
@section('content')   
  
<br><br>

<form  method="POST" action="/tasks/create">
  @csrf
  <div class="form-group">
    <label for="task_name">Task Name:</label><br>
    <input type="text" class="form-control" >
  </div>
  <br>
  <div class="form-group">
    <label for="due_date">Due Date:</label><br>
    <input type="date" class="form-control" >
  </div>
  <br>
  <div class="form-group">
    <label for="status">Task Status:</label><br>
    <select name="status">
      <option value="done">Done</option>
      <option value="onprogress">InProgress</option>
      <option value="todo">Todo</option>
    </select>
  </div>
  <br>
  <div class="form-group">
    <label for="assigned_to">Assigned To:</label><br>
    <select  name="assigned-to">
      @foreach ($users as $user)
      <option value="{{ $user->id }} "> {{ $user->name }} </option>
      @endforeach
    </select>
  </div>
  <br>
  <div class="form-group text-center">
    <button type="submit" class="btn btn-success">Create</button>
  </div>
</form>
@endsection