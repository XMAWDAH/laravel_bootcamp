<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <style>

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
}

li {
  float: left;

}

li a {
  display: white;
  padding: 10px;
}

        body {background-color:#ede7f6;
             background-image: url("b1.png");}
        p{
            font-size:20px;
            text-align:center;
            color:darkmagenta;
        }
        h1{
            font-size:20px;
            text-align:center;
        }
        
.task {
      margin-bottom: 10px;
    }
  
        </style>
        
            <ul>  <li><a href="/">Home</a> </li>
                <li>     <a href="/tasks/todo" >Todo</a></li>
                       <li> <a href="/tasks/onprogress">Onprogress</a></li>
                       <li>  <a href="/tasks/done">Done</a> </li>
                       <li>  <a href="/users">Users</a> </li> 
                       <li>  <a href="/tasks/due">DueTasks</a> </li>                      
            </ul>
@yield('content')
</body>
</html>

