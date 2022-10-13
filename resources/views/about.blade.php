@extends('./layouts.main')

@section('myContent')

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

@endsection


@section('footer')

<h1 style="background:green;">The End</h1>

@endsection
