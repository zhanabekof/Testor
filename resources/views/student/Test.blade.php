@extends('layouts.student')
@section('content')
<header>
  <h1>Тесты по {{$subject->sub_name}} </h1>
</header>
<ol>
    @foreach($tests as $test)
      <li><strong>{{$test->test_name}}</strong><br>
        @foreach($answers as $answer)
            <div class="radio">
                <label>
	                <input type="radio" name="q1" value="e">
    	            {{ $answer->answer_name}}
                </label>
            </div>
             @endforeach
        </li>
      @endforeach
      </ol>
@endsection
