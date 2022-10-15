<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function outputHello(){    // public ka ma par lal ya dl par lal ya dal
        dd("Hello Mello");
    }


    public function compactlist(){
        $message = "hello this is compact testing message";
        $error = "This is error message";
        $name = "My name is Thaw Khant";
        // return view('compactTest',['message'=>"This is testing message"]);

        return view('compactTest',compact("message","error","name"));
    }
};
