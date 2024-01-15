<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{

    private $myvar = "Hello World!";

    function _construct(){

    }
    function index(){
        return view('home');
    }
    public function store(Request $req){
        $data['myinput'] = $req->input('myinput');
        return view('myroute',$data);
    }
}