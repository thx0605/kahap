@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <form method="post" action="{{route('createPost')}}">
        @csrf
        <div class="form-group">
            <div class="col-md-6">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
            </div>
            <div class="col-md-6">
                <label for="gender">Gender</label>
                <select id="gender" name="gender" class="form-control">
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="birthday">Birthday</label>
                <input type="date" class="form-control" id="birthday" name="birthday" placeholder="Enter Birthday" required>
            </div>
            <div class="col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
            </div><div class="col-md-6">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone" required>
            </div>
            <div class="col-md-6">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" required>
            </div>


        </div>
        <div class="col-md-6 text-right">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>
</div>
@stop