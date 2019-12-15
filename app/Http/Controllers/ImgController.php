<?php

namespace App\Http\Controllers;

use App\Empimg;
use App\Programimg;
use App\Unitimg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;
use Illuminate\Support\Facades\Response;

class ImgController extends Controller
{
//    public function uploadEmpImg(Request $request)
//    {
//        if($request->isMethod('post'))
//        {
//            $data = new Empimg();
//
//            $url = $request["image"]->store("public");
//            $data["doc"] = str_replace("public", "/storage", $url);
//
//            $data["name"] = $request["name"];
//            $data["emp_id"] = $request["id"];
//
//            $data->save();



//            $newImg = new Empimg();
//            $newImg->name = $request->input('name');
//            $file = $request->file('image');
//             // $tmpName  = $_FILES['image']['tmp_name'];
//
//                //$fp = fopen($tmpName, 'rb'); // read binary
//
//            //$newImg->doc = Image::make(base64_encode($_FILES["image"]["tmp_name"])->save();
//            //$newImg->doc = $data;
//
//            //$newImg->doc = Image::make( addslashes(file_get_contents($_FILES["image"]["tmp_name"])));
//            //$newImg->doc = ($request->getContent($file));
//            $path = $file->path();
//            $name = $file->getClientOriginalName();
//            $fullpath =$path .'\\'.$name;
//            $t = file_get_contents($_FILES['image']['tmp_name']);
//            $request->file('image')->store('uploads');
//            $newImg->doc = $t;
//            $newImg->emp_id = $request->input('id');
//            $newImg->save();
//             return view('home');
//        }
//
//        return view('home');
//    }


public function imgSaver(Request $request){


    if ($request->hasFile('image')) {


        $name = $request->input('name');
        $id = $request->input('id');
        $realName =$request->file('image')->getClientOriginalName();
        $image = $request->file('image')->storeAs('public/uploads',$realName);


        $paper = $request->file('image');

        $newImg=new Empimg();
        $newImg->name=$name;
        $newImg->doc=$realName;
        $newImg->emp_id=$id;
        $newImg->save();

        return view('person.uploadEmpPaper');


    }
    else{
        echo '<script>alert("الرجاء اختيار صورة");</script>';
        return view('person.uploadEmpPaper');
    }

//    if ($request->hasFile('image')) {
//        $image = $request->file('image');
//        $name = $image->getClientOriginalName();
//        $size = $image->getClientSize();
//        $destinationPath = public_path('/images');
//        $image->move($destinationPath, $name);
//    }
}
    public function binToImg($id){
        $img= DB::table('empimgs')->where('id',$id)->get();
        $arr = array('img'=>$img);
        return view('person.imgshow',$arr);

    }



public function UnitimgSaver(Request $request){


    if ($request->hasFile('image')) {


        $name = $request->input('name');
        $id = $request->input('id');
        $realName =$request->file('image')->getClientOriginalName();
        $image = $request->file('image')->storeAs('public/uploads',$realName);


        $paper = $request->file('image');

        $newImg=new Unitimg();
        $newImg->name=$name;
        $newImg->paper=$realName;
        $newImg->unit_id=$id;
        $newImg->save();

        return view('units.uploadPaper');


    }
    else{
        echo '<script>alert("الرجاء اختيار صورة");</script>';
        return view('units.uploadPaper');
    }

}




    public function ProgimgSaver(Request $request){


        if ($request->hasFile('image')) {


            $name = $request->input('name');
            $id = $request->input('id');
            $realName =$request->file('image')->getClientOriginalName();
            $image = $request->file('image')->storeAs('public/uploads',$realName);


            $paper = $request->file('image');

            $newImg=new Programimg();
            $newImg->name=$name;
            $newImg->paper=$realName;
            $newImg->program_id=$id;
            $newImg->save();

            return view('programs.uploadPaper');


        }
        else{
            echo '<script>alert("الرجاء اختيار صورة");</script>';
            return view('programs.uploadPaper');
        }

    }


}
