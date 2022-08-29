@extends('personal.layouts.personal')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Избранные статьи</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('personal.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Избранные статьи</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-3">
                    </div>
                    <div class="pt-3 col-12">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Изображение</th>
                                <th>Заголовок статьи</th>
                                <th>Категория</th>
                                <th>Краткое содержание</th>
                                <th colspan="3" class="text-center">Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <th>{{$post->id}}</th>
                                    <th><img class="w-50" src="{{Storage::url($post->image)}}" alt=""</th>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->category_id}}</td>
                                    <td>{{$post->description}}</td>
                                    {{--<td class="text-center">
                                        <a href="{{route('personal.post.show', $post->id)}}"> <i
                                                class="fas fa-eye"></i></a>
                                    </td>--}}
                                    <td class="text-center">
                                        <form action="{{route('personal.liked.delete', $post->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="border-0 bg-transparent">
                                                <i class="fas fa-trash text-danger" ></i>
                                            </button>
                                        </form>
                                    </td>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
        </section>
    </div>
@endsection
