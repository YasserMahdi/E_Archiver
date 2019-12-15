<?php

namespace App\Http\Controllers;

use App\Employee;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class empController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Employee::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){

                    $btn = '<a href="/imggetter/'.$row->id.'" class="edit btn btn-primary btn-sm">View</a>';
                    $btn.='&nbsp;&nbsp;&nbsp;';
                    $btn.='<a href="/upload/?id='.$row->id.'" class="edit btn btn-secondary btn-sm">ADD</a>';
                    $btn.='&nbsp;&nbsp;&nbsp;';
                    //$btn.='<a href="/empDel/'.$row->id.'" class="edit btn btn-danger btn-sm">Delete</a>';
                    //$btn.='&nbsp;&nbsp;&nbsp;';


                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('person.index');
    }

    public function imgGetter(Request $request,$id)
    {
        if ($request->ajax()) {
            //$data = Empimg::all();

            $data = DB::table('empimgs')->where('emp_id',$id)->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){

                    $btn = '<a href="/imgshow/'.$row->id.'" class="edit btn btn-primary btn-sm" id="'.$row->id.'" > View</a>';
                    $btn.='&nbsp;&nbsp;&nbsp;';
                    //$btn.='<a href="/empFileDel/'.$row->id.'" class="edit btn btn-danger btn-sm">Delete</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('person.shower');



    }
}
