<h1 class="d-flex flex-row justify-content-center">Статусы задач</h1>
@php
    {{ $i = 0; }}
@endphp

<table class="table table-striped mb-5 w-100">
    <thead>
    <tr>
        <th>№</th>
        <th>Исходная строка</th>
        <th>Частота обновления (мс)</th>
        <th>Количество повторений</th>
        <th>Соль</th>
        <th>Алгоритм хеширования</th>
        <th>Статус</th>
        <th class="bg-info">Hash строки</th>
    </tr>
    </thead>
    <tbody>

    @foreach($tasks as $task)
        <tr>
            <td>{{++$i}}</td>
            <td>{{$task->orig_row}}</td>
            <td>{{$task->update_freq}}</td>
            <td>{{$task->count_repet}}</td>
            <td>{{$task->salt}}</td>
            <td>
                @if(isset($task->algorithms->title))
                    {{$task->algorithms->title}}
                @endif
            </td>
            @if(isset($task->statuses->title))
                <td class="text-bg-success">
            @else
                <td>
                    @endif
                    {{$task->statuses->title}}

                </td>

                <td>
                    @if(isset($task->convert_row))
                        {{$task->convert_row}}
                    @endif
                </td>
        </tr>
    @endforeach

    </tbody>
</table>

