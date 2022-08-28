@extends('admin.layouts.admin')
@section('content')
    <div class="content-wrapper">
       <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Категории</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Категории</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-3">
                        <a href="{{route('admin.category.create')}}" class="btn btn-link">Добавить категорию</a>
                    </div>
                    <div class="pt-3 col-12">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th >ID</th>
                                <th>Название </th>
                                <th>Описание </th>
                                <th colspan="3" class="text-center">Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td >{{$category->id}}</td>
                                    <td>{{$category->title}}</td>
                                    <td>{!! html_entity_decode($category->description)!!}</td>
                                    <td class="text-center">
                                        <a href="{{route('admin.category.show', $category->id)}}"> <i
                                                class="fas fa-eye"></i></a>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{route('admin.category.edit', $category->id)}}"><i
                                                class="fas fa-pen"></i></a>
                                    </td>
                                    <td class="text-center">
                                        <form action="{{route('admin.category.delete', $category->id)}}" method="post">
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
                <div>
        </section>
    </div>
@endsection
