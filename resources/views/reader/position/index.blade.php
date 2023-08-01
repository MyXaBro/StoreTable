@extends('reader.layouts.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Должности</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('reader.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Должности</li>
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
                <div class="col-10">
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Название</th>
                                    <th>Пользователь</th>
                                    <th>Дата создания</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($positions as $position)
                                    <tr>
                                        <td>{{$position->id}}</td>
                                        <td>{{$position->title}}</td>
                                        <td>
                                            @if ($position->users->isNotEmpty())
                                                {{ $position->users->first()->name }}
                                            @else
                                                Нет работника
                                            @endif
                                        </td>
                                        <td>{{ $position->created_at->format('d.m.y') }}</td>
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
