@extends('admin.layouts.admin')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Пользователь</h1>
                        <div>
                            <a href="{{route('admin.user.edit', $user->id)}}"><i
                                        class="fas fa-pen"></i></a>
                            <a href=""><i class="fas fa-trash"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Пользователи</li>
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
                                <td scope="row">{{$user->id}}</td>
                            </tr>
                            <tr>
                                <td>Имя</td>
                                <td>{{$user->name}}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{$user->email}}</td>
                            </tr>
                            <tr>
                                <td>Аватар</td>
                                <td><img src="{{Storage::url($user->avatar)}}" alt="{{$user->name}}"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
