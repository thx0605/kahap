<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberRequest;
use App\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MembersController extends Controller
{
    //
    public function index()
    {
        $datas = Member::latest() -> paginate(10);
        return view('members.index',['datas' => $datas]);
    }

    public function create()
    {
        return view('members.create');
    }

    public function createPost(MemberRequest $request)
    {
        Member::create([
            'name' => $request -> name,
            'gender' => $request -> gender,
            'birthday' => $request -> birthday,
            'email' => $request -> email,
            'phone' => $request -> phone,
            'address' => $request -> address
        ]);
        return redirect() -> route('members');
    }

    public function edit($id)
    {
        $data = Member::Where('id',$id) -> first();
        return view('members.edit',['data' => $data]);
    }

    public function editPost(Request $request)
    {
        $id = $request -> id;
        $member = Member::Where('id',$id) -> first();
        $member -> name = $request -> name;
        $member -> gender = $request -> gender;
        $member -> birthday = $request -> birthday;
        $member -> email = $request -> email;
        $member -> phone = $request -> phone;
        $member -> address = $request -> address;
        $member -> save();
        return redirect() -> route('members');
    }

    public function delete(Request $request)
    {
        $id = explode(',',$request->delete_input);
        Member::WhereIn('id',$id) -> delete();
        return redirect() -> route('members');
    }

    public function search(Request $request)
    {
        $search = $request -> get('search');
        $datas = Member::Where('name','like','%'.$search.'%') -> paginate(10);
        return view('members.index',['datas' => $datas]);
    }
}
