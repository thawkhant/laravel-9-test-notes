<?php
 
use Illuminate\Support\Facades\Route;  // Default par dal
use Illuminate\Support\Facades\Http;   // line 132 mar use htar dal
use Illuminate\Http\Request;  // for Request method
use App\Http\Controllers\CustomerController;   // input loke pay dar

Route::get('/', function () {
    return view("welcome");   // view is from resources / welcome.blad.php
});

// Route::get("URI",Clusure Function);  // front ka route back ka function

// Route::get("/home",function(){
//    return view("home");
// });

// with parm


// Route::get("/home",function(){
//    return view("home",["key" => "value"]);
// });

Route::get("/home",function(){
   return view("home",["name" => "<h1>Thaw Khant</h1>" , "job" => "BountyHunter"]);
});

Route::get("contact",function(){
    return view("contact");
});

// Route::get("/about",function(){
//     return view("about",["message" => "This is messag from server side"]);
// });

// Route::get("/about",function(){
//     $num1 = 10;
//     $num2 = 20;
//     $result = $num1+$num2;
//     return view("about",["message" => "This is messag from server side","result" => $result]);
// });

// Route::view('URI','View','Parameter');

Route::view('about','about',['name' => "Thaw Khant",'message' => "This is really important message", "fruits" => ['mango','apple','oragne','grape']])->name('aboutt');   // super easy

Route::view('/support/help/service','service')->name('ser');

Route::get("customer/list",function(){
    return view('customer.list');            //   .  lay ka nyun lite dr
});

// Route::get('/user/contact',function(){
//     return "user contact Page";
// });

Route::view('contact','contact',["num1" => 10 , "num2" => 20 ]);

Route::get('vip/male',function(){
    return view('customer.vipCustomer.male.list');
});

Route::get("female",function(){
     return view('customer.female.list');
});


Route::get("/customer/{name}/{job}",function($name,$job){
    return "customer name is ". $name . " and he is " . $job;
});

Route::get("/customer/{name}/register/{job}",function($name,$job){
    return "customer name is ". $name . " and he is " . $job;
});

// Default  // More in Documentaion

Route::get("/customer/{name?}/{job?}",function($name = "thaw khant",$job = "Developer"){
    return "customer name is ". $name . " and he is " . $job;
});

Route::get("resultPage/{num1}/{num2}",function($num1,$num2){
    $myresult = $num1 + $num2;
    return view('result',['result'=> $myresult]);
})->name('mycalculation');

Route::get("paraPass/{name?}",function($myname = "your name is empty"){
    return $myname;
})->name('passWithroute');


Route::get("yield",function(){
    return view('layouts.main');
});



// function sum($num1,$num2,$num3){
//     return $num1;
// }

// sum(1,2,3);



Route::get('sum/{num1}/{num2}',function($num1,$num2){
    return $num1+$num2;
});


Route::get('add/{num1}/{num2}',fn($num1,$num2) => $num1+$num2);  //fn function // more smooth 

//https://fakestoreapi.com/

// pure PHP
Route::get('getData',function(){
    $data = file_get_contents('https://fakestoreapi.com/products');  // api ko ya yu dar
    $jsonData = json_decode($data);  // json data so yin decode pyan loke pay ya dal
    // return $data;
   // return $jsonData[0]->price;  // data is locate in Array in then Object

   // dd($jsonData);   // extension ma par bal net json format ko hla  hla lay htoke pay dar
  // dd("hello");  // dd ka code twe ko block loke pay tay dal
    
    $result = array_filter($jsonData,fn($j) => $j ->price < 10);

    dd($result);

});


Route::get('laraGetData',function(){
    $data = Http::get("https://fakestoreapi.com/products");  // fake api ko yu dar bal Http method net yuu dar
  // $data = $data->json();  //json format net lo lot
     $abc = $data->object();  // object format net lo lot pr bya
   // dd($data);
   // dd($data[0]['title']);   data is located in Array and then Array
     dd($abc[0]->title);  // data is located in Array and then object

});


Route::get('laraGetDatas',function(){
    $data = Http::get('https://fakestoreapi.com/products')->object(); // this style ka upper ka net a tu tu bl
    $data = collect($data)->where("price","<",10)->toArray();  // collect net yae nee // doc twar read 
  //  dd($data[6]->title);
    
     foreach($data as $item){
        echo $item->title . "<br/>";
     };
});


Route::view('register','register');


// POST Method

// Route::post('postTest/{name}/{age}',function($name,$age){
Route::post('postTest/{id}/{name}',function(Request $req,$id,$name){
    // return "This is post method testing";
    // return "hello my name is " . $name . "and my age is " . $age;
   // return "hello my name is ";

   // dd($req->all());  // a kon call dar


   // Array ko pyan change lite dar pr sir
    $userData = [
     'name' => $req->userName,
     'age' => $req->userAge,
     'address' => $req->userAddress,
     'gender' => $req->userGender
    ];

    dd($req->all(),$userData,$id,$name);   // data ko 2 ku phan lite dar as we like pr bya
})->name('customerPostTest');



// Route::get("customerRegister",'CustomerController@register');   laravel 5,6,7 version

// Route::get('customerRegister',[CustomerController::class,'register']);



// customer controller
                         // twar ya mal route     / loke ya ml function
 Route::get('helloTest',[CustomerController::class,'outputHello']);

 Route::get('compact/list',[CustomerController::class,'compactlist']);