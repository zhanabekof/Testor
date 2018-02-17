<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use App\Quotation;
use Illuminate\Http\Request;
use App\Subject;
use App\Test;
use App\Question;
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
      return view('student.cabinet',['user'=>$user]);
    }
    public function GetTest(Request $request)
    {

      $subject = DB::table('subject')->where('id', $request->id)->first();
      $questions = DB::table('questions')->where('test_id', $request->id)->get();
      $totalRows = count($questions) - 1;
      $skip = $totalRows > 0 ? mt_rand(0, $totalRows) : 0;
      $answers=[];
    
      for ($i = 0; $i < count($questions); $i++) {
        $answers = DB::table('answer')->where('question_id', $questions[$i]->id)->get();
      }
      
      Question::skip($skip)->take(10);
      return view('student.Test',['tests'=>$questions,'subject'=>$subject,'answers'=>$answers]);
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
