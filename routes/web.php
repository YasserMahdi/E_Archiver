<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Employee;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/personal','empController@index')->name('personal');
Route::get('/fetch', 'empController@fetch')->name('fetch');

Route::get('/units','empController@index')->name('units'); //
Route::get('/prog','ProgramController@index')->name('prog.index');
Route::get('users', ['uses'=>'EmpController@index', 'as'=>'users.index']);

Route::get('units', ['uses'=>'UnitController@index', 'as'=>'units.index']);
//Route::get('prog', ['uses'=>'ProgramController@index', 'as'=>'prog.index']);


Route::get('/newemp', function () {
    return view('person.add');
});

Route::get('/newprog', function () {
    return view('programs.add');
});


Route::get('/add','employeeController@index');
Route::post('/add', 'employeeController@AddEmployee'); //
Route::get('/addUnit', function(){
    return view('units.addUnit');
});
Route::post('/addUnit', 'unitController@addUnit');//
Route::post('/addProg', 'ProgramController@addProgram');
//Route::get('/imggetter','UserController@imgGetter');
//Route::get('imggetter', ['uses'=>'UserController@imgGetter', 'as'=>'img.imgGetter']);
Route::get('imggetter/{id}', 'empController@imgGetter')->name('img.imgGetter');
Route::get('papergetter/{id}', 'unitController@papergetter')->name('peper.papergetter');//
Route::get('programgetter/{id}', 'ProgramController@programgetter')->name('prog.programgetter');
//Route::get('imggetter', 'UserController@imgGetter');
Route::get('/upload',function(){
    return view('person.uploadEmpPaper');
});

Route::get('/uploadunitpaper',function(){
    return view('units.uploadPaper');
});

Route::get('/uploadProgrampaper',function(){
    return view('programs.uploadPaper');
});


Route::post('uploadimg', 'ImgController@uploadEmpImg'); //
Route::post('uploadEmp','ImgController@imgSaver');
Route::get('/imgshow/{id}', 'ImgController@binToImg');//
Route::get('/unitpapershow/{id}', 'UnitController@binToImg'); //
Route::get('/programpapershow/{id}', 'ProgramController@binToImg');
Route::get('/uploadfile','UploadFileController@index');
Route::post('/uploadfile','UploadFileController@showUploadFile');

Route::get('PaperGitter','UserController@imgGetter.PaperGitter');


Route::Post('uploadunitpaper','ImgController@UnitimgSaver');
Route::Post('uploadProgramPaper','ImgController@ProgimgSaver');



//Route::get('empDel/{id}',function ($id){
//    $data = DB::table('empimgs')->where('emp_id',$id)->delete();
//    $data = DB::table('employees')->where('id',$id)->delete();
//    return redirect('/personal');
//});
//
//Route::get('empFileDel/{id}',function ($id){
//    $data = DB::table('empimgs')->where('id',$id)->delete();
//    return redirect('/imggetter/{id}');
//});
//
//
//
//Route::get('DelUnit/{id}',function ($id){
//    $data = DB::table('unitimgs')->where('unit_id',$id)->delete();
//    $data = DB::table('units')->where('id',$id)->delete();
//    return redirect('/units');
//});
//
//Route::get('DelUnitPaper/{id}',function ($id){
//    $data = DB::table('unitimgs')->where('id',$id)->delete();
//    return redirect('/papergetter/{id}');
//});
//
//
//Route::get('DelProgramPaper/{id}',function ($id){
//    $data = DB::table('empimgs')->where('emp_id',$id)->delete();
//    $data = DB::table('employees')->where('id',$id)->delete();
//    return redirect('/personal');
//});
//
//Route::get('DelProgramPaper/{id}',function ($id){
//    $data = DB::table('empimgs')->where('id',$id)->delete();
//    return redirect('/imggetter/{id}');
//});
//
