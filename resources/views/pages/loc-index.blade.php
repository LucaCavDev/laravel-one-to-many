@extends('layouts.main-layout')

@section('content')

    <h1>LOCATIONS:</h1>

    @foreach ($locs as $loc)

        <a href="{{ route('loc-show', $loc -> id) }}">

            <li>
                {{ $loc -> name }}
            </li>

        </a>
        
    @endforeach
    
@endsection