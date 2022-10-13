@extends('layout.app')
@section('content')
    @if(count($tasks) > 0)
        @include('task.index')
    @endif

    <div class="d-flex flex-row justify-content-evenly">
        <div class="d-flex flex-column">
            <h2>Хешировать строку</h2>
            <form method="POST" action="{{ route('task.store')}}">
                @csrf
                @include('form.index', ['i' => 0])
                <x-button>Запуск</x-button>
            </form>
        </div>

        <div class="d-flex flex-column">
            <h2>Хешировать группу строк</h2>
            <form method="POST" action="{{ route('task.store')}}">

                @for ($i = 1; $i <= 3; $i++)
                    <h3>{{$i}} строка</h3>
                    <div class="mb-2">
                        @include('form.index', ['i' => $i])
                    </div>
                @endfor

                <x-button class="btn-outline-primary">Запуск</x-button>
            </form>
        </div>
    </div>
@endsection

