<?php

namespace App\Http\Controllers;
use App\Models\book;


use Illuminate\Http\Request;

class NavController extends Controller
{
    Public function welcome(){
        return view("welcome");
    }
    Public function add(){
        return view("add");
    }
    
}