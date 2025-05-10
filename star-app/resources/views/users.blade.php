@extends('Layouts.defult')
@section('content')   
  
<h1>List of Users</h1>
<ul>
    @foreach ($users as $user)
    <br>
        <li>{{ $user->id }} | {{ $user->name }} | {{ $user->email }}  </li>
    @endforeach
</ul>
@endsection
