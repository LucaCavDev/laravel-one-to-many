<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;
use App\Task;
use App\Location;
use App\Typology;



class MainController extends Controller
{
    public function empIndex() {
        $emps = Employee::all();
        return view('pages.emp-index', compact('emps'));
    }
    public function empShow($id) {
        $emp = Employee::findOrFail($id);
        return view('pages.emp-show', compact('emp'));
    }

    public function taskIndex() {
        $tasks = Task::all();
        return view('pages.task-index', compact('tasks'));
    }
    public function taskShow($id) {
        $task = Task::findOrFail($id);
        return view('pages.task-show', compact('task'));
    }

    public function locIndex() {
        $locs = Location::all();
        return view('pages.loc-index', compact('locs'));
    }
    public function locShow($id) {
        $loc = Location::findOrFail($id);
        return view('pages.loc-show', compact('loc'));
    }
//-----------
    public function typIndex() {
        $typs = Typology::all();
        return view('pages.typ-index', compact('typs'));
    }
    public function typShow($id) {
        $typ = Typology::findOrFail($id);
        return view('pages.typ-show', compact('typ'));
    }






}


/*
    public function create() {
        return view('pages.drink-create');
    }

    public function store(Request $request) {

        
        $newDrink = new Drink;

        $newDrink -> name = $request -> get('name');
        $newDrink -> alchol_content = $request -> get('alchol_content');
        $newDrink -> price = $request -> get('price');

        $newDrink -> save();

        return redirect() -> route('drinks-index');
        
        //Drink::create($request -> all());
        //return redirect() -> route('drinks-index');
        //oppure
        //return redirect() -> route('drink-show', $drink -> id);
    }

    public function edit($id) {
        $drink = Drink::findOrFail($id);
        return view('pages.drink-edit', compact('drink'));
    }

    public function update(Request $request, $id) {
        $drink = Drink::findOrFail($id);
        $drink -> update($request -> all());

        return redirect() -> route('drinks-index');
    }


    public function delete($id) {
        $drink = Drink::findOrFail($id);
        $drink -> delete();

        return redirect() -> route('drinks-index');
    }
*/