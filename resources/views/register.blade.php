<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
</head>
<body>
     <h1>Registe Page</h1>
     <hr/>

  <!--    <form action="{{url('postTest/thawkhat/22')}}" method="post">
     	@csrf
     	
     	 <button>Click to Test </button>
     	
     </form>  -->

     <!-- <form action="{{route('customerPostTest',['thawkhan',25])}}" method="post">
     	
     	{{csrf_field()}}
     	 <button type="submit">Click to Test </button>
     	
     </form> -->

     <form action="{{route('customerPostTest',[10,'Cyc B@ke!'])}}" method="post">
     		@csrf
            
          Name : <input type="text" name="userName"><br/><br/>
          Age : <input type="number" name="userAge"><br/><br/>
          Address : <input type="text" name="userAddress"><br/><br/>
          Gender : 
          <select name="userGender">
           <option value="M">Male</option>
           <option value="F">Female</option>	
          </select><br/><br/>

     	 <button type="submit">Click to Test </button>
     	
     </form>
</body>
</html>