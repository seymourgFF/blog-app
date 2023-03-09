@extends('layouts.head')
@section('content')
    <main class="blog">
        <div class="container">
            <section class="mt-5 featured-posts-section">
                <div class="row">
                    <div class="col-md-3">
                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    @if(empty($user->main_image))
                                        <img class="profile-user-img img-fluid img-circle"
                                             src="/storage/images/User-avatar.svg.png">
                                    @else
                                        <img class="profile-user-img img-fluid img-circle"
                                             src="{{asset('/storage/'.$user->main_image)}}">
                                    @endif
                                </div>

                                <h3 class="profile-username text-center">{{$user->name}}</h3>


                                <ul class="list-group list-group-unbordered mb-3">
                                    @if($user->description != '')
                                        <li class="list-group-item">
                                            <a class="float-right">{{$user->description}}</a>
                                        </li>
                                    @endif
                                </ul>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>
                    <div class="col-md-9">
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="row blog-post-row">
                                    @if(count($posts_users) != 0 )
                                        @foreach($posts_users as $post)
                                            <div class="col-md-5 blog-post" data-aos="fade-up">
                                                <div class="blog-post-thumbnail-wrapper">
                                                    <a href="{{route('post.show',$post->id)}}"
                                                       class="blog-post-permalink"><img
                                                            src="{{'/storage/'.$post->main_image}}" alt="blog post"></a>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <p class="blog-post-category">{{$post->category->Title}}</p>
                                                    @auth()
                                                        <form action="{{route('post.likes.store', $post->id)}}"
                                                              method="POST">
                                                            @csrf
                                                            <span>{{$post->liked_users_count}}</span>
                                                            <button style="border: 0px; background: transparent"
                                                                    type="submit">
                                                                @if(auth()->user()->likedPosts->contains($post->id))
                                                                    <i class="fas fa-heart"></i>
                                                                @else
                                                                    <i class="far fa-heart"></i>
                                                                @endif
                                                            </button>
                                                        </form>
                                                    @endauth
                                                    @guest()
                                                        <div style="gap:5px;"
                                                             class="d-flex gap-md-3 align-items-center">
                                                            <span>{{$post->liked_users_count}}</span><i
                                                                class="far fa-heart"></i>
                                                        </div>
                                                    @endguest
                                                </div>
                                                <a href="{{route('post.show',$post->id)}}" class="blog-post-permalink">
                                                    <h6 class="blog-post-title">{{$post->Title}}</h6>
                                                </a>
                                            </div>
                                        @endforeach
                                    @else
                                        <h1>У организатора нет мероприятий на ближайшее время</h1>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </main>

@endsection
