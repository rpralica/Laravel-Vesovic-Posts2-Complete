
@extends('layout')
@section('header-title','Posts')
@section('body-title','Posts')
@section('content')
<div class="container">
    <div class="row">

        @foreach ($posts as $post )
        <div class="col-4 d-flex mb-3">

            <div class="card bg-success text-light">
                    <a style="text-decoration: none;color: white" href="{{ route('post.singlepost',['post'=> $post]) }}">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{shorterName($post->title,15)}}</h5>
                        <p class="card-text">{{shorterName($post->body,25)}}</p>
                        <div class="card-footer mt-auto bg-success">

                    </div>

                    </div>

                </a>
                <div class="card-footer mt-auto bg-success">
                {{-- Buttons --}}

                        <div class="row">

                            <div class="col-6">

                                    <h5>{{$post->user->name}}</h5><br>
                            </div>
                            <div class="col-3 mb-1">
                                <a href="{{route('post.edit',['post'=>$post])}}" class="btn btn-warning ">Edit</a>
                            </div>

                            <div class="col-3 mb-1">
                                <form action="{{route('post.delete',['post'=>$post])}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>

                    {{-- End Buttons --}}
                </div>

                </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
