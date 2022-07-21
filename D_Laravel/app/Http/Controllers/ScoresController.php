<?php

namespace App\Http\Controllers;

use App\Models\Score;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;

class ScoresController extends Controller
{
    public function all(Request $request){
        $studentList = Student::all();
        $subjectList = Subject::all();
        $paramNamesv = $request->get("namesv");
        $paramNamesb = $request->get("namesb");
        $scores = Score::SearchSV($paramNamesv)->SearchSB($paramNamesb)->with("students")->with("subjects")->simplePaginate(10);
        return view("scores.score-list", [
            'scores'=>$scores,
            'studentList'=>$studentList,
            'subjectList'=>$subjectList
        ]);
    }
    public function form(){
        $studentList = Student::all();
        $subjectList = Subject::all();
        return view("scores.score-list", [
            'studentList'=>$studentList,
            'subjectList'=>$subjectList
        ]);
    }
    public function create(Request $request){
        Score::create(
            [
                "scid"=>$request->get("scid"),
                "mark"=>$request->get("mark"),
                "result"=>$request->get("result"),
                "sid"=>$request->get("sid"),
                "sbid"=>$request->get("sbid")
            ]
        );
        return redirect()->to("/score/list");
    }
}
