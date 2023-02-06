@extends('layouts.head')
@section('content')
    <div class="container">
        <h1 class="oleez-page-title wow fadeInUp">Blog Standard</h1>
        <div class="row">
            <div class="col-md-8">
                <?php $cikl = 1?>
                @foreach($posts as $post)
                        <article class="blog-post wow fadeInUp">
                            <img src="../../../../../Users/User/Downloads/urbanui-oleez-landing-page-ef3ea4adec34/assets/images/Standard_list_blog/Standard_1@2x.jpg" alt="blog post" class="post-thumbnail">

                            <h4 class="post-title">{{$post->title}}</h4>
                            <p class="post-excerpt">{{$post->description}}</p>
                            <a href="{{route('post.show',$post->id)}}" class="post-permalink">READ MORE</a>
                        </article>

                @endforeach

            </div>
            <div class="col-md-4">
                <div class="sidebar-widget wow fadeInUp">
                    <h5 class="widget-title">Tags</h5>
                    <div class="widget-content">
                        <a href="#!" class="post-tag">Design Studio</a>
                        <a href="#!" class="post-tag">Creative Design</a>
                        <a href="#!" class="post-tag">Marketing</a>
                        <a href="#!" class="post-tag">Typography</a>
                        <a href="#!" class="post-tag">Team</a>
                        <a href="#!" class="post-tag">Project</a>
                    </div>
                </div>
                <div class="sidebar-widget wow fadeInUp">
                    <h5 class="widget-title">Share</h5>
                    <div class="widget-content">
                        <nav class="social-links">
                            <a href="#!">Fb</a>
                            <a href="#!">Tw</a>
                            <a href="#!">In</a>
                            <a href="#!">Be</a>
                        </nav>
                    </div>
                </div>
                <div class="sidebar-widget wow fadeInUp">
                    <h5 class="widget-title">Gallery</h5>
                    <div class="widget-content">
                        <div class="gallery">
                            <a href="../../../../../Users/User/Downloads/urbanui-oleez-landing-page-ef3ea4adec34/assets/images/Blogstandard/Blogstandard_@2x.jpg" class="gallery-grid-item" data-fancybox="widget-gallery">
                                <img src="../../../../../Users/User/Downloads/urbanui-oleez-landing-page-ef3ea4adec34/assets/images/Blogstandard/Blogstandard_@2x.jpg" alt="gallery item">
                            </a>
                            <a href="../../../../../Users/User/Downloads/urbanui-oleez-landing-page-ef3ea4adec34/assets/images/Blogstandard/Blogstandard_@2x.jpg" class="gallery-grid-item" data-fancybox="widget-gallery">
                                <img src="../../../../../Users/User/Downloads/urbanui-oleez-landing-page-ef3ea4adec34/assets/images/Blogstandard/Blogstandard_@2x.jpg" alt="gallery item">
                            </a>
                            <a href="../../../../../Users/User/Downloads/urbanui-oleez-landing-page-ef3ea4adec34/assets/images/Blogstandard/Blogstandard_@2x.jpg" class="gallery-grid-item" data-fancybox="widget-gallery">
                                <img src="../../../../../Users/User/Downloads/urbanui-oleez-landing-page-ef3ea4adec34/assets/images/Blogstandard/Blogstandard_@2x.jpg" alt="gallery item">
                            </a>
                            <a href="../../../../../Users/User/Downloads/urbanui-oleez-landing-page-ef3ea4adec34/assets/images/Blogstandard/Blogstandard_@2x.jpg" class="gallery-grid-item" data-fancybox="widget-gallery">
                                <img src="../../../../../Users/User/Downloads/urbanui-oleez-landing-page-ef3ea4adec34/assets/images/Blogstandard/Blogstandard_@2x.jpg" alt="gallery item">
                            </a>
                            <a href="../../../../../Users/User/Downloads/urbanui-oleez-landing-page-ef3ea4adec34/assets/images/Blogstandard/Blogstandard_@2x.jpg" class="gallery-grid-item" data-fancybox="widget-gallery">
                                <img src="../../../../../Users/User/Downloads/urbanui-oleez-landing-page-ef3ea4adec34/assets/images/Blogstandard/Blogstandard_@2x.jpg" alt="gallery item">
                            </a>
                            <a href="../../../../../Users/User/Downloads/urbanui-oleez-landing-page-ef3ea4adec34/assets/images/Blogstandard/Blogstandard_@2x.jpg" class="gallery-grid-item" data-fancybox="widget-gallery">
                                <img src="../../../../../Users/User/Downloads/urbanui-oleez-landing-page-ef3ea4adec34/assets/images/Blogstandard/Blogstandard_@2x.jpg" alt="gallery item">
                            </a>
                            <a href="../../../../../Users/User/Downloads/urbanui-oleez-landing-page-ef3ea4adec34/assets/images/Blogstandard/Blogstandard_@2x.jpg" class="gallery-grid-item" data-fancybox="widget-gallery">
                                <img src="../../../../../Users/User/Downloads/urbanui-oleez-landing-page-ef3ea4adec34/assets/images/Blogstandard/Blogstandard_@2x.jpg" alt="gallery item">
                            </a>
                            <a href="../../../../../Users/User/Downloads/urbanui-oleez-landing-page-ef3ea4adec34/assets/images/Blogstandard/Blogstandard_@2x.jpg" class="gallery-grid-item" data-fancybox="widget-gallery">
                                <img src="../../../../../Users/User/Downloads/urbanui-oleez-landing-page-ef3ea4adec34/assets/images/Blogstandard/Blogstandard_@2x.jpg" alt="gallery item">
                            </a>
                            <a href="../../../../../Users/User/Downloads/urbanui-oleez-landing-page-ef3ea4adec34/assets/images/Blogstandard/Blogstandard_@2x.jpg" class="gallery-grid-item" data-fancybox="widget-gallery">
                                <img src="../../../../../Users/User/Downloads/urbanui-oleez-landing-page-ef3ea4adec34/assets/images/Blogstandard/Blogstandard_@2x.jpg" alt="gallery item">
                            </a>
                            <a href="../../../../../Users/User/Downloads/urbanui-oleez-landing-page-ef3ea4adec34/assets/images/Blogstandard/Blogstandard_@2x.jpg" class="gallery-grid-item" data-fancybox="widget-gallery">
                                <img src="../../../../../Users/User/Downloads/urbanui-oleez-landing-page-ef3ea4adec34/assets/images/Blogstandard/Blogstandard_@2x.jpg" alt="gallery item">
                            </a>
                            <a href="../../../../../Users/User/Downloads/urbanui-oleez-landing-page-ef3ea4adec34/assets/images/Blogstandard/Blogstandard_@2x.jpg" class="gallery-grid-item" data-fancybox="widget-gallery">
                                <img src="../../../../../Users/User/Downloads/urbanui-oleez-landing-page-ef3ea4adec34/assets/images/Blogstandard/Blogstandard_@2x.jpg" alt="gallery item">
                            </a>
                            <a href="../../../../../Users/User/Downloads/urbanui-oleez-landing-page-ef3ea4adec34/assets/images/Blogstandard/Blogstandard_@2x.jpg" class="gallery-grid-item" data-fancybox="widget-gallery">
                                <img src="../../../../../Users/User/Downloads/urbanui-oleez-landing-page-ef3ea4adec34/assets/images/Blogstandard/Blogstandard_@2x.jpg" alt="gallery item">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-widget wow fadeInUp">
                    <h5 class="widget-title">Categories</h5>
                    <div class="widget-content">
                        <ul class="category-list">
                            <li><a href="#!">Animation</a></li>
                            <li><a href="#!">Branding</a></li>
                            <li><a href="#!">Graphic Design</a></li>
                            <li><a href="#!">Photography</a></li>
                            <li><a href="#!">Web Developing</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
