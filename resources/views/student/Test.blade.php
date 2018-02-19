@extends('layouts.student')
@section('content')
<header>
  <h1>Тесты по {{$subject->sub_name}} </h1>
</header>
<form action="testComplete" method="POST">  
<input type="hidden" name="sub_id" value="{{$subject->id}}">
<input type="hidden" name="question_id" value="{{$question->id}}">
{{ csrf_field() }}
<div style="margin-top:20px">

    <p>{{$question->question_name}}</p>
     @foreach($answers as $answer)
    
      <input name="answer" type="radio" value="{{ $answer->success }}" checked="chacked">  {{ $answer->answer_name}}
      <br />
      @endforeach
  
    </div>



<button type="submit" class="btn btn-primary" style=" margin:50px 0" >Следующий</button>

</form>

<a href="/student/cabinet" class="btn btn-danger">Выйти из тестирования</a>
@endsection
