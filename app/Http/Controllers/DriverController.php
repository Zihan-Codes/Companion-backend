<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    function addDriver(Request $request)
    {
        $driver = new Driver;
        $driver -> name = $request -> name;
        $driver -> phone = $request -> phone;
        $driver -> save();

        return response()->json(['message' => 'Request added succesfullyu'], 200);
    }

    function displayDriver()
    {
        $driver = Driver::all();

        return response()->json([
            'status'=> 200,
            'vorder' => $driver,
        ]);
    }

    function displayDriverByid($id)
    {
        $datas = Driver::find($id);
       // return $datas;
        return response()->json([
            'status'=> 200,
            'vorder' => $datas,
        ]);

       // $datas = Driver::select('name')->where('id', $id)->get();
       // return $datas;

    }
    function displayDriverid($id)
    {
        $datas = Driver::find($id);
        return $datas;
    }
}
