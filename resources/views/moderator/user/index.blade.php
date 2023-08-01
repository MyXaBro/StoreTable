@extends('moderator.layouts.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Пользователи</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('moderator.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Пользователи</li>
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
                    <div class="col-2 mb-3">
                        <a href="{{ route('moderator.user.create') }}" class="btn btn-block btn-primary">Добавить</a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Имя</th>
                                    <th>Роль</th>
                                    <th>Должность</th>
                                    <th>Отделы</th>
                                    <th>Дата создания</th>
                                    <th colspan="2" class="text-center">Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{ $user->getRoleName() }}</td>
                                        @if ($user->position)
                                            <td>{{ $user->position->title }}</td>
                                        @else
                                            <td>Нет должности</td>
                                        @endif
                                        @if ($user->departments->count() > 0)
                                            <td>
                                                @foreach ($user->departments as $department)
                                                    {{ $department->title }}<br>
                                                @endforeach
                                            </td>
                                        @else
                                            <td>Нет отдела</td>
                                        @endif
                                        <td>{{ $user->created_at->format('d.m.y') }}</td>
                                        <td><a href="{{route('moderator.user.show', $user->id)}}"><i
                                                    class="fa-regular fa-eye"></i></a></td>
                                        <td><a href="{{route('moderator.user.edit', $user->id)}}"
                                               class="text-success"><i class="fa-solid fa-pen"></i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection
