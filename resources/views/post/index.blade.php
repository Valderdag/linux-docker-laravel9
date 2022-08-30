@extends('layouts.main')
@section('content')
    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">{{$post->title}}</h1>
            <p class="edica-blog-post-meta" data-aos="fade-up"
               data-aos-delay="200">{{$date->day}} {{$date->translatedFormat('F')}} {{$date->year}}
                • {{$date->format('H:i')}} • Комментариев
                {{$post->comments->count()}}</p>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{Storage::url($post->image)}}" alt="featured image" class="w-100">
            </section>
            <section class="post-content">
                <div class="row">
                    {!! $post->content !!}
                </div>
                <div class="py-3">
                    @auth()
                        <form action="{{route('post.like.store', $post->id)}}" method="post">
                            @csrf
                            <span>{{$post->liked_users_count}}</span>
                            <button type="submit" name="like" class="border-0 bg-transparent">
                                @auth()
                                    @if(auth()->user()->likedPosts->contains($post->id))
                                        <i class="fas fa-heart"></i>
                                    @else
                                        <i class="far fa-heart"></i>
                                    @endif
                                @endauth
                            </button>
                        </form>
                    @endauth
                    @guest()
                        <div>
                            <span>{{$post->liked_users_count}}</span>
                            <i class="far fa-heart"></i>
                        </div>
                    @endguest
                </div>
            </section>
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <section class="related-posts">
                        <h2 class="section-title mb-4" data-aos="fade-up">Похожие статьи</h2>
                        <div class="row">
                            @foreach($relatedPosts as $relatedPost)
                                <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                                    <img src="{{Storage::url($relatedPost->image)}}" alt="related post"
                                         class="post-thumbnail w-50">
                                    <p class="post-category">{{$relatedPost->category->title}}</p>
                                    <a href="{{route('post.index', $relatedPost->id)}}">
                                        <h6 class="post-title">{{$relatedPost->title}}</h6>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </section>
                    <section class="comment-list mb-5">
                        <h2 class="section-title mb-3" data-aos="fade-up">Отзывы({{$post->comments->count()}})</h2>
                        @foreach($post->comments as $comment)
                            <div class="comment-text mb-3">
                                <span class="username">
                                     <div style="font-weight: 900">{{$comment->user->name}}</div>
                                    <span class="text-muted float-right">{{$comment->dateAsCarbon->diffForHumans()}}</span>
                                </span>
                                <div>{{$comment->message}}</div>
                            </div>
                        @endforeach
                    </section>
                    @auth()
                    <section class="comment-section">
                        <h2 class="section-title mb-5" data-aos="fade-up">Оставьте свой отзыв</h2>
                        <form action="{{route('post.comment.store', $post->id)}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="form-group col-12" data-aos="fade-up">
                                    <label for="comment" class="sr-only">Отзыв</label>
                                    <textarea name="message" id="comment" class="form-control" rows="10"></textarea>
                                </div>
                            </div>
                            {{--<div class="row">
                                <div class="form-group col-md-4" data-aos="fade-right">
                                    <label for="name" class="sr-only">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Имя*">
                                </div>
                                <div class="form-group col-md-4" data-aos="fade-up">
                                    <label for="email" class="sr-only">Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                           placeholder="Email*" required>
                                </div>
                            </div>--}}
                            <input type="hidden" name="{{'post_id'}}" value="{{$post->id}}">
                            <div class="row">
                                <div class="col-12" data-aos="fade-up">
                                    <input type="submit" value="Отправить отзыв" class="btn btn-warning">
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
