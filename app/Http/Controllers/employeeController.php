<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class employeeController extends Controller
{
    public function index()
    {
        return view('person/add');
    }

    public function AddEmployee(Request $request){
        if($request->isMethod('post')) {
            $newEmployee = new Employee();
            $newEmployee->name = $request->input('name');
            $newEmployee->title = $request->input('title');
            $newEmployee->unit = $request->input('unit');
            $newEmployee->save();

        }
        return view('person.add');
    }

    public function shower( ){

        return view('person.shower');
    }



}

