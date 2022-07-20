<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function all(Request $request){
//        $clTable = with(new Classes)->getTable();
//        $stTable = with(new Student)->getTable();
//        $students = Student::leftJoin($clTable,
//            $stTable.".cid",'=',
//            $clTable.".cid")
//            ->select($stTable.'.*',$clTable.'.name as className',$clTable.'.room')
//            ->simplePaginate(10);
        $classesList = Classes::all();
        $paramName = $request->get("name");
        $paramClassID = $request->get("classID");
        $students = Student::ClassFilter($paramClassID)->Search($paramName)->with("classes")->simplePaginate(10);
        return view("students.student-list", [
            'students'=>$students,
            'classesList'=>$classesList
        ]);
    }
}
