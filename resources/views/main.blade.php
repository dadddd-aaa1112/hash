@extends('layout.app')
@section('content')
    @if(count($tasks) > 0)
        @include('task.index')
    @endif

    <div class="d-flex flex-row justify-content-evenly">
        <div class="d-flex flex-column">
            <h1>Хешировать строку</h1>
            <form method="POST" action="{{ route('task.store')}}">
                @csrf
                @include('form.index', ['i' => 0])
                <x-button>Запуск</x-button>
            </form>
        </div>

        <a href="{{route('group.redirect')}}">
            Создать группу заданий
        </a>

    </div>
@endsection

