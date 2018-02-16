@extends('layouts.student')
@section('content')
<h1>Создать тест</h1>

<form class="cf" action="/teacher/create" method="post">
    {{ csrf_field() }}
  <div class="half left cf">
    <label>Выберите предмет</label>
  </div>

  <div class="half right cf">
    <select name="selectsubject">
      @foreach($subjects as $subject)
      <option value="{{ $subject->id }}">{{ $subject->sub_name }}</option>
      @endforeach
    </select>
  </div>

  <div>
    <textarea name="question" type="text" id="question" placeholder="Введите вопрос"></textarea>
  </div>

 <div style="margin-top:5%">
  <div class="half left cf">
    <label>Варианты ответов</label>
    <textarea name="answer1" type="text" id="answer1" placeholder="Введите ответ"></textarea>
    <textarea name="answer2" type="text" id="answer2" placeholder="Введите ответ"></textarea>
    <textarea name="answer3" type="text" id="answer3" placeholder="Введите ответ"></textarea>
  </div>

  <div class="half right cf">
    <label>Выберите правильный ответ</label>
    <div>
      	<input id="success" name="success" type="hidden" value="">
      	<div>
      		<input id="choice1" name="success" type="radio" value="First Choice" checked="checked">
      	</div>
        <div>
        	<input id="choice2" name="success" type="radio" value="Second Choice">
        </div>
        <div>
        	<input id="choice3" name="success" type="radio" value="Third Choice">
        </div>
      </div>
  </div>
 </div>

  <input type="submit" value="Отправить" id="send">

</form>

@endsection
