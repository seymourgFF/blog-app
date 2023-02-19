@extends('layouts.head')
@section('content')
    <main class="blog-post">
        <div class="container">

            <h1 class="edica-page-title" data-aos="fade-up">
                <form style="font-size: 40px;" action="{{route('post.likes.store', $post->id)}}" method="POST">
                    @csrf
                    <button style="border: 0px; background: transparent" type="submit">
                        @auth()
                            @if(auth()->user()->likedPosts->contains($post->id))
                                <i class="fas fa-heart"></i>
                            @else
                                <i class="far fa-heart"></i>
                            @endif
                        @endauth
                    </button>

                    {{$post->Title}}
                </form>
            </h1>

            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">
                <!--Written by Richard Searls•--> {{$post->category->Title}}
                • Старт
                мероприятия {{$post->DateAsCarbon->translatedFormat('d F Y')}} {{$post->DateAsCarbon->format('H:i')}}
                • {{$post->comments->count()}}
                Комментария</p>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{'/storage/'.$post->main_image}}" alt="featured image" class="w-100">
            </section>
            <section class="post-content">
                <div class="row">

                    <div class="col-lg-9 mx-auto" data-aos="fade-up">
                        {!! $post->Content!!}
                    </div>
                </div>
                <div class="m-5 d-flex flex-row flex-wrap-nowrap align-items-lg-start justify-content-around">
                    <div style="height: 470px;width: 30%;" data-aos="fade-right"><!-- class="col-md-4 mb-3"-->
                        <img src="{{'/storage/'.$post->image1}}" alt="blog post" style="object-fit:cover"
                             class=" w-100 h-100">
                    </div>
                    <div style="height: 470px;width: 30%;" data-aos="fade-up"><!-- class="col-md-4 mb-3"-->
                        <img src="{{'/storage/'.$post->image2}}" alt="blog post" style="object-fit:cover"
                             class="object-fit-cover w-100 h-100">
                    </div>
                    <div style="height: 470px;width: 30%;" data-aos="fade-left"><!-- class="col-md-4 mb-3"-->
                        <img src="{{'/storage/'.$post->image3}}" alt="blog post" style="object-fit:cover"
                             class="object-fit-cover w-100 h-100">
                    </div>

                </div>
            </section>
            <section class="statistic" style="margin:70px 0px;">
                <div class="row">
                    <div class="col-lg-9 mx-auto d-flex justify-content-between" data-aos="fade-down">
                        <h4>Начало {{$post->DateAsCarbon->diffForHumans()}}</h4>
                        <h4>{{$post->DateAsCarbon->translatedFormat('d F Y')}} {{$date->format('H:i')}}</h4>
                    </div>
                    <div class="col-lg-9 mx-auto d-flex justify-content-between" data-aos="fade-up">
                        <h3>Пойдет: {{$post->liked_users_count}} чел.</h3>
                        <form style="font-size: 40px;" action="{{route('post.likes.store', $post->id)}}" method="POST">
                            @csrf
                            <h4>
                                Я пойду
                                <button style="border: 0px; background: transparent" type="submit">
                                    @auth()
                                        @if(auth()->user()->likedPosts->contains($post->id))
                                            <i class="fas fa-heart"></i>
                                        @else
                                            <i class="far fa-heart"></i>
                                        @endif
                                    @endauth
                                </button>
                            </h4>
                        </form>
                    </div>
                </div>
            </section>
            <section class="map" style="margin:70px 0px;">
                <div class="row">
                    <div class="ya-map" style="position:relative;overflow:hidden;    width: 100%;">
                        <iframe src="https://yandex.ru/map-widget/v1/?ll={{$map_link}}&mode=whatshere&whatshere%5Bpoint%5D={{$map_link}}&z=17"
                                width="100%" height="400" frameborder="1" allowfullscreen="true"
                                style="position:relative;"></iframe>
                    </div>
                </div>
            </section>
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    @if($related_posts->isNotEmpty())
                        <section class="related-posts">
                            <h2 class="section-title mb-4" data-aos="fade-up">Related Posts</h2>
                            <div class="row">
                                @foreach($related_posts as $related_post)
                                    <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                                        <a href="{{route('post.show',$related_post->id)}}">
                                            <img src="{{'/storage/'.$related_post->main_image}}" alt="related post"
                                                 class="post-thumbnail">
                                        </a>
                                        <div class="d-flex justify-content-between">
                                            <p class="blog-post-category">{{$related_post->category->Title}}</p>
                                            @auth()
                                                <form action="{{route('post.likes.store', $related_post->id)}}"
                                                      method="POST">
                                                    @csrf
                                                    <span>{{$related_post->liked_users_count}}</span>
                                                    <button style="border: 0px; background: transparent" type="submit">
                                                        @if(auth()->user()->likedPosts->contains($related_post->id))
                                                            <i class="fas fa-heart"></i>
                                                        @else
                                                            <i class="far fa-heart"></i>
                                                        @endif
                                                    </button>
                                                </form>
                                            @endauth
                                            @guest()
                                                <div style="gap:5px;" class="d-flex gap-md-3 align-items-center">
                                                    <span>{{$related_post->liked_users_count}}</span><i
                                                        class="far fa-heart"></i>
                                                </div>
                                            @endguest
                                        </div>
                                        <h5 class="post-title">{{$related_post->Title}}</h5>
                                    </div>
                                @endforeach
                            </div>
                        </section>
                    @endif
                    @if($post->comments->isNotEmpty())
                        <section class="list-com" style="padding: 0px 0px 40px 0px;">
                            <h2>list Comments {{$post->comments->count() }}</h2>
                            <div class="card-footer card-comments">
                                @foreach($post->comments as $comment)
                                    <div class="card-comment" style="padding: 15px 0px;">
                                        <!-- <img class="img-circle img-sm" src="../dist/img/user3-128x128.jpg" alt="User Image"> -->

                                        <div class="comment-text">
                    <span class="username">
                      <div>{{$comment->user->name}}</div>
                      <span class="text-muted float-right">{{$comment->DateAsCarbon->diffForHumans()}}</span>
                    </span>
                                            {{$comment->message}}
                                        </div>
                                        <!-- /.comment-text -->
                                    </div>
                                @endforeach
                            </div>
                        </section>
                    @endif
                    @auth()
                        <section class="comment-section">
                            <h2 class="section-title mb-5" data-aos="fade-up">Leave a Reply</h2>
                            <form action="{{route('post.comment.store',$post->id)}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-12" data-aos="fade-up">
                                        <label for="comment" class="sr-only">Comment</label>
                                        <textarea name="message" id="comment" class="form-control" placeholder="Comment"
                                                  rows="10"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12" data-aos="fade-up">
                                        <input type="submit" value="Send Message" class="btn btn-warning">
                                    </div>
                                </div>
                            </form>
                        </section>
                    @endauth
                </div>
            </div>
        </div>
    </main>
@endsection
