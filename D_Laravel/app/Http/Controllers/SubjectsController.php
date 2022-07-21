<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    public function all(Request $request){
        $paramName = $request->get("name");
        $subjects = Subject::Search($paramName)->simplePaginate(10);
        return view("subjects.subject-list", [
            'subject'=>$subjects
        ]);
    }
    public function form(){
        return view("subjects.formsubject");
    }
    public function create(Request $request){
        Subject::create(
            [
                "sbid"=>$request->get("sbid"),
                "name"=>$request->get("name"),
            ]
        );
        return redirect()->to("/subject/list");
    }
}
