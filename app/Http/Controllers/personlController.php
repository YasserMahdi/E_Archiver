<?php

namespace App\Http\Controllers;

use App\Employee;
use App\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class personlController extends Controller
{
    public function index()
    {
        return view('person.index');
    }
    public  function fetch(){
        return Datatables::of(User::all())->make(true);
    }
}
