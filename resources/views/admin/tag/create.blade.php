@extends('admin.layouts.admin')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление Тегов</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Добавление Тегов</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <div class="col-6">
                            <form action="{{route('admin.tag.store')}}" method="post" >
                                @csrf
                                <div class="form-group">
                                    <label>Название Тега</label>
                                    <input type="text" class="form-control" required name="title" placeholder="Название ...">
                                    @error('title')
                                    <div class="text-danger">Необходимо заполнить название тега</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn-outline-success">Добавить тег</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
