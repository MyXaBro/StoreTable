@extends('moderator.layouts.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Отделы</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('moderator.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Отделы</li>
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
                        <a href="{{ route('moderator.department.create') }}" class="btn btn-block btn-primary">Добавить</a>
                    </div>
                </div>
                <div class="col-10">
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Название</th>
                                    <th>Пользователи</th>
                                    <th>Дата создания</th>
                                    <th colspan="2" class="text-center">Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($departments as $department)
                                    <tr>
                                        <td>{{$department->id}}</td>
                                        <td>{{$department->title}}</td>
                                        <td>
                                            @foreach ($department->users as $user)
                                                {{ $user->name }}
                                                @if (!$loop->last)
                                                    ,
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>{{ $department->created_at->format('d.m.y') }}</td>
                                        <td><a href="{{route('moderator.department.show', $department->id)}}"><i
                                                    class="fa-regular fa-eye"></i></a></td>
                                        <td><a href="{{route('moderator.department.edit', $department->id)}}"
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
