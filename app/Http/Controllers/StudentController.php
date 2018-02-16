<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\Test;
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
      $tests = DB::table('test')->where('id', $request->id)->get();

      $answers = [];
      for ($i=0; $i < count($tests) ; $i++) {
           $answers = DB::table('answer')->where('question_id', $tests[$i]->Id)->get();
           //echo '<pre>';
           //var_dump($answers);
           //echo '</pre>';
      }

      return view('student.Test',['tests'=>$tests,'subject'=>$subject,'answers'=>$answers]);
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
