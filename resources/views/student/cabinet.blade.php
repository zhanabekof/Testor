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
			{{ $user->name }}
			</td>
		</tr>
		<tr>
			<td>
				Дата регистрации
			</td>
			<td>
			{{$user->created_at}}	
			</td>
		</tr>
		<tr>
			<td>
			Количество пройденных тестов
			</td>
			<td>
			173
			</td>
		</tr>
	</table>

              

    </div>
</div>
<table class="table">
	<thead>
		<tr>
			<th><h1>№ теста</h1></th>
			<th><h1>Название теста</h1></th>
			<th><h1>Дата прохождения теста</h1></th>
			<th><h1>Количество баллов</h1></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Google</td>
			<td>9518</td>
			<td>6369</td>
			<td>01:32:50</td>
		</tr>
        <tr>
			<td>Google</td>
			<td>9518</td>
			<td>6369</td>
			<td>01:32:50</td>
		</tr>
        <tr>
			<td>Google</td>
			<td>9518</td>
			<td>6369</td>
			<td>01:32:50</td>
		</tr>
        <tr>
			<td>Google</td>
			<td>9518</td>
			<td>6369</td>
			<td>01:32:50</td>
		</tr>
        <tr>
			<td>Google</td>
			<td>9518</td>
			<td>6369</td>
			<td>01:32:50</td>
		</tr>
	</tbody>
</table>
@endsection