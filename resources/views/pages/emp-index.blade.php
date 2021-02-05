@extends('layouts.main-layout')

@section('content')

    <h1>EMPLOYEES:</h1>

    @foreach ($emps as $emp)

        <a href="{{ route('emp-show', $emp -> id) }}">

            <li>
                {{ $emp -> name }}
                {{ $emp -> lastname }}
            </li>

        </a>
        
    @endforeach
    
@endsection