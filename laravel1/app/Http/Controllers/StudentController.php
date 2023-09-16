<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index() {
        //$data = Students::all();
       // $data = Students::where('id', 3)->get();
       //$data = Students::where('age','<=', 19)->get();
      // $data = Students::where('age','<=', 19)->orderBy('first_name', 'asc')->limit(5)->get();

      $data = DB::table('students')
                ->select(DB::raw('count(*) as gender_count, gender'))->groupBy('gender')->get();

        return view('students.index', ['students'=> $data]);
    }
}