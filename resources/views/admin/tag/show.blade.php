@extends('admin.layouts.admin')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Тег</h1>
                        <div>
                            <a href="{{route('admin.tag.edit', $tag->id)}}"><i
                                        class="fas fa-pen"></i></a>
                            <a href=""><i class="fas fa-trash"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">{{$tag->title}}</li>
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
                                <td scope="row">ID</td>
                                <td scope="row">{{$tag->id}}</td>
                            </tr>
                            <tr>
                                <td>Название</td>
                                <td>{{$tag->title}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection