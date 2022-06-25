<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use App\Models\Driver;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    function addOwner(Request $request)
    {
        $owner = new Owner;
        $owner -> name = $request -> name;
        $owner -> phone = $request -> phone;
        $owner -> save();

        return response()->json(['message' => 'Request added succesfullyu'], 200);
    }

    function addDriverToOwner($id)
    {
        $name = Driver::select('name')->where('id', $id)->get();
        $phone = Driver::select('phone')->where('id', $id)->get();



        $owner = new Owner;
        $owner -> name = $name;
        $owner -> phone = $phone;
        $owner -> save();

        return Driver::find($id);
    }

    function displayOwner()
    {
        $datas = Owner::all();
        return $datas;
    }
}
