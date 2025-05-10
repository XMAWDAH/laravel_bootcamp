@extends('Layouts.defult')
@section('content')   
  
<p>Welcome to Book stores</p>

{{$Products->id}} \
{{$Products->title}} =
{{$Products->price}}

<br><br><br>
<button>
<a href="/" class="btn btn-box">Go Back</button></a>
    <br><br>
    <button>
<a href="/items/{id}/delete" class="btn btn-default">Delete</button></a>

 </div>
@endsection 