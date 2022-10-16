<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Insert</title>
</head>
<body>
     <h1>Customer Register Page</h1>

     <form action="{{route('customer#insert')}}" method="POST">
     	@csrf
     	Name : <input type="text" name="customerName" required><br/>
     	Address : <textarea name="customerAddress" cols="20" rows="5" required></textarea><br/>
     	Phone : <input type="number" name="customerPhone"  required><br/>

     	<input type="submit" value="Register">

     </form>
</body>
</html>