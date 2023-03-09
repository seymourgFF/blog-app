@extends('layouts.head')
@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Организаторы</h1>

            <section class="featured-posts-section">

                <div class="row">
                    @foreach($users as $user)
                        <div class="col-md-4 fetured-post blog-post" data-aos="fade-left">
                            <div class="blog-post-thumbnail-wrapper">
                                <a href="{{route('organizers.show',$user->id)}}" class="blog-post-permalink">
                                    @if(empty($user->main_image))
                                        <img class="profile-user-img img-fluid img-circle"
                                             src="/storage/images/User-avatar.svg.png">
                                    @else
                                        <img class="profile-user-img img-fluid img-circle"
                                             src="{{asset('/storage/'.$user->main_image)}}">
                                    @endif
                                </a>
                            </div>

                            <a href="{{route('organizers.show',$user->id)}}" class="blog-post-permalink">
                                <h6 class="blog-post-title">{{$user->name}}</h6>
                            </a>
                        </div>
                    @endforeach
                </div>

            </section>
        </div>

    </main>

@endsection
