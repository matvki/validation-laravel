<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statue extends Model
{
    use HasFactory;

    Public static function addOne($request){
        $statue = new Statue;
        $statue->name = $request->name;
        $statue->date = $request->date;
        $statue->country = $request->country;
        $statue->price = $request->price;
        $statue->author = $request->author;
        $statue->save();
        return;
    }
    Public static function show(){
        $statues = Statue::All();
        return $statues;
    }
    Public static function deleteOne($request){
        Statue::destroy($request->id);
        return;
    }
    Public static function callOne($request){
        $statue = Statue::find($request->id);
        return $statue;
    }
    Public static function updateOne($request){
        $statue = Statue::find($request->id);
        $statue->title = $request->title;
        $statue->genre = $request->genre;
        $statue->author = $request->author;
        $statue->synopsis = $request->synopsis;
        $statue->parution_date = $request->parution;
        $statue->save();
        return;
    }
}
