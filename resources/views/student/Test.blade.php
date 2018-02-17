@extends('layouts.student')
@section('content')
<header>
  <h1>Тесты по {{$subject->sub_name}} </h1>
</header>
<form action="testComplete"></form>
<ol>
    @foreach($tests as $question)
      <li><strong>{{$question->question_name}}</strong><br>
        @foreach($answers as $answer)
            <div class="radio">
                <label>
	                <input type="radio" name="q1" value="{{ $answer->success}}">
    	            {{ $answer->answer_name}}
                </label>
            </div>
             @endforeach
        </li>
      @endforeach
      </ol>
@endsection
