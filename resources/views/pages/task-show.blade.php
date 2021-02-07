@extends('layouts.main-layout')

@section('content')
    <h1>
        Title: {{ $task -> title }} <br>
        Employee in charge: {{ $task -> employee -> name }} {{ $task -> employee -> lastname }}<br>
        Description: {{ $task -> desc }} <br>
        Priority: {{ $task -> priority }}
    </h1>

    <h2>Per ogni task c'è 1 employee</h2>

    <h2>TYPOLOGIES</h2>

    <ul>
        @foreach ($task -> typologies as $typology)
            <li>

                
                Name of the typology: {{ $typology -> name }}<br>
                Description: {{ $typology -> desc }}

            </li>
            
        @endforeach
    </ul>


@endsection