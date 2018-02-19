@extends('layouts.student')
@section('content')
<h1>Создать тест</h1>

<form  action="/teacher/create" method="post">

<div class="row">
    {{ csrf_field() }}
  <div class="col-md-4">
    <label>Выберите предмет</label>
  </div>

  <div class="col-md-4" style ="margin-bottom:20px">
    <select name="selectsubject" class="form-control ">
      @foreach($subjects as $subject)
      <option value="{{ $subject->id }}">{{ $subject->sub_name }}</option>
      @endforeach
    </select>
  </div>
  </div>

  <div>
    <textarea name="question" type="text" id="question" placeholder="Введите вопрос" class="form-control"></textarea>
  </div>

  <div>
    <label>Варианты ответов</label>
    <br />
    <div class="row">
    <div class="col-md-6">
        <textarea name="answer1" type="text" id="answer1" placeholder="Введите ответ" class="form-control" style="height:100px"></textarea>	
    </div>
    <div class="col-md-4">
      <input id="choice1" name="success" type="radio" value="First Choice" checked="checked">
    </div>
    </div>
    <div class="row">
    <div class="col-md-6">
        <textarea name="answer2" type="text" id="answer2" placeholder="Введите ответ" class="form-control" style="height:100px"></textarea>	
    </div>
    <div class="col-md-4">
      <input id="choice1" name="success" type="radio" value="First Choice" checked="checked">
    </div>
    </div>
    <div class="row">
    <div class="col-md-6">
        <textarea name="answer3" type="text" id="answer3" placeholder="Введите ответ" class="form-control" style="height:100px"></textarea>	
    </div>
    <div class="col-md-4">
      <input id="choice1" name="success" type="radio" value="First Choice" checked="checked">
    </div>
    </div>
  </div>

 

  <input type="submit" value="Отправить" id="send">

</form>

@endsection
