@extends('moderator.layouts.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Главная</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Главная</li>
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
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-light">
                            <div class="inner">
                                <h3>{{ $data['usersCount'] }}</h3>

                                <p>Пользователи</p>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <a href="{{ route('moderator.user.index') }}" class="small-box-footer">Подробнее <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-light">
                            <div class="inner">
                                <h3>{{ $data['departmentsCount'] }}</h3>

                                <p>Отделы</p>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-building"></i>
                            </div>
                            <a href="{{ route('moderator.department.index') }}" class="small-box-footer">Подробнее <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-light">
                            <div class="inner">
                                <h3>{{ $data['positionsCount'] }}</h3>

                                <p>Должности</p>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-building-user"></i>
                            </div>
                            <a href="{{ route('moderator.position.index') }}" class="small-box-footer">Подробнее <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
