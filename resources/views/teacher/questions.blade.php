@extends('layouts.student')
@section('content')

<form action="testComplete"></form>
<ul>
    @foreach($questions as $question)
          <li><a href="/teacher/getquestion/?id={{$question->id}}"> {{$question->question_name}}</a></li>
      @endforeach
</ul>
@endsection
