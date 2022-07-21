<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Student;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function all(Request $request){
////        $classes = Classes::all();
//        $classes = Classes::orderBy("name","asc")->select('cid','name','room')->limit(5)->get();
        $paramName = $request->get("name");
        $paramRoom = $request->get("room");
        $classes = Classes::SearchN($paramName)->SearchR($paramRoom)->withCount("students")->simplePaginate(10);
        return view("classes.class-list",["classes"=>$classes]);
    }
    public function form(){
        $studentsList = Student::all();
        return view("classes.formclass",['studentsList'=>$studentsList]);
    }
    public function create(Request $request){
        Classes::create(
            [
                "cid"=>$request->get("cid"),
                "name"=>$request->get("name"),
                "room"=>$request->get("room")
            ]
        );
        return redirect()->to("/class/list");
    }
}
