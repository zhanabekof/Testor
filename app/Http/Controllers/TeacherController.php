<?php

namespace App\Http\Controllers;
use App\Subject;
use App\Test;
use App\Answer;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
      
      $questions = new Question();
      $questions->question_name = $request->question;
      $questions->test_id = $request->selectsubject;
      $questions->user_id = $userId = Auth::id();
      $questions->save();
        
      $answer = new Answer();
      $answer->question_id = $questions->id;
      if($request->success == "First Choice")
      {
            $answer->success = true;
      }
      else{
        $answer->success = false;
      }
      $answer->answer_name = $request->answer1;
      $answer->save();

      $answer = new Answer();
      $answer->question_id = $questions->id;
      if($request->success == "Second Choice")
      {
            $answer->success = true;
      }
      else{
        $answer->success = false;
      }
      $answer->answer_name = $request->answer2;
      $answer->save();

      $answer = new Answer();
      $answer->question_id = $questions->id;
      if($request->success == "Third Choice")
      {
            $answer->success = true;
      }
      else{
        $answer->success = false;
      }
      $answer->answer_name = $request->answer3;
      $answer->save();
     
     
      return redirect('teacher/create');
    }
   
}
