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

   <hr/>
   
   @php
      echo "hello";
   @endphp

    {{date("d/m/Y")}}

    <!-- @if(true)
       <h1>This is true status</h1>
    @endif -->

   <!--  @if(false)
       <h1>This is true status</h1>
       @else
       <h1>This is false status</h1>
    @endif
 -->

  @if(false)
       <h1>This is true status</h1>
       @elseif(true)
       <h1>This is else if status</h1>
       @else
       <h1>This is false status</h1>
    @endif

    <hr/>

    @for($i=0; $i<10; $i++)
      <h4>This is {{ $i }}</h4>
    @endfor

    <hr/>

   <!--  @foreach ($fruits as $f)
      <h3>{{$f}}</h3>
    @endforeach   -->

    @for($i=0 ; $i < count($fruits); $i++)
    <h1>This is {{ $fruits[$i] }}</h1>

    @endfor


  <!--   @isset($name)
      
      <h1 style="color:red;" >{{$name}}</h1>
     
    @endisset -->

      @empty($name)
      
      <h1 style="color:red;" >This is empty</h1>
     
    @endempty
</body>
</html>
