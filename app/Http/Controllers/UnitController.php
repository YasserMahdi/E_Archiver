<?php

namespace App\Http\Controllers;


use App\Employee;
use App\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class UnitController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Unit::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){

                    $btn = '<a href="/papergetter/'.$row->id.'" class="edit btn btn-primary btn-sm">View</a>';
                    $btn.='&nbsp;&nbsp;&nbsp;';
                    $btn.='<a href="/uploadunitpaper/?id='.$row->id.'" class="edit btn btn-secondary btn-sm">ADD</a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('units.index');
    }

    public function papergetter(Request $request,$id)
    {
        if ($request->ajax()) {
            //$data = Empimg::all();
            $data = DB::table('unitimgs')->where('unit_id',$id)->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){

                    $btn = '<a href="/unitpapershow/'.$row->id.'" class="edit btn btn-primary btn-sm" id="'.$row->id.'" > View</a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('units.unit');



    }

    public function addUnit(Request $request){

        if($request->isMethod('post')) {
            $newUnit= new Unit();
            $newUnit->name = $request->input('unit');
            $newUnit->num_of_emp = $request->input('noe');
            $newUnit->save();

        }
        return view('units.addUnit');

    }

    //
    public function binToImg($id){
        $paper= DB::table('unitimgs')->where('id',$id)->get();
        $arr = array('paper'=>$paper);
        return view('units.paper',$arr);

    }
}
