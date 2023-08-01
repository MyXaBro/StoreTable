@extends('moderator.layouts.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление отдела</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('moderator.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active"><a href="{{route('moderator.department.index')}}">Отделы</a></li>
                            <li class="breadcrumb-item active">Добавление отдела</li>
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
                    <div class="col-12">
                        <form action="{{route('moderator.department.store')}}" method="POST">
                            @csrf
                            <div class="form-group w-25">
                                <label for="title">Название</label>
                                @error('title')
                                <div class="text-danger mt-1">{{$message}}</div>
                                @enderror
                                <input type="text" name="title" class="form-control" id="title"
                                       placeholder="Введите название отдела" value="{{old('title')}}">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Добавить">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
