@extends('layouts.student')
@section('content')

<div class="row">
    <div class="col-md-4">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTeOUnh
        TI2cdtTmNaiqOMW8JWNlmLgtzQSbwx_YyfY8pgerSdbcZQ" alt="" class="profile-image" />
    </div>
    <div class="col-md-8">
	<table class="table table-stripped">
		<tr>
			<td>
				имя
			</td>
			<td>
				{{ $user-> name }}
			</td>
		</tr>
		<tr>
			<td>
				Дата регистрации
			</td>
			<td>
			{{ $user->created_at }}	
			</td>
		</tr>
		<tr>
			<td>
			Количество отвечено правильных вопросов
			</td>
			<td>
			{{ $historycount }}
			</td>
		</tr>
	</table>

          
			 
	

    </div>
</div>
<table class="table">
	<thead>
		<tr>
			<th><h1>Вопрос</h1></th>
			<th><h1>Название теста</h1></th>
			<th><h1>Дата прохождения теста</h1></th>
			<th><h1>Количество баллов</h1></th>
		</tr>
	</thead>
	<tbody>
	@foreach($questions as $question)
		<tr>
			<td> {{$question->question_name}}</td>
			@foreach($answers as $answer)
			<td>{{$answer->answer_name}}</td>
			@endforeach
			
			<td>6369</td>
			<td>01:32:50</td>
		</tr>
		@endforeach
       
	</tbody>
</table>
@endsection