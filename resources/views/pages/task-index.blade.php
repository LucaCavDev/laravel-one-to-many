@extends('layouts.main-layout')

@section('content')

    <h1>TASKS:</h1>

    @foreach ($tasks as $task)

        <a href="{{ route('task-show', $task -> id) }}">

            <li>
                {{ $task -> title }}
            </li>

        </a>
        
    @endforeach
    
@endsection

