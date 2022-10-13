@extends('layout.app')
@section('content')

    @if(count($tasks) > 0)
        @include('task.index')
    @endif

    <div class="d-flex flex-row justify-content-evenly">
        <div class="d-flex flex-column w-50">
            <h1>Хешировать группу строк</h1>
            <form method="POST" action="{{ route('task.group.store')}}">
                @csrf
                @for ($i = 1; $i <= 3; $i++)
                    <h3>{{$i}} строка</h3>
                    <div class="mb-2">
                        @include('form.index', ['i' => $i])
                    </div>
                @endfor
                <x-button class="btn-outline-primary">Запуск</x-button>
            </form>
        </div>
        <a href="{{route('index')}}">
            Создать задание для 1 строки
        </a>

    </div>
@endsection
