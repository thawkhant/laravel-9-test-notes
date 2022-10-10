<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>About</title>
</head>
<body>
    <a href="{{url('home')}}">Home</a> |
    <a href="{{url('about')}}">About</a> |
    <a href="{{url('contact')}}">Contact</a>
    <a href="{{url('customer')}}">Customer</a>
    <a href="{{url('support/help/service')}}">Service</a>
    <hr/>

   <h1 style="color:green;">This is About Page</h1>

   {{$message}};
   {{-- <h3>{{$result}}</h3> --}}
</body>
</html>
