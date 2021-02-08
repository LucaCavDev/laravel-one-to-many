@extends('layouts.main-layout')

@section('content')

    <h1>NEW TASK:</h1>

    <form action="{{ route('task-store') }}" method="POST">
        @csrf
        @method('POST')

        <label for="title">Title</label>
        <input name="title" type="text">
        <br>

        <label for="desc">Description</label>
        <input name="desc" type="text">
        <br>

        <label for="priority">Priority</label>
        <input name="priority" type="text">
        <br>

        <label for="employee_id">Employee</label>
        <select name="employee_id">
            @foreach ($emps as $emp)
                <option value="{{ $emp -> id }}">
                    {{$emp -> name}}
                    {{$emp -> lastname}}

                </option>
            @endforeach
        </select>
        <br>

        <label for="typs[]">Typologies</label><br>
        @foreach ($typs as $typ)
            <input name="typs[]" type="checkbox" value="{{ $typ -> id }} "> {{ $typ -> name }} <br>

        @endforeach

        <br>

        <input type="submit">

    </form>

{{--
    'title',
    'desc',
    'priority', 
--}}


    
@endsection