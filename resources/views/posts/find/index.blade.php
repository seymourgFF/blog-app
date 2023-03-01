@extends('layouts.head')
@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Поиск мероприятий</h1>

            <section class="featured-posts-section">
                <div class="row mb-5">
                    <form method="GET" action="/filter" class="d-flex w-100 justify-content-around align-items-center">

                        <label>Локация
                            <div class=''>
                                <select class="form-control h-50 rounded-pill" name="category_id" id="category_id">
                                    @foreach($cats as $cat)
                                        <option
                                            {{app('request')->input('category_id') == $cat->id ? 'selected' : ''}} value="{{$cat->id}}">{{$cat->Title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </label>

                        <label>Старт мероприятия
                            <div class='date'>
                                <input style="background-color: #0000;" class="form-control h-50 rounded-pill"
                                       name="datestart" id='datetimepicker' type='text'
                                       value="{{ app('request')->input('datestart') }}"/>
                                @error('datestart')
                                <div class="danger text-danger">{{ $message }}</div>
                                @enderror
                                <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                            </div>
                        </label>
                        <input class="form-control h-50 rounded-pill w-25" value="Поиск" type="submit"
                               style="height: 45px!important;"/>
                    </form>
                </div>
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
                    @if(count($posts) == 0 )
                        <h2 style="height: 300px" class="mb-5 mt-5 text-center w-100">Мы не смогли найти мероприятие с такими параметрами :(</h2>
                    @endif
                </div>
                <div class="row d-flex justify-content-center pagination">{{$posts->withQueryString()->links()}}</div>
            </section>
        </div>

    </main>

@endsection
