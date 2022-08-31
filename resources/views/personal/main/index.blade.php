@extends('personal.layouts.personal')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Активность</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Главная</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{count($comments)}}</h3>
                                <p>Комментариев</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-comment"></i>
                            </div>
                            <a href="{{route('personal.comment.index')}}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{count($posts)}}</h3>
                                <p>Избанных статей</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-heart"></i>
                            </div>
                            <a href="{{route('personal.liked.index')}}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
        </section>
    </div>
@endsection
