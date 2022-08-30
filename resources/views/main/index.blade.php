@extends('layouts.main')
@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Блог</h1>
            <section class="featured-posts-section">
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
                            <div class="blog-post-thumbnail-wrapper">
                                <img src="{{Storage::url($post->image)}}" alt="blog post">
                            </div>
                            <p class="blog-post-category">{{$post->category->title}}</p>
                            <a href="{{route('post.index', $post->id)}}" class="blog-post-permalink">
                                <h6 class="blog-post-title">{{$post->title}}</h6>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="mx-auto" >{{$posts->links()}}</div>
            </section>
            <div class="row">
                <div class="col-md-8">
                    <section>
                        <div class="row blog-post-row">
                            @foreach($randomPosts as $randomPost)
                                <div class="col-md-6 blog-post" data-aos="fade-up">
                                    <div class="blog-post-thumbnail-wrapper">
                                        <img src="{{Storage::url($randomPost->image)}}" alt="{{$randomPost->title}}">
                                    </div>
                                    <p class="blog-post-category">{{$randomPost->title}}</p>
                                    <a href="{{route('post.index', $post->id)}}" class="blog-post-permalink">
                                        <h6 class="blog-post-title">{{$randomPost->category->title}}</h6>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </section>
                </div>
                <div class="col-md-4 sidebar" data-aos="fade-left">
                    <div class="widget widget-post-list">
                        <h5 class="widget-title">Популярные статьи</h5>
                        @foreach($likedPosts as $likedPost)
                            <ul class="post-list">
                                <li class="post">
                                    <a href="#!" class="post-permalink media">
                                        <img src="{{Storage::url($likedPost->image)}}" alt="{{($likedPost->title)}}">
                                        <div class="media-body">
                                            <h6 class="post-title">{{($likedPost->title)}}</h6>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                    </div>
                    <div class="widget">
                        <h5 class="widget-title">Категории</h5>
                        @foreach($categories as $category)
                            <img src="{{Storage::url($category->image)}}" alt="{{$category->title}}" class="w-25">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
