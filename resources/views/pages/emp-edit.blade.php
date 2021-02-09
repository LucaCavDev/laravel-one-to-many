@extends('layouts.main-layout')
@section('content')
    <h1>
        [{{ $emp -> id }}] 
        EDIT EMPLOYEE
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
    

    <form action="{{ route('emp-update', $emp -> id) }}" method="POST">
        
        @csrf
        @method('POST')

        <label for="name">name</label>
        <input name="name" type="text">
        <br>

        <label for="lastname">lastname</label>
        <input name="lastname" type="text">
        <br>

        <label for="dateOfBirth">dateOfBirth, should be in this format 2021-02-09</label>
        <input name="dateOfBirth" type="text">
        <br>


        <input type="submit" value="salva"> 
    </form>
@endsection