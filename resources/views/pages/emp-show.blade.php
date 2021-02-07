@extends('layouts.main-layout')

@section('content')
    <h1>
        {{ $emp -> name }} 
        {{ $emp -> lastname }}, born 
        {{ $emp -> dateOfBirth }}
    </h1>


    <h2>TASKS</h2>

    <ul>
        @foreach ($emp -> tasks as $task)
            <li>
                Priority: {{ $task -> priority }} <br>
                <a href="{{ route('task-show', $task -> id) }}">
                    
                    Title: {{ $task -> title }} <br>
                    
                </a>
                Description: {{ $task -> desc }}

            </li>
            
        @endforeach
    </ul>

    <h2>LOCATIONS</h2>

    <ul>
        @foreach ($emp -> locations as $location)
            <li>

                <a href="{{ route('task-show', $task -> id) }}">
                
                    Name of the location: {{ $location -> name }}
                </a> <br>
                Coordinates: {{ $location -> coords }}

            </li>
            
        @endforeach
    </ul>

@endsection