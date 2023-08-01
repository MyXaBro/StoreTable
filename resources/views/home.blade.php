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
                        @if(auth()->user()->role === \App\Models\User::ROLE_ADMIN)
                            <a href="{{ route('admin.main.index') }}">Личный кабинет</a>
                        @endif
                        @if(auth()->user()->role === \App\Models\User::ROLE_MODERATOR)
                            <a href="{{ route('moderator.main.index') }}">Личный кабинет</a>
                        @endif
                        @if(auth()->user()->role === \App\Models\User::ROLE_READER)
                            <a href="{{ route('reader.main.index') }}">Личный кабинет</a>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
