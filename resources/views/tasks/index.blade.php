
@extends('layouts.app')

@section('content')

    <!-- New Task -->
    @include('tasks.create')

    <!-- Current Tasks -->
    @include('tasks.list')
@endsection
