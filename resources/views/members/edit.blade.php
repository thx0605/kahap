@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <form method="post" action="{{route('editPost')}}">
            @csrf
            <div class="form-group">
                <div class="col-md-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" value="{{$data -> name}}" id="name" name="name" placeholder="Enter Name" required>
                </div>
                <div class="col-md-6">
                    <label for="gender">Gender</label>
                    <select id="gender" name="gender" class="form-control">
                        @if($data -> gender == 'male')
                            <option selected>Male</option>
                            <option >Female</option>
                        @else
                            <option >Male</option>
                            <option selected>Female</option>
                        @endif
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="birthday">Birthday</label>
                    <input type="date" class="form-control" value="{{$data -> birthday}}" id="birthday" name="birthday" placeholder="Enter Birthday" required>
                </div>
                <div class="col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" value="{{$data -> email}}" id="email" name="email" placeholder="Enter Email" required>
                </div><div class="col-md-6">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" value="{{$data -> phone}}" id="phone" name="phone" placeholder="Enter Phone" required>
                </div>
                <div class="col-md-6">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" value="{{$data -> address}}" id="address" name="address" placeholder="Enter Address" required>
                </div>


            </div>
            <div class="col-md-6 text-right">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form>
    </div>
@stop