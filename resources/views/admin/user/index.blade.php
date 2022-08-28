@extends('admin.layouts.admin')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Пользователи</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Пользователи</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-3">
                        <a href="{{route('admin.user.create')}}" class="btn btn-link">Добавить пользователя</a>
                    </div>
                    <div class="pt-3 col-12">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th >ID</th>
                                <th class="w-25">Аватар</th>
                                <th>Имя пользователя</th>
                                <th>Email</th>
                                <th colspan="3" class="text-center">Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td><img class="w-25" src="{{Storage::url($user->avatar)}}" alt="{{$user->name}}"></td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td class="text-center">
                                        <a href="{{route('admin.user.show', $user->id)}}"> <i
                                                class="fas fa-eye"></i></a>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{route('admin.user.edit', $user->id)}}"><i
                                                class="fas fa-pen"></i></a>
                                    </td>
                                    <td class="text-center">
                                        <form action="{{route('admin.user.delete', $user->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="border-0 bg-transparent">
                                            <i class="fas fa-trash text-danger" ></i>
                                            </button>
                                        </form>
                                    </td>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
