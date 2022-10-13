@extends('./layouts.main')

@section('myContent')

<a href="{{url('postTest')}}">POST method test</a>   <!-- error -->

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

   @endsection

   @section('footer')
 <h1>This is footer tesing</h1>
   <p style="color: green;">lorem ipsum is type scripting languag eand everyone know about thaw alkhasdf . adthawdkj athaw khknl</p>
   @endsection
  
  @push("myJs")        //stack method nat pay htar lot stack net pyan call ya dr
   <script type="text/javascript">
   	// alert("XSS")
   </script>
   @endpush

