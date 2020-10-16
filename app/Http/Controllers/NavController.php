<?php

namespace App\Http\Controllers;
use App\Models\Statue;


use Illuminate\Http\Request;

class NavController extends Controller
{
    Public function welcome(){
        return view("welcome");
    }
    Public function add(){
        return view("add");
    }
    Public function show(){
        return view('show', ['statues' => Statue::show()]);
    }
}