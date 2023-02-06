@extends('layouts.head')
@section('content')
    <div class="posts-vivod-mass">
        <div class="container">
            <h1>All categories</h1>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Title</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cats as $cat)
                    <tr>
                        <td><a href="{{route('cats.show',$cat->id)}}">{{$cat->title}}</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
