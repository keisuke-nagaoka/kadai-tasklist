@extends('layouts.app')

@section('content')
    @if (Auth::check())
        {{-- タスク一覧 --}}
        @include('tasks.index')
    @else
        <div class="prose hero bg-base-200 mx-auto max-w-full rounded">
            <div class="hero-content text-center my-10">
                <div class="max-w-md mb-10">
                    <h2>Tasklistへようこそ</h2>
                    {{-- ユーザ登録ページへのリンク --}}
                    <a class="btn btn-primary btn-lg normal-case" href="{{ route('register') }}">登録はこちらから</a>
                </div>
            </div>
        </div>
    @endif
@endsection