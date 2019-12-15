<?php

namespace App\Http\Controllers;

use App\Program;
use App\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class ProgramController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Program::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){

                    $btn = '<a href="/programgetter/'.$row->id.'" class="edit btn btn-primary btn-sm">View</a>';
                    $btn.='&nbsp;&nbsp;&nbsp;';
                    $btn.='<a href="/uploadProgrampaper/?id='.$row->id.'" class="edit btn btn-secondary btn-sm">ADD</a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('programs.index');
    }

    public function programgetter(Request $request,$id)
    {
        if ($request->ajax()) {
            //$data = Empimg::all();
            $data = DB::table('programimgs')->where('program_id',$id)->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){

                    $btn = '<a href="/programpapershow/'.$row->id.'" class="edit btn btn-primary btn-sm" id="'.$row->id.'" > View</a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('programs.program');



    }

    public function addProgram(Request $request){

        if($request->isMethod('post')) {
            $newUnit= new Program();
            $newUnit->name = $request->input('program');
            $newUnit->save();

        }
        return view('programs.add');

    }

    //
    public function binToImg($id){
        $paper= DB::table('programimgs')->where('id',$id)->get();
        $arr = array('paper'=>$paper);
        return view('programs.paper',$arr);

    }

}
