@extends('moderator.layouts.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 mr-2">{{$department->title}}</h1>
                        <a href="{{route('moderator.department.edit', $department->id)}}"><i class="fa-solid fa-pen text-success"></i></a>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('moderator.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active"><a href="{{route('moderator.department.index')}}">Отделы</a></li>
                            <li class="breadcrumb-item active">{{ $department->title }}</li>
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
                                    <td>{{$department->id}}</td>
                                </tr>
                                <tr>
                                    <td>Название</td>
                                    <td>{{$department->title}}</td>
                                </tr>
                                <tr>
                                    <td>Дата создания</td>
                                    <td>{{$department->created_at}}</td>
                                </tr>
                                <tr>
                                    <td>Дата обновления</td>
                                    <td>{{$department->updated_at}}</td>
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
