@extends('admin.layouts.admin')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление категорий</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Добавление категорий</li>
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
                            <form action="{{route('admin.category.store')}}" method="post" >
                                @csrf
                                <div class="form-group">
                                    <label>Название категории</label>
                                    <input type="text" class="form-control" required name="title" placeholder="Название ...">
                                </div>

                                <div class="form-group">
                                    <label>Описание категории</label>
                                    <textarea class="form-control" required rows="5" name="description" placeholder="Описание ..."></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Картинка категории</label>
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" >
                                        <label class="custom-file-label" for="customFile" value="Обзор">Выбрать картинку</label>
                                    </div>
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
