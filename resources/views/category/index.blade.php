@extends('layouts.head')
@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Categories</h1>
            <section class="featured-posts-section">
                    <nav class="footer-nav">
                        @foreach($categories as $category)

                            <a href="{{route('category.posts.index',$category->id)}}" class="nav-link">{{$category->Title}}</a>
                        @endforeach

                    </nav>
            </section>
        </div>

    </main>
@endsection
