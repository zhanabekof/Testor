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
			Количество отвеченых вопросов
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
			
			<th><h1>Дата ответа</h1></th>
			<th><h1>Правильность</h1></th>
		</tr>
	</thead>
	<tbody>
	@foreach($history as $histor)
		<tr>
			<td>{{$histor->question}}</td>
			<td>{{$histor->created_at}}</td>
			@if ($histor->result == 1)
				<td>Правильно</td>
			@else
				<td>Неправильно</td>
			@endif
		</tr>

		@endforeach
	
       
	</tbody>
</table>
@endsection