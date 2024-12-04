<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nlcprductcontroller extends Controller
{
    public function nlcindex(){
        $fruits=array ("tao","cam","xoai","chuoi","dua");
        return view('test',['fruits'=>$fruits]);
    }
}
