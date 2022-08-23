@extends('admin.layouts.admin')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Статья</h1>
                        <div>
                            <a href="{{route('admin.post.edit', $post->id)}}"><i
                                        class="fas fa-pen"></i></a>
                            <a href=""><i class="fas fa-trash"></i></a>
                        </div>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">{{$post->title}}</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="pt-3 col-12">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td scope="row">ID</td>
                                <td scope="row">{{$post->id}}</td>
                            </tr>
                            <tr>
                                <td>Название</td>
                                <td>{{$post->title}}</td>
                            </tr>
                            <tr>
                                <td>Текст</td>
                                <td>{{$post->content}}</td>
                            </tr>
                            <tr>
                                <td>Краткое содержание</td>
                                <td>{{$post->description}}</td>
                            </tr>
                            <tr>
                                <td>Изображение</td>
                                <td>{{'а тут будет картинка'}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection
