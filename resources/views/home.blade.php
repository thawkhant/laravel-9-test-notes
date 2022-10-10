<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Home</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">  <!-- public ka link -->
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

		<hr/>

		<a href="{{url('resultPage/20/40')}}">URL</a> |
		<a href="{{route('mycalculation',[50,40])}}">Route</a> |
		<a href="{{url('paraPass/thawkhant')}}">Para Pass URL</a> |
        <a href="{{route('passWithroute','Bounty Hunter')}}">Para Pass Route</a>
         <br/><br/>
        <img src="{{asset('image/profile.webp')}}" width="300px">


	</body>
	<script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</html>
