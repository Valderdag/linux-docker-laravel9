@extends('personal.layouts.personal')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование комментария</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('personal.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{route('personal.comment.index')}}">Комментарии</a></li>
                            <li class="breadcrumb-item active">Редактирование комментария</li>
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
                            <form action="{{route('personal.comment.update', $comment->id)}}" method="post" >
                                @csrf
                                @method('patch')
                                <div class="form-group">
                                    <label>Текст комментария</label>
                                    <textarea class="form-control" id="summernote" rows="15" name="message" >{{$comment->message}}</textarea>
                                    @error('message')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
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
