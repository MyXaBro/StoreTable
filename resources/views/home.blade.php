@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Сообщение</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Вы успешно вошли!

                    <a href="{{ route('index') }}">На главную</a><br/>
                    <a href="{{ route('admin.main.index') }}">Личный кабинет</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
