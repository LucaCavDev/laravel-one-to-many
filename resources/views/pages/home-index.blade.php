@extends('layouts.main-layout')

@section('content')
    <div class="home">

        <h1>BEST DATABASE EVER WITH EMPLOYEES TASKS LOCATIONS TYPOLOGIES AND MUCH MORE:</h1>


        <a href="{{ route('emp-index') }}">
            <h2>EMPLOYEES</h2>
        </a>
    
        <a href="{{ route('task-index') }}">
            <h2>TASKS</h2>
        </a>
    
        <a href="{{ route('typ-index') }}">
            <h2>TYPOLOGIES</h2>
        </a>
    
        <a href="{{ route('loc-index') }}">
            <h2>LOCATIONS</h2>
        </a>
    

    </div>


        
    
@endsection