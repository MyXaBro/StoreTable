@extends('admin.layouts.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление поста</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active"><a href="{{route('admin.post.index')}}">Посты</a></li>
                            <li class="breadcrumb-item active">Добавление поста</li>
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
                        <form action="{{route('admin.post.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group w-25">
                                <label for="title">Название</label>
                                @error('title')
                                <div class="text-danger mt-1">{{$message}}</div>
                                @enderror
                                <input type="text" name="title" class="form-control" id="title"
                                       placeholder="Введите название поста" value="{{old('title')}}">
                            </div>
                            <div class="form-group">
                                <label for="summernote">Творите</label>
                                @error('content')
                                <div class="text-danger mt-1">{{$message}}</div>
                                @enderror
                                <textarea id="summernote" name="content">{{old('content')}}</textarea>
                            </div>
                            <div class="form-group w-50">
                                <label for="exampleInputFile">Добавить превью</label>
                                @error('preview_image')
                                <div class="text-danger mt-1">{{$message}}</div>
                                @enderror
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="preview_image">
                                        <label class="custom-file-label">Выбрать фото</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузить</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group w-50">
                                <label for="exampleInputFile">Добавить главное фото</label>
                                @error('main_image')
                                <div class="text-danger mt-1">{{$message}}</div>
                                @enderror
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="main_image">
                                        <label class="custom-file-label">Выбрать фото</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузить</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group w-50">
                                @error('category_id')
                                <div class="text-danger mt-1">{{$message}}</div>
                                @enderror
                                <label>Выберите категорию
                                    <select name="category_id" class="form-control">
                                        <option disabled selected value> --Выберите--</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}"
                                                {{$category->id == old('category_id') ? ' selected': ''}}
                                            >{{$category->title}}</option>
                                        @endforeach
                                    </select>
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Добавить хештеги</label>
                                <select class="select2" name="tag_ids[]" multiple="multiple" data-placeholder="Выбрать хештеги"
                                        style="width: 100%;">
                                    @foreach($tags as $tag)
                                        <option {{ is_array( old('tag_ids')) && in_array($tag->id, old('tag_ids')) ? ' selected' : ''}} value="{{$tag->id}}">{{$tag->title}}</option>
                                    @endforeach
                                </select>
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
