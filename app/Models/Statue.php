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
        $statue->country = $request->author;
        $statue->price = $request->price;
        $statue->author = $request->author;
        $statue->save();
        return;
    }
    Public static function show(){
        $statues = Statue::All();
        return $statues;
    }
}
