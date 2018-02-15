<?php

namespace App\Http\Controllers;
use App\Subject;
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
}
