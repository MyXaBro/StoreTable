@extends('reader.layouts.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 mr-2">{{$user->name}}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('reader.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active"><a href="{{route('reader.user.index')}}">Пользователи</a></li>
                            <li class="breadcrumb-item active">{{ $user->name }}</li>
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
                <div class="col-8">
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td>{{$user->id}}</td>
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
                                    <td>Должность</td>
                                    @if ($user->position)
                                        <td>{{ $user->position->title }}</td>
                                    @else
                                        <td>Нет должности</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td>Отделы</td>
                                    @if ($user->departments->count() > 0)
                                        <td>
                                            @foreach ($user->departments as $department)
                                                {{ $department->title }}<br>
                                            @endforeach
                                        </td>
                                    @else
                                        <td>Нет отдела</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td>Роль</td>
                                    <td>{{$user->getRoleName()}}</td>
                                </tr>
                                <tr>
                                    <td>Дата создания</td>
                                    <td>{{ $user->created_at->format('d.m.y') }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection
