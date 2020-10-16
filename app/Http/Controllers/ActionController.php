<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\statue;


class ActionController extends Controller
{
    Public function add(Request $request){
        Statue::addOne($request);
        return redirect('liste');
    }
    Public function delete(Request $request){
        Statue::deleteOne($request);
        return redirect('liste');
    }
    Public function modify(Request $request){
        return view('modify', ['statue' => Statue::callOne($request)]);
    }
    Public function update(Request $request){
        Statue::updateOne($request);
        return redirect('liste');
    }
}
