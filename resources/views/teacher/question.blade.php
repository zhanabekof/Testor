@extends('layouts.student')
@section('content')
<form action="/teacher/create" method="post">
    {{ csrf_field() }}
  
    <div class="row">
    <div class="col-md-8"></div>
        <div class="col-md-4">
        <select name="selectsubject" class="form-control">
          @foreach($subjects as $subject)
              <option value="{{ $subject->id }}">{{ $subject->sub_name }}</option>
         @endforeach
        </select>
        </div>
    </div>
  <div>
    <textarea name="question" type="text" id="question" placeholder="Введите вопрос" class="form-control">{{$question->question_name}}</textarea>
  </div>

 <div style="margin-top:5%">
  <div>
    <label>Варианты ответов</label>
    @foreach($answers as $answer)
        <div class="row">
            <div class="col-md-6">
            <textarea class="form-control" name="answer1" type="text" id="answer1" placeholder="Введите ответ">  {{$answer->answer_name}}</textarea>
            </div> 
            <div class="col-md-6">
                <input id="choice" name="success" type="radio" value="{{$answer->success}}" checked="checked"> 
            </div>
        </div>
    @endforeach
  </div>
@endsection
