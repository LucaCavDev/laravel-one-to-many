<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Employee;
use App\Task;
use App\Location;
use App\Typology;



class MainController extends Controller
{
    public function homeIndex() {
        return view('pages.home-index');
    }

    //---------------------------------------------------

    public function empIndex() {
        $emps = Employee::all();
        return view('pages.emp-index', compact('emps'));
    }
    public function empShow($id) {
        $emp = Employee::findOrFail($id);
        return view('pages.emp-show', compact('emp'));
    }

    //---------------------------------------------------   

    public function taskIndex() {
        $tasks = Task::all();
        return view('pages.task-index', compact('tasks'));
    }
    public function taskShow($id) {
        $task = Task::findOrFail($id);
        return view('pages.task-show', compact('task'));
    }

    public function taskCreate() {

        $emps = Employee::all();
        $typs = Typology::all();
        return view('pages.task-create', compact('emps', 'typs'));
    }
    public function taskStore(Request $request) {

        $data = $request -> all();

        Validator::make($data, [

            'title' => 'required|min:3|max:100',
            'title' => 'alpha',
            'desc' => 'required|min:4|max:200',
            'priority' => 'required|integer',


        ]) -> validate();


        
        $emp = Employee::findOrFail($data['employee_id']);
        $task = Task::make($request -> all());
        $task -> employee() -> associate($emp);
        $task -> save();

        if (array_key_exists('typs', $data)) {
            $typs = Typology::findOrFail($data['typs']);
            $task -> typologies() -> attach($typs);
        } else {
            $task -> typologies() -> detach();

        }

        
        //$typs = Typology::findOrFail($data['typs']);
        //$task -> typologies() -> attach($typs);
        return redirect() -> route('task-show', $task -> id);
    }


    public function taskEdit($id) {
        $emps = Employee::all();
        $typs = Typology::all();
        $task = Task::findOrFail($id);
        return view('pages.task-edit', 
            compact('emps', 'typs', 'task')
        );
    }
    public function taskUpdate(Request $request, $id) {
        $data = $request -> all();

        Validator::make($data, [

            'title' => 'required|min:3|max:100',
            'title' => 'alpha',
            'desc' => 'required|min:4|max:200',
            'priority' => 'required|integer',


        ]) -> validate();

        $emp = Employee::findOrFail($data['employee_id']);

        $task = Task::findOrFail($id);
        $task -> update($data);

        $task -> employee() -> associate($emp);
        $task -> save();

        if (array_key_exists('typs', $data)) {
            $typs = Typology::findOrFail($data['typs']);
            $task -> typologies() -> sync($typs);
        } else {
            $task -> typologies() -> detach();

        }



        return redirect() -> route('task-show', $task -> id);
    }

    //---------------------------------------------------

    public function locIndex() {
        $locs = Location::all();
        return view('pages.loc-index', compact('locs'));
    }
    public function locShow($id) {
        $loc = Location::findOrFail($id);
        return view('pages.loc-show', compact('loc'));
    }

    //---------------------------------------------------

    public function typIndex() {
        $typs = Typology::all();
        return view('pages.typ-index', compact('typs'));
    }
    public function typShow($id) {
        $typ = Typology::findOrFail($id);
        return view('pages.typ-show', compact('typ'));
    }


    public function typCreate() {

        $tasks = Task::all();

        return view('pages.typ-create', compact('tasks'));
    }

    public function typStore(Request $request) {

        $data = $request -> all();

        Validator::make($data, [

            'name' => 'required|min:3|max:100',
            'name' => 'alpha',
            'desc' => 'required|min:4|max:200',


        ]) -> validate();

        
        $typ = Typology::create($data);


        if (array_key_exists('tasks', $data)) {

            $tasks = Task::findOrFail($data['tasks']);
        } else {
            $tasks = [];
        }


        $typ -> tasks() -> attach($tasks);
        
        return redirect() -> route('typ-show', $typ -> id);
    }


    public function typEdit($id) {
        $tasks = Task::all();
        $typ = Typology::findOrFail($id);
        return view('pages.typ-edit', 
            compact('typ', 'tasks')
        );
    }
    public function typUpdate(Request $request, $id) {

        $data = $request -> all();
        Validator::make($data, [

            'name' => 'required|min:3|max:100',
            'name' => 'alpha',
            'desc' => 'required|min:4|max:200',


        ]) -> validate();
        
        $typ = Typology::findOrFail($id);
        $typ -> update($data);

        if (array_key_exists('tasks', $data)) {

            $tasks = Task::findOrFail($data['tasks']);
        } else {
            $tasks = [];
        }

        $typ -> tasks() -> sync($tasks);

        return redirect() -> route('typ-show', $typ -> id);
    }

    
}
