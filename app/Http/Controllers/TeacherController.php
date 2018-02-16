<?php

namespace App\Http\Controllers;
use App\Subject;
use App\Test;
use App\Answer;
use App\Question;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function getCreate()
    {
        $subjects = Subject::all();
        return view('teacher.createsubject',['subjects'=>$subjects]);
    }
    public function postCreate(Request $request)
    {
      $test = new Question();
      //$test->user_id = Auth::user->id;
      $test->test_name = $request->question;
      $answer = new Answer();
    //$answer->question_id =
      echo '<pre>';
      var_dump($request->selectsubject);
      echo '</pre>';
    }
    //echo '<pre>';
    //var_dump($answers);
    //echo '</pre>';
}
