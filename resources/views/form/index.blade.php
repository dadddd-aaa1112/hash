<h2>Хешировать строку</h2>
<form method="POST" action="{{ route('task.store')}}">
   @csrf

   @include('components.input', [
           'title' => 'Исходная строка',
           'fieldName' => 'orig_row',
           'placeholder' => 'Введите строку для хеширования',
   ])

   @include('components.input', [
         'title' => 'Частота обновления (мс)',
         'fieldName' => 'update_freq',
           'type' => 'number',
         'placeholder' => 'Введите частоту обновления',
 ])

   @include('components.input', [
       'title' => 'Количество повторений',
       'fieldName' => 'count_repet',
         'type' => 'number',
       'placeholder' => 'Введите количество повторений',
])

   @include('components.input', [
         'title' => 'Соль',
         'fieldName' => 'salt',
         'placeholder' => 'Введите соль',
 ])

   @include('components.select', [
       'title' => 'Алгоритм хеширования',
       'fieldName' => 'algorithm_id',
       'entities' => $algorithms,

])

   <x-button>Запуск</x-button>
</form>
