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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/personal', 'personlController@index')->name('personal');
Route::get('/fetch', 'personlController@fetch')->name('fetch');

Route::get('users', ['uses'=>'UserController@index', 'as'=>'users.index']);

Route::get('create', 'DisplayController@create');
Route::get('index', 'DisplayController@index');

Route::get('/newemp', function () {
    return view('person.add');
});


Route::get('/add','employeeController@index');
Route::post('/add', 'employeeController@AddEmployee');

//Route::get('/imggetter','UserController@imgGetter');
//Route::get('imggetter', ['uses'=>'UserController@imgGetter', 'as'=>'img.imgGetter']);
Route::get('imggetter/{id}', 'UserController@imgGetter')->name('img.imgGetter');
//Route::get('imggetter', 'UserController@imgGetter');
Route::get('/upload',function(){
    return view('person.uploadEmpPaper');
});
Route::post('uploadimg', 'ImgController@uploadEmpImg');
Route::get('/imgshow', 'ImgController@binToImg');

Route::get('/uploadfile','UploadFileController@index');
Route::post('/uploadfile','UploadFileController@showUploadFile');

Route::get('PaperGitter','UserController@imgGetter.PaperGitter');
