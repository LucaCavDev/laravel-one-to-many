@extends('layouts.main-layout')

@section('content')

    <h1>TYPOLOGIES:</h1>

    <a href="{{ route('typ-create')}}">
        CREATE NEW TYPOLOGY
    </a>



    <ul>

        @foreach ($typs as $typ)

            <li>
                <a href="{{ route('typ-show', $typ -> id) }}">
                    {{ $typ -> name }}
                </a>
                <a href="{{ route('typ-edit', $typ -> id) }}">EDIT</a>
            </li>
        
        @endforeach

        
    </ul>

    
@endsection