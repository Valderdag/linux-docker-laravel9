@extends('admin.layouts.admin')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Категории</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Категории</li>
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
                    <div class="col-2">
                        <a href="{{route('admin.category.create')}}" class="btn btn-block btn-primary">Добавить</a>
                    </div>
                    <div class="pt-3 col-12">
                        <table class="table table-striped">
                            <thead >
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Название категории</th>
                                <th scope="col">Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $row)
                            <tr>
                                <th scope="row">{{$row->id}}</th>
                                <td>{{$row->title}}</td>
                                <td><span style="padding-right: 30px"><a href="{{route('admin.category.show', $row->id)}}"> <i class="fas fa-eye" ></i></a></span>
                                <span><a href="{{route('admin.category.edit', $row->id)}}"><i class="fas fa-pen"></i></a></span>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection
