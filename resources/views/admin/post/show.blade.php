@extends('admin.layouts.admin')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 >Статья</h1>
                        <div>
                            <a href="{{route('admin.post.edit', $post->id)}}"><i
                                        class="fas fa-pen"></i></a>
                            <form action="{{route('admin.post.delete', $post->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="border-0 bg-transparent">
                                    <i class="fas fa-trash text-danger" ></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.post.index')}}">Статьи</a></li>
                            <li class="breadcrumb-item active">Статья {{$post->title}}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="pt-3 col-12 mb-5">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>Изображение</td>
                                <td><img src="{{Storage::url($post->image)}}" class="w-50"/></td>
                            </tr>
                            <tr>
                                <td scope="row">ID</td>
                                <td scope="row">{{$post->id}}</td>
                            </tr>
                            <tr>
                                <td>Название</td>
                                <td>{{$post->title}}</td>
                            </tr>
                            <tr>
                                <td>Категория</td>
                                <td>{{$post->category_id}}</td>
                            </tr>
                            <tr>
                                <td>Текст</td>
                                <td>{!! html_entity_decode($post->content) !!}</td>
                            </tr>
                            <tr>
                                <td>Краткое содержание</td>
                                <td>{{$post->description}}</td>
                            </tr>
                            <tr>
                                <td>Теги</td>
                                <td>
                                @foreach ($tags as $tag)
                                <span class="btn btn-secondary mb-1">{{$tag}}</span>
                                @endforeach
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
