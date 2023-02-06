@extends('layouts.head')
@section('content')
    <div class="container"><a href="{{route('post.edit',$post->id)}}">Edit this post</a></div>
    <div class="container">
        <form action="{{route('post.delete',$post->id)}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete this post"></input>
        </form>
    </div>
        <div class="container">
            <h1>{{$post->title}}</h1>
            <div>{{$post->content}}</div>
        </div>
    </div>
@endsection
