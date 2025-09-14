<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ControllerPage extends Controller
{
    public  function index(){
        $name ='jama';
        return view('welcome' ,['name' => $name]);
    }
    public function about(){
        $student =[
            ['name' => 'mohmed', 'address' => 'hargeisa', 'age' =>20],
            ['name' => 'jama', 'address' => 'burco', 'age' =>25],
            ['name' => 'cali', 'address' => 'borma', 'age' =>26],
        ];
        return view('about',['student' => $student]);
    }
}
