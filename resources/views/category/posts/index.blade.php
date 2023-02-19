@extends('layouts.head')
@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">{{$category->Title}}</h1>
            <section class="featured-posts-section">
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-md-4 fetured-post blog-post" data-aos="fade-left">
                            <div class="blog-post-thumbnail-wrapper">
                                <a href="{{route('post.show',$post->id)}}" class="blog-post-permalink"><img
                                        src="{{'/storage/'.$post->main_image}}" alt="blog post"></a>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="blog-post-category">{{$post->category->Title}}</p>
                                @auth()
                                <form action="{{route('post.likes.store', $post->id)}}" method="POST">
                                    @csrf
                                        <span>{{$post->liked_users_count}}</span>
                                        <button style="border: 0px; background: transparent" type="submit">
                                            @if(auth()->user()->likedPosts->contains($post->id))
                                                <i class="fas fa-heart"></i>
                                            @else
                                                <i class="far fa-heart"></i>
                                            @endif
                                        </button>
                                </form>
                                @endauth
                                @guest()
                                    <div style="gap:5px;" class="d-flex gap-md-3 align-items-center">
                                        <span>{{$post->liked_users_count}}</span><i class="far fa-heart"></i>
                                    </div>
                                @endguest
                            </div>
                            <a href="{{route('post.show',$post->id)}}" class="blog-post-permalink">
                                <h6 class="blog-post-title">{{$post->Title}}</h6>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="row d-flex justify-content-center pagination">{{$posts->links()}}</div>
            </section>

        </div>

    </main>
@endsection
