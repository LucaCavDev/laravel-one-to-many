@extends('layouts.main-layout')

@section('content')
    <h1>
        Title: {{ $task -> title }} <br>
        Employee in charge: {{ $task -> employee -> name }} {{ $task -> employee -> lastname }}<br>
        Description: {{ $task -> desc }} <br>
        Priority: {{ $task -> priority }}
    </h1>

    <h2>Per ogni task c'è 1 employee</h2>

@endsection