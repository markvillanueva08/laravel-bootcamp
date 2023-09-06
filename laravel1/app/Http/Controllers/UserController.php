<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'hello from UserController';
    }
    public function show($id){

        $data = array(
        "id" => $id,
       "name" => "mark", 
       "age" => "22",
       "email" => "monkeytheluffy08@gmail.com"
     );
        return view('user', $data);
    }
}

