<?php

namespace App\Http\Controllers;

use App\Models\Classes;

class ClassesController extends Controller
{
    public function all(){
////        $classes = Classes::all();
//        $classes = Classes::orderBy("name","asc")->select('cid','name','room')->limit(5)->get();
        $classes = Classes::withCount("students")->simplePaginate(5);
//        dd($classes);
        return view("classes.class-list",["classes"=>$classes]);
    }
}
