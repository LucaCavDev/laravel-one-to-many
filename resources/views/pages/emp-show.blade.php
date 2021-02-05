@extends('layouts.main-layout')

@section('content')
    <h1>
        {{ $emp -> name }} 
        {{ $emp -> lastname }}:
        {{ $emp -> dateOfBirth }}
    </h1>

    <ul>
        @foreach ($emp -> tasks as $task)
            <li>
                [{{ $task -> priority }}]:
                {{ $task -> title }} <br>
                {{ $task -> desc }}

            </li>
            
        @endforeach
    </ul>
@endsection