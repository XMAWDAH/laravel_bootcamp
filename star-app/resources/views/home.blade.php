
@extends('Layouts.defult')
@section('content')    
  
<p>Welcome to Book stores</p>
<h1>"Behind every book is an idea, and behind every idea is a step forward"</h1>

@foreach ($Products as $Product)
    <div>
 <h3><a href="/product/{{$Product['id']}}"> {{$Product['title'] }} </a></h3>
@endforeach
 </div>

@endsection


