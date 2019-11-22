<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('jeevan');
    }

    public function printmsg($fname,$lname){
        echo "hello"." ".$fname." ".$lname ;
    }
}
