@extends('admin.layouts.admin')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление пользователя</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Добавление пользователя</li>
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
                            <form action="{{route('admin.user.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Имя пользователя</label>
                                    <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Имя...">
                                    @error('name')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Аватар</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="avatar" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" value="{{old('avatar')}}"  for="exampleInputFile">Аватар...</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Email...">
                                    @error('email')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Пароль</label>
                                    <input type="password" class="form-control" name="password" value="{{old('password')}}" placeholder="Пароль...">
                                    @error('password')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group" >
                                    <label>Роль</label>
                                    <select  name="role" class="form-control">
                                        @foreach($roles as $id => $role)
                                            <option value="{{$id}}"
                                                {{$id == old('role') ? 'selected' : ''}}>
                                                {{$role}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mb-5">
                                <button type="submit" class="btn-outline-success">Добавить пользователя</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
