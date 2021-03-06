@extends('layouts.student')
@section('content')
<header>
  <h1>Тест по программированию</h1>
</header>
    @foreach($subjects as $subject)
    <div class="flipbox">
      <div class="back">
        <p>{{ $subject->sub_name }}</p>
        <a href="/student/test/?id={{$subject->id}}" target="_blank">Пройти тест!</a>
      </div>
      <div class="front">
        <h2>{{ $subject->sub_name }}</h2>
        <i class="fa fa-laptop"></i>
      </div>
    </div>
   @endforeach
   @endsection
