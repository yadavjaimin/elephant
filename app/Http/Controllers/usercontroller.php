<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\select;
use Illuminate\Support\Facades\Http;

class usercontroller extends Controller
{
    function show(){
        return to_route("user");
    }

    function employe(){
        return to_route("employes",['name'=>'jaimin']);
    }

    function userdata(){
        $user= DB::select('select * from users');
        return view('userData',['users'=>$user]);
    }

    // function employes(){
    //     $employe=DB::select('select * from employe');
    //     return view('userData',['employe'=>$employe]);

    // }

    function getstudent(){
        $students=\App\Models\Student::all();
        // return $students;
         return view('students',['data'=>$students]);
    }

    function gethttp(){
        $response=Http::get('https://jsonplaceholder.typicode.com/users/1');
     
  return view('gethttp',['data'=>json_decode($response)]);
    }
}
