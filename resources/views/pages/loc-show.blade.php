@extends('layouts.main-layout')

@section('content')

    <h1>
        LOCATION:
    </h1>
    <h1>
        Name: {{ $loc -> name }} <br>
        Coordinates: {{ $loc -> coords }}
    </h1>

    <h2>EMPLOYEES WORKING AT {{ $loc -> name }} LOCATION: </h2>

    <ul>

        @foreach ($loc -> employees as $emp)

            <li>
                <a href="{{ route('emp-show', $emp -> id) }}">
                    {{ $emp -> name}}
                    {{ $emp -> lastname}}
                </a>

                <ul>

                    <h5>
                        TASKS ASSIGNED TO THIS EMPLOYEE:
                    </h5>

                    @foreach ($emp -> tasks as $task)

                        <li>
                            <a href="{{ route('task-show', $task -> id) }}">
                                Title: {{ $task -> title}}
                            </a>

                        </li>

                    
                    @endforeach

                </ul>
                
            </li>

        @endforeach

    </ul>


@endsection
