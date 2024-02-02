@extends('layout')
@section('header-title','Users')
@section('body-title','Users')

@section('content')




<div class="container">
    <div class="row">
        <div class="col-6 offset-2">


            <table class="table" style="font-size: larger;text-align: center;">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Posts</th>
                            </tr>
                        </thead>
                        <tbody id="tBody">
            @foreach ($users as $user )


                            <tr>

                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                               <td><a href="/user/{{$user->id}}/posts" class="btn btn-info">Posts</a></td>
                               <td><a href="/user/{{$user->id}}" class="btn btn-info">Delete</a></td>

                            </tr>
            @endforeach
                        </tbody>
                    </table>
        </div>
    </div>
</div>
        @endsection
