@extends('admin.layouts.admin')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Статьи</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Статьи</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-3">
                        <a href="{{route('admin.post.create')}}" class="btn btn-link">Добавить статью</a>
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
                            @foreach($posts as $row)
                                <tr>
                                    <th>{{$row->id}}</th>
                                    <th><img class="w-50" src="{{Storage::url($row->image)}}" alt=""</th>
                                    <td>{{$row->title}}</td>
                                    <td>{{$row->category_id}}</td>
                                    <td>{{$row->description}}</td>
                                    <td class="text-center">
                                        <a href="{{route('admin.post.show', $row->id)}}"> <i
                                                class="fas fa-eye"></i></a>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{route('admin.post.edit', $row->id)}}"><i
                                                class="fas fa-pen"></i></a>
                                    </td>
                                    <td class="text-center">
                                        <form action="{{route('admin.post.delete', $row->id)}}" method="post">
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
