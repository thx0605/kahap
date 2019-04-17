@extends('layouts.master')
@section('css')
    <link href="{{asset('asset/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@stop
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <div class="btn-group">
            <a href="{{route('create')}}" class="btn btn-primary">ADD</a>
            <a href="#" id="delete" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">DELETE</a>
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">MemberTables</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="block-content bg-body-light">
                        <!-- Search -->
                        <form action="#" method="post" onsubmit="return true;">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search Member..">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-secondary">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- END Search -->
                    </div>
                    <table class="table" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th><input name="all" type="checkbox"></th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Birthday</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datas as $data)
                            <tr>
                                <td><input type="checkbox" name="chbox" value="{{ $data -> id }}"></td>
                                <td>{{ $data -> name }}</td>
                                <td>{{ $data -> gender }}</td>
                                <td>{{ $data -> birthday }}</td>
                                <td>{{ $data -> email }}</td>
                                <td>{{ $data -> phone }}</td>
                                <td>{{ $data -> address }}</td>
                                <td><a class="btn btn-info" href="{{route('members').'/edit/'.$data -> id}}">Edit</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <nav aria-label="Products navigation">
                        <ul class="pagination justify-content-end">
                            {{$datas->links()}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">DELETE</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <form method="post" action="{{route('delete')}}">
                        <input type="hidden" name="_method" value="DELETE">
                        @csrf
                        <input type="hidden" name="delete_input">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Yes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@stop
@section('javascript')
    <script>
        var arr = "";
        var checkboxs = document.getElementsByName('chbox');
        $("input[name='all']").click(function () {
            for(var i=0;i<checkboxs.length;i++){
                if(checkboxs[i].checked){
                    checkboxs[i].checked = false;
                }else{
                    checkboxs[i].checked = true;
                }
            }
        });
        $("#delete").click(function () {
            arr = "";
            $.each(checkboxs,function (i,v) {
                if(v.checked){
                    arr += v.value+",";
                }
            });
            $("input[name='delete_input']").val(arr.substr(0,arr.length-1));
        });
    </script>
    <!-- Page level plugins -->
    <script src="{{asset('asset/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('asset/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('asset/js/demo/datatables-demo.js')}}"></script>
@stop