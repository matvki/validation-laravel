<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\statue;


class ActionController extends Controller
{
    Public function add(Request $request){
        Statue::addOne($request);
        return redirect('show');
    }
}
