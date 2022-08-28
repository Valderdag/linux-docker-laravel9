@extends('admin.layouts.admin')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование тега {{$tag->title}}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.tag.index')}}">Теги</a></li>
                            <li class="breadcrumb-item active">Редактирование тега {{$tag->title}}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="col-6">
                            <form action="{{route('admin.tag.update', $tag->id)}}" method="post" >
                                @csrf
                                @method('patch')
                                <div class="form-group">
                                    <label>Имя тега</label>
                                    <input type="text" class="form-control" required name="title" value="{{$tag->title}}">
                                </div>
                                <button type="submit" class="btn btn-primary">Обновить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
