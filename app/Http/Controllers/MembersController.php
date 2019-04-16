<?php

namespace App\Http\Controllers;

use App\Member;
use Dotenv\Validator;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    //
    public function index()
    {
        $datas = Member::all();
        return view('members.index',['datas' => $datas]);
    }

    public function create()
    {
        return view('members.create');
    }

    public function createPost(Request $request)
    {
//        dd($request->all());
//        $rules = [
//            'name' => 'required',
//            'gender' => 'required',
//            'birthday' => 'required|date',
//            'email' => 'required|email',
//            'phone' => 'required|numeric',
//            'address' => 'required'
//        ];
//        $validator = Validator::make($request -> all(),$rules);
//        if($validator -> fails()) {
//            return back()
//                ->withErrors($validator)
//                ->withInput();
//        }
//        Member::create([
//
//        ]);
//        return view('members.create');
    }
}
