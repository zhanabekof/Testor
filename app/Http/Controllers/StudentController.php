<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use App\Quotation;
use Illuminate\Http\Request;
use App\Subject;
use App\Test;
use App\Question;
use App\History;
use App\Answer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class StudentController extends Controller
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
    public function GetSubjects()
    {
      $subjects = Subject::all();
      return view('student.subjects',['subjects'=>$subjects]);
    }
    public function GetCabinet()
    {
      $user = Auth::user();
      $history = History::where('user_id',Auth::id())->get();
      $historycount = count($history);
      return view('student.cabinet',[
        'user'=> $user,
      'history'=>$history,
      'historycount'=>$historycount
      ]);
    }
    public function postTestComplete(Request $request)
    {
      echo 'Сохранение вашего ответа ....';
      
      $history = new History();
      $history->test_id = $request->sub_id;
      $history->user_id = Auth::id();
      $history->question = $request->question_id;
      $history->result = $request->answer;
      $history->save();
      
      return back();
    
    }
    public function GetTest(Request $request)
    {

      $subject = DB::table('subject')->where('id', $request->id)->first();
      $question = Question::orderByRaw("RAND()")->where('test_id',$subject->id)->first();
      $answers = DB::table('answer')->where('question_id', $question->id)->get();
      return view('student.Test',[
        'question'=>$question,
        'subject'=>$subject,
        'answers'=>$answers
        ]);
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
}
