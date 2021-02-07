@extends('layouts.main-layout')

@section('content')

    <h1>TYPOLOGIES:</h1>

    @foreach ($typs as $typ)

        <a href="{{ route('typ-show', $typ -> id) }}">

            <li>
                {{ $typ -> name }}
            </li>

        </a>
        
    @endforeach
    
@endsection