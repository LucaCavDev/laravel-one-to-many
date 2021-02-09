@extends('layouts.main-layout')

@section('content')

    <h1>
        TYPOLOGY:
    </h1>
    <h1>
        Name: {{ $typ -> name }} <br>
        Description: {{ $typ -> desc }}
    </h1>

    <h2>THIS TYPOLOGY NAME:  {{ $typ -> name }} <br> BELONGS TO THESE TASKS </h2>

    <ul>

        @foreach ($typ -> tasks as $task)

            <li>
                <a href="{{ route('task-show', $task -> id) }}">
                    Title of the task: {{ $task -> title}}
                </a> <br>

                Name of the employee in charge of this task
                {{$task -> employee -> name}}
                {{$task -> employee -> lastname}}
                


                
            </li>

        @endforeach

    </ul>


@endsection
