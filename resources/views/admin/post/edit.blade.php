@extends('admin.layouts.admin')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование статьи</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Редактирование статьи</li>
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
                            <form action="{{route('admin.post.update', $post->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="form-group">
                                    <label>Категория</label>
                                    <select class="custom-select rounded-0" name="category_id">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Заголовок статьи</label>
                                    <input type="text" class="form-control" required name="title" value="{{$post->title}}">
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
                                    <textarea class="form-control" id="summernote" required rows="15" name="content" value="{{$post->content}}"></textarea>
                                    @error('content')
                                    <div class="text-danger">Необходимо написать текст статьи</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Краткое содержание</label>
                                    <textarea class="form-control" required rows="4" name="description" value="{{$post->description}}"></textarea>
                                </div>
                                <div class="form-group mb-5">
                                <button type="submit" class="btn btn-primary">Обновить</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection
