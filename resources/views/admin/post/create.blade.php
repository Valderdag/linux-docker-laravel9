@extends('admin.layouts.admin')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление статьи</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Добавление статьи</li>
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
                            <form action="{{route('admin.post.store')}}" method="post" class="mb-5" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group" >
                                    <label>Категория</label>
                                    <select  name="category_id" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}"
                                                {{$category->id == old('category_id') ? 'selected' : ''}}>
                                                {{$category->title}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input type="text" class="form-control" name="title"
                                           value="{{old('title')}}" placeholder="Название ...">
                                    @error('title')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Добавить изображение</label>
                                    <div class="input-group">
                                        <div class="custom-file ">
                                            <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Изображение...</label>
                                        </div>
                                    </div>
                                    @error('image')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Текст статьи</label>
                                    <textarea id="summernote" name="content"
                                              value="{{old('content')}}"></textarea>
                                    @error('content')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Описание</label>
                                    <textarea class="form-control" rows="4" name="description"
                                              value="{{old('description')}}" placeholder="Описание ..."></textarea>
                                    @error('description')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                <label>Теги</label>
                                <select name="tag_ids[]" class="select2"
                                        multiple="" data-placeholder="Выберите теги"  style="width: 100%;" tabindex="-1" aria-hidden="true">
                                    @foreach($tags as $tag)
                                    <option {{is_array(old('tag_ids')) && in_array($tag->id, old('tag_ids')) ? 'selected' : ''}} value="{{$tag->id}}">{{$tag->title}}</option>
                                    @endforeach
                                </select>
                                    @error('tag_ids')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-success">Добавить статью</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
