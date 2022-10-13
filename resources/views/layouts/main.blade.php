<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Home</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">  <!-- public ka link -->
	</head>
	<body>

		<a href="{{url('home')}}">Home Page</a> |
		<a href="{{route('aboutt')}}">About Us</a> |
		<a href="{{url('contact')}}">Contact Us</a>
		<a href="{{url('customer')}}">Our Customer</a>
        <a href="{{route('ser')}}">Our Service</a>
		<hr/>

		@yield('myContent')
       
        <h1 style="background:steelblue;">This is end of my Content Yield method</h1>

		@yield('footer')
		


	</body>
	<script src="{{asset('js/app.js')}}" type="text/javascript"></script>
	<!-- <script type="text/javascript">alert("XSS broken access")</script> -->
	<!-- @yield("myJs") -->
	@stack("myJs")          <!-- this method id only for js -->
</html>
