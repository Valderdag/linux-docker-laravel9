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
                            <form action="{{route('admin.post.store')}}" method="post" class="mb-5" enctype="multipart/form-data">
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
                                    <input type="text" class="form-control" required name="title"
                                           value="{{old('title')}}" placeholder="Название ...">
                                    @error('title')
                                    <div class="text-danger">Заголовок статьи необходимо заполнить</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Загрузить превью</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="preview" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Файл...</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Заргузить</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Загрузить картинку</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Файл...</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Заргузить</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Текст статьи</label>
                                    <textarea id="summernote" required name="content"
                                              value="{{old('content')}}"></textarea>
                                    @error('content')
                                    <div class="text-danger">Необходимо написать текст статьи</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Краткое содержание</label>
                                    <textarea class="form-control" required rows="4" name="description"
                                              value="{{old('description')}}" placeholder="Описание ..."></textarea>
                                    @error('description')
                                    <div class="text-danger">Необходимо заполнить поисковое описание</div>
                                    @enderror
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
