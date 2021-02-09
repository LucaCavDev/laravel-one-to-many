@extends('layouts.main-layout')

@section('content')

    <h1>EMPLOYEES:</h1>

    <a href=" {{ route('emp-create') }} ">
        CREATE NEW EMPLOYEE
    </a>


    @foreach ($emps as $emp)

        <li>
            <a href="{{ route('emp-show', $emp -> id) }}">
                {{ $emp -> name }}
            </a>
            <a href="{{ route('emp-edit', $emp -> id) }}">
                --------------EDIT
            </a>


        </li>

    @endforeach
    
@endsection