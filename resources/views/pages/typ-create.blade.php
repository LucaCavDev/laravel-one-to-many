@extends('layouts.main-layout')

@section('content')

    <h1>NEW TYPOLOGY:</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('typ-store') }}" method="POST">
        @csrf
        @method('POST')

        <label for="name">name</label>
        <input name="name" type="text">
        <br>

        <label for="desc">Description</label>
        <input name="desc" type="text">
        <br>

        <label for="typs[]">TASKS:</label><br>
        @foreach ($tasks as $task)
            <input name="tasks[]" type="checkbox" value="{{ $task -> id }} "> {{ $task -> title }} <br>

        @endforeach

        <br>


        <input type="submit">

    </form>

    
@endsection