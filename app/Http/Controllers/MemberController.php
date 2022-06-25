<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    function addMember(Request $request)
    {
        $member =  new Member;
        $member -> name =  $request -> name;
        $member -> phone = $request -> phone;
        $member -> save();
    }

    function displayMember()
    {
        return Member::all();
    }

    function displayuniqemember($id)
    {
        $datas = Member::find($id);
        return $datas;
    }

    function memberbyid($id)
    {
        $datas = Member::find($id);
        return $datas;
    }
}
