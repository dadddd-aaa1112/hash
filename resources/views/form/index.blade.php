<div class="d-flex flex-column">

    @include('components.input', [
            'title' => 'Исходная строка',
            'fieldName' => 'orig_row' . $i,
            'placeholder' => 'Введите строку для хеширования',
    ])

    @include('components.input', [
          'title' => 'Частота обновления (мс)',
          'fieldName' => 'update_freq' . $i,
            'type' => 'number',
          'placeholder' => 'Введите частоту обновления',
  ])

    @include('components.input', [
        'title' => 'Количество повторений',
        'fieldName' => 'count_repet' . $i,
          'type' => 'number',
        'placeholder' => 'Введите количество повторений',
 ])

    @include('components.input', [
          'title' => 'Соль',
          'fieldName' => 'salt' . $i,
          'placeholder' => 'Введите соль',
  ])

    @include('components.select', [
        'title' => 'Алгоритм хеширования',
        'fieldName' => 'algorithm_id' . $i,
        'entities' => $algorithms,

 ])
</div>
