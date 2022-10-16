<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Customerr;


class CustomerrController extends Controller
{
    // customer home page

    public function abc(){
        return view('insert');
    }

    // create customer data
     // MVC => Model View Controller
    public function xyz(Request $request){
      //  dd($request->all());

        // first way

        // Customerr::create([                 
        //   'name' => $request->customerName,
        //   'address' => $request->customerAddress,
        //   'phone' => $request->customerPhone
        // 'created_at' => Carbon::now();
        // 'updated_at' => Carbon::now();
        // ]);

        // return "Create Success...";


        // second way

        $record = new Customerr();      // Model ko decleration loke dar
        $record->name = $request->customerName;
        $record->address = $request->customerAddress;
        $record->phone = $request->customerPhone;
        $record->created_at = Carbon::now();
        $record->updated_at = '2025-01-01 11:00:01';
        $record->save();

        return "Created Success....";


    }

    // get customer data

    public function read(){
        $data = new Customerr;
        // dd($data->find(4)->toArray());
        // dd($data->first()->toArray());
        // dd($data->findOrFail(100));   // ma shi yin 404 error shi yin pya dal

        // 2 nd method
       // dd(Customerr::find(1)->toArray());
        // dd(Customerr::findOrFail(0)->toArray());
        dd(Customerr::where("address",'2')->get()->toArray());  // that is not matter aye say sir

    }
}

