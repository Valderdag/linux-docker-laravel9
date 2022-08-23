@extends('admin.layouts.admin')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление статьи</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Добавление статьи</li>
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
                    <div class="col-12">
                        <div class="col-6">
                            <form action="{{route('admin.post.store')}}" method="post" class="mb-5">
                                @csrf
                                <div class="form-group">
                                    <label>Категория</label>
                                    <select class="custom-select rounded-0" name="category_id">
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input type="text" class="form-control" required name="title" placeholder="Название ...">
                                </div>
                                <div class="form-group">
                                    <label>Картинка</label>
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" >
                                        <label class="custom-file-label" for="customFile" value="Обзор">Выбрать картинку</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Текст статьи</label>
                                    <textarea class="form-control" required rows="15" name="content" placeholder="Текст ..."></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Краткое содержание</label>
                                    <textarea class="form-control" required rows="4" name="description" placeholder="Описание ..."></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Добавить</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection
