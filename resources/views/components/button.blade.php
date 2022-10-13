@props(['class' => 'btn-outline-info'])
<button
    type="submit"
    {{ $attributes->merge(['class' => 'my-2 btn  '. $class])}}>
    {{ $slot }}
</button>
