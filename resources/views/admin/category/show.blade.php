@extends('admin.layouts.admin')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Категория {{$category->title}}</h1>
                        <div>
                            <a href="{{route('admin.category.edit', $category->id)}}"><i
                                    class="fas fa-pen"></i></a>
                            <form action="{{route('admin.category.delete', $category->id)}}" method="post">
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
                            <li class="breadcrumb-item"><a href="{{route('admin.category.index')}}">Категории</a></li>
                            <li class="breadcrumb-item active">Категория {{$category->title}}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="pt-3 col-12">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>Изображение</td>
                                <td><img src="{{Storage::url($category->image)}}" alt="{{$category->image}}"></td>
                            </tr>
                            <tr>
                                <td scope="row">ID</td>
                                <td scope="row">{{$category->id}}</td>
                            </tr>
                            <tr>
                                <td>Название</td>
                                <td>{{$category->title}}</td>
                            </tr>
                            <tr>
                                <td>Описание</td>
                                <td>{!! html_entity_decode($category->description) !!}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
