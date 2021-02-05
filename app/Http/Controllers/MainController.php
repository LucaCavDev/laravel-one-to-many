<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;
use App\Task;


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