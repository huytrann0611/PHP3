<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;


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

$publicStudent = DB::table('students')->where('id', 15)->first();

Route::get('/', function () {
    dd(123123);
    return view('welcome');
});

Route::get('/students', function () {
    $students = DB::table('students')->where('id', '<', 5)->get();

    return $students;
});

Route::view(
    '/students-view',
    'welcome',
    ['name' => $publicStudent->name]);


Route::get('/students/{id}', function ($param) {
    $students = DB::table('students')->where('id', $param)->get();

    return $students;

});


Route::get('student', function() {
    $students = DB::table('students')->get();
    return view('students.list',[
        'students' => $students,
    ]);
});

//chuc nang login + route POST
route::get('/login', function (){
    return view ('login');
})->name('get-login');

// route::post('/post-login', function(Request $request){
//     dd:($request->all());
    
//     $username=$request->username;

//     $student=DB::table('students')
//     ->where('name','like',"%$username%")
    
// });
Route::resource('student', StudentController::class);





