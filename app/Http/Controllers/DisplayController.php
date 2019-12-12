<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Services\DataTable;

class DisplayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Datatables::of(User::all())->addColumn('action', function($row) {
            return '<a href="/prodicts/'. $row->id .'/edit" class="btn btn-primary">Edit</a>';
        })
            ->addColumn('delete', function ($row) {
                return '<a href="/products/delete/1" class="btn btn-danger">delete</a>';
            })->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('person.index');
    }
}
