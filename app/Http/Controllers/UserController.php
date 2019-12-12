<?php

namespace App\Http\Controllers;

use App\Empimg;
use App\Employee;
use App\User;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Employee::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){

                    $btn = '<a href="/imggetter/'.$row->id.'" class="edit btn btn-primary btn-sm">View</a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('main');
    }

    public function imgGetter(Request $request,$id )
    {
        if ($request->ajax()) {
            //$data = Empimg::all();
            $data = DB::table('empimgs')->where('emp_id',$id)->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){

                    $btn = '<a href="/imgshow" class="edit btn btn-primary btn-sm" id="'.$row->id.'"> View</a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

            return view('person.shower');



    }
}
