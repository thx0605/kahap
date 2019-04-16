<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    //
    public function index()
    {
        $datas = Member::all();
        return view('members.index',['datas' => $datas]);
    }
}
