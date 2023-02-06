@extends('layouts.head')
@section('content')
    <div class="posts-vivod-mass">
        <div class="container">
            <h1>All posts of this category</h1>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Title</th>
                </tr>
                </thead>
                <tbody>

                @foreach($posts as $post)
                    <tr>
                        <td><a href="{{route('post.show',$post->id)}}">{{$post->title}}</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
