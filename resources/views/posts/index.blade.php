@extends('layouts.head')
@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Мероприятия</h1>

            <div class="row">
                <div class="col-md-8">
                    <h4 class="widget-title">Топ мероприятий</h4>
                    <section>
                        <div class="row blog-post-row">
                            @foreach($posts_rand as $post)
                                <div class="col-md-6 blog-post" data-aos="fade-up">
                                    <div class="blog-post-thumbnail-wrapper">
                                        <a href="{{route('post.show',$post->id)}}" class="blog-post-permalink"><img
                                                src="{{'storage/'.$post->main_image}}" alt="blog post"></a>
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
                    </section>
                </div>
                <div class="col-md-4 sidebar" data-aos="fade-left">
                    <div class="widget widget-post-list">
                        <h5 class="widget-title">Популярное</h5>
                        <ul class="post-list">
                            @foreach($likedposts as $post)
                                <li class="post">
                                    <a href="{{route('post.show',$post->id)}}" class="post-permalink media">
                                        <img src="{{'storage/'.$post->main_image}}" alt="blog post">
                                        <div class="media-body">
                                            <h6 class="post-title">{{$post->Title}}</h6>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget">
                        <h5 class="widget-title">Локации</h5>
                        <!--<img src="assets/images/blog_widget_categories.jpg" alt="categories" class="w-100">-->
                        <div style="gap:5px" class="d-flex flex-wrap ">
                        @foreach($categories as $category)
                            <a class="pr-2 pl-2 rounded-pill bg-body" style="color: black;background: #e0e0e03b;" href="/categories/{{$category->id}}/posts">{{$category->Title}}</a>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <section class="featured-posts-section">
                <h5 class="widget-title mb-5 mt-1">Все мероприятия</h5>
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-md-4 fetured-post blog-post" data-aos="fade-left">
                            <div class="blog-post-thumbnail-wrapper">
                                <a href="{{route('post.show',$post->id)}}" class="blog-post-permalink"><img
                                        src="{{'storage/'.$post->main_image}}" alt="blog post"></a>
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
