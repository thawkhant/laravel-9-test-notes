<?php

use Illuminate\Support\Facades\Route;

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



// function sum($num1,$num2,$num3){
//     return $num1;
// }

// sum(1,2,3);



