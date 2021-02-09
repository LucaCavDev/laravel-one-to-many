@extends('layouts.main-layout')
@section('content')
    <h1>
        [{{ $typ -> id }}] 
        EDIT TYPOLOGY
    </h1>


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('typ-update', $typ -> id) }}" method="POST">
        @csrf
        @method('POST')

        <label for="name">Name</label>
        <input name="name" type="text" value="{{ $typ -> name }}">
        <br>

        <label for="desc">Description</label>
        <input name="desc" type="text" value="{{ $typ -> desc }}">
        <br>



        <label for="tasks[]">Tasks</label> <br>
        @foreach ($tasks as $task)
            <input 
                name="tasks[]" 
                type="checkbox" 
                value="{{ $task -> id }}"
                {{-- VERSIONE PRO --}}
                @if ($typ -> tasks -> contains($task -> id))
                    checked                    
                @endif
            > 
                {{ $task -> title }}
            <br>

        @endforeach
        <br><br>

        <input type="submit" value="salva"> 
    </form>
@endsection