<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $validator = Validator::make($request -> all(),$rules);
        if($validator -> fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        Member::create([
            'name' => $request -> name,
            'gender' => $request -> gender,
            'birthday' => $request -> birthday,
            'email' => $request -> email,
            'phone' => $request -> phone,
            'address' => $request -> address
        ]);
        return back();
    }

    public function edit($id)
    {
        $data = Member::Where('id',$id) -> first();
        return view('members.edit',['data' => $data]);
    }

    public function editPost(Request $request)
    {
        $data = Member::Where('id',$id) -> first();
        return view('members.edit',['data' => $data]);
    }

    public function delete(Request $request)
    {
        $id = explode(',',$request->delete_input);
        Member::WhereIn('id',$id) -> delete();
        return back();
    }
}
