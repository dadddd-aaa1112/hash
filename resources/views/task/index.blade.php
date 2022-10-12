<h1 class="d-flex flex-row justify-content-center">Статусы задач</h1>
@php
    {{ $i = 0; }}
@endphp

<table class="table mb-5">
    <thead>
    <tr>
        <th>№</th>
        <th>Исходная строка</th>
        <th>Hash строки</th>
        <th>Частота обновления (мс)</th>
        <th>Количество повторений</th>
        <th>Соль</th>
        <th>Алгоритм хеширования</th>
        <th>Статус</th>
    </tr>
    </thead>
    <tbody>

    @foreach($tasks as $task)
        <tr>
            <td>{{++$i}}</td>
            <td>{{$task->orig_row}}</td>
            <td>
                @if(isset($task->convert_row))
                    {{$task->convert_row}}
                @endif
            </td>
            <td>{{$task->update_freq}}</td>
            <td>{{$task->count_repet}}</td>
            <td>{{$task->salt}}</td>
            <td>
                @if(isset($task->algorithms->title))
                    {{$task->algorithms->title}}
                @endif
            </td>
            <td>
                @if(isset($task->statuses->title))
                    {{$task->statuses->title}}
                @endif
            </td>
        </tr>
    @endforeach

    </tbody>
</table>

