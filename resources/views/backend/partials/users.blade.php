@extends('layouts.backend')

@section('dashboard')



    <h2>Users List</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
            </tr>
            </thead>


            <tbody>
            @foreach($users as $key=>$user)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->address}}</td>
                    <td>{{$user->phone}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$users->links('pagination::bootstrap-4')}}
    </div>


@stop
