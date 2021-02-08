@extends('layouts.main-layout')
@section('content')
    <h1>
        [{{ $task -> id }}] 
        EDIT TASK
    </h1>
    <form action="{{ route('task-update', $task -> id) }}" method="POST">
        @csrf
        @method('POST')

        <label for="title">Title</label>
        <input name="title" type="text" value="{{ $task -> title }}">
        <br>

        <label for="desc">Description</label>
        <input name="desc" type="text" value="{{ $task -> desc }}">
        <br>

        <label for="priority">Priority</label>
        <input name="priority" type="text" value="{{ $task -> priority }}">
        <br>

        <label for="employee_id">Employee</label>
        <select name="employee_id">
            @foreach ($emps as $emp)
                <option value="{{ $emp -> id }}"
                    @if ($task -> employee -> id == $emp -> id)
                        selected
                    @endif
                >
                    {{ $emp -> name }}
                    {{ $emp -> lastname }}
                </option>
            @endforeach
        </select>
        <br><br>

        <label for="typs[]">Typologies</label> <br>
        @foreach ($typs as $typ)
            <input 
                name="typs[]" 
                type="checkbox" 
                value="{{ $typ -> id }}"
                {{-- VERSIONE PRO --}}
                @if ($task -> typologies -> contains($typ -> id))
                    checked                    
                @endif
                {{-- VERSIONE ESTESA --}}
                {{-- @foreach ($task -> typs as $task_typ)
                    @if ($task_typ -> id == $typ -> id)
                        checked
                    @endif
                @endforeach --}}
            > 
                {{ $typ -> name }} 
            <br>

        @endforeach
        <br><br>

        <input type="submit" value="salva"> 
    </form>
@endsection