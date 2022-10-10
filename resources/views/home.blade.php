<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Home</title>
	</head>
	<body>

		<a href="{{url('home')}}">Home</a> |
		<a href="{{route('aboutt')}}">About</a> |
		<a href="{{url('contact')}}">Contact</a>
		<a href="{{url('customer')}}">Customer</a>
        <!-- <a href="{{url('support/help/service')}}">Service</a> -->
        <a href="{{route('ser')}}">Service</a>
		<hr/>
		<!--  {{ url("home")}} |           // url ko pya pay dal
		{{ url('about')}} |
		{{ url("contact")}} -->
		<h1 style="color:red">This is Home Page</h1>
		<!-- <h3>{{$name}}</h3> -->
		{!!$name!!}
		<h3>{{$job}}</h3>
	</body>
</html>
