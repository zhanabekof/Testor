<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
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
