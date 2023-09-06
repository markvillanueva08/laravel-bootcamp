<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get();
// Route::post();
// Route::put ();
// Route::patch();
// Route::delete();
// Route::options();

// Route::match(['get','post'], '/',  function(){
//     return 'POST and Get is allowed';
// });

// Route::view('/welcome', 'welcome');

// Route::get('/', function(){
//     return 'redirected';
// });

// Route::redirect('/welcome', '/');

//Route::permanentRedirect('/welcome', '/');

Route::get('/', function(){
    return 'welcome!';
});


// Route::get('/users', function(Request $request){
//     dd($request);
//     return null;
// });

// Route::get('/get-text', function(){
//     return  response('hello world', 200);
//            // ->header('Content-Type', 'text/plain');

// });

// Route::get('/user/{id}/{group}', function($id, $group){
//     return response($id.'-'.$group, 200);
// });


// Route::get('/request-json',function(){
//     return response() -> json(['name' => 'mark v', 'age' => '21']);
// });


// Route::get('/request-download', function(){
    
//     $path = public_path().'/sample.txt';
//     $name = 'mail.txt';
//     $headers =  array(
//         'Content-Type : application/text-plain',
//     );
//     return response()->download($path, $name, $headers);
// });