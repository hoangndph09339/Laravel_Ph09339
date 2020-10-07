<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\DB;
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
Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::get('user', function () {
    return view('user');
});

Route::get('news', function () {
    return view('news');
})->name('RouteNews');

Route::get('news/{id}', function ($id) {
    return "Bai viet so ${id}";
});

Route::prefix('backend')->namespace('App\Http\Controllers\Backend')->group(function () {
//Route::group(['prefix' => 'backend', 'namespace' => 'Backend'], function (){
    Route::get('user', 'UserController@index')->name('backend.user');
    Route::get('product', 'ProductController@index')->name('backend.product');
    Route::get('news', 'NewsController@index')->name('backend.new');
    Route::get('category', 'CategoryController@index')->name('backend.category');

    Route::get('user/create', 'UserController@create')->name('backend.user.create');
    Route::post('user/store', 'UserController@store')->name('backend.user.store');

    Route::get('studentIndex', 'StudentController@index')->name('backend.students');
    Route::get('studentShow/{id}', 'StudentController@show')->name('backend.students.show');
});

Route::get('user/{id}', function ($id) {
    return "User Id ${id}" . "<br/>" . "<a href='/'>Home</a>";
})->name('user.show');

Route::get('user/{id}/branch/{brId}', function ($id, $brId) {
    return "User Id ${id} <br/> Branch Name ${brId}" . "<br/>" . "<a href='/'>Home</a>";
})->name('user.branch')->where('brId', '[a-zA-Z]+');

Route::group(['prefix' => 'backend'], function () {
    Route::get('user-management', function () {
        return "User management" . "<br/>" . "<a href='/'>Home</a>";
    })->name('backend.users');

    Route::get('product-management', function () {
        return "Product management" . "<br/>" . "<a href='/'>Home</a>";
    })->name('backend.products');

    Route::get('category-management', function () {
        return "Category management" . "<br/>" . "<a href='/'>Home</a>";
    })->name('backend.categories');

    Route::get('news-management', function () {
        return "News management" . "<br/>" . "<a href='/'>Home</a>";
    })->name('backend.news');

});

    Route::get('students', function () {
        // su dung query builder
        $student = DB::table('students')->where('id', "1")->get();
//        dd($student);
        return view('detail', ['studentValue'=>$student]);
    })->name('students');

    Route::get('subjects', function () {
        return "<h1>Subjects</h1>";
    })->name('subjects');

    Route::get('/student/{id}/{age}', function ($id, $age){
        dd("gia tri truyen vao: ". ${id} . ' ' . ${age});
    });

    Route::get('student-list', function (){
        $studentList = DB::table('students')->orderBy('id', 'desc')->get();
        return view('studentList', [
            'studentList' => $studentList
        ]);
    })->name('Student-List');

    Route::get('login', function (){
        return view('login');
    })->name('login');

    Route::post('post-login', function (Request $request ){
        $username = $request->username;
        $user = DB::table('users')
                    ->where('name', 'like', "%$username%")
                    ->first();
        $pass = $request->password;
        $pass = DB::table('users')
                    ->where('password', 'like', "%$pass%")
                    ->first();
        if ($user && $pass){
            return redirect()->route('userDetail');
        }
    })->name('postLogin');

    Route::get('user', function (){
        return view('user');
    })->name('userDetail')->middleware('loginMiddle');

    Route::get('admin', function (){
        return view('admin');
    })->name('adminlte');

//    Route::resource('students', StudentController::class);

//    Route::get('subjects', [SubjectController::class, 'index'])->name('subjects.index');
