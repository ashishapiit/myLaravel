<?php

use Illuminate\Http\Request;

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
Route::get('/add', [
    'uses' => 'PostController@indexAction',
    'as' => 'post.add'
]);
Route::get('/', function () {
    $array = ["name" => "ashish"];

    return view('main', $array);
});

Route::post('register', function(Request $request) {
    
});

Route::group(["prefix" => 'admin'], function() {

    Route::get('create', function() {

        return view('admin.create');
    })->name('admin.create.get');
    Route::post('create', function(Request $request, \Illuminate\Validation\Factory $validator) {
        $validation = $validator->make($request->all(),[
            'name' => 'required',
            'email' => 'required | email',
            'phone' => 'required | between:0,1'
        ]);
        if($validation->fails()){
            return redirect()->back()->withErrors($validation);
        }
        return redirect()->route('admin.create.get');
    })->name('admin.create');



    Route::get('update/{id}', function($id) {
        echo $id;
        //return view('admin.create');
    })->name('admin.update');
    Route::post('update/', function(\Illuminate\Http\Request $request, \Illuminate\Validation\Factory $Validator) {
        $validation = $Validator->make($request->all(), [
            'in1' => "required | numeric"
        ]);
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation);
        }
        return redirect()->route('admin.create')->with('info', $request->input('in1'));
        //return view('admin.create');
    })->name('admin.update.post');
});

//Route::group(["prefix" => 'admin'], function() {
//    Route::get('/welcome/{id?}', function ($id) {
//        return view('welcome');
//    })->name('welcome');
//});

//Route::get('/', 'PostController@getIndex')->name('home');
//Route::get('/',[
//    'uses' => 'PostController@getIndex',
//    'as' => 'home'
//]);
Route::get('user/{id}', function ($name) {
    //
})->name('admin.update')->where('id', '[A-Za-z]+');
//
Route::get('user/{id}', function ($id) {
    //
})->where('id', '[0-9]+');
//
Route::get('user/{id}/{name}', function ($id, $name) {
    //
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);
