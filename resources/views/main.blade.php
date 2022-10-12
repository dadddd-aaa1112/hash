@extends('layout.app')
@section('content')
    @if(count($tasks) > 0)
        @include('task.index')
    @endif
    @include('form.index')
@endsection

