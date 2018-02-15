<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Личный кабинет</title>

        <!-- Fonts -->
		<link href="/css/welcome.css" rel="stylesheet">
		<link rel="stylesheet" href="/css/profile.css">
        <!-- Styles -->
    </head>

    <body>
      <div class="container">
    <!-- Navigation bar  -->
    <header>
       <a href="/homepage"><img src="/images/logo.png" alt="Логотип"></a>
      <nav>
           <a href="/student/subjects">Главная</a>
           <a href="/about">О нас</a>
           <a href="/contacts">Контакты</a>
		   <a href="/student/cabinet">Личный кабинет</a>
           <a href="/" class="login" >Выйти</a>
         </nav>
    </header>

            <aside>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTeOUnhTI2cdtTmNaiqOMW8JWNlmLgtzQSbwx_YyfY8pgerSdbcZQ" alt="" class="profile-image" />
                <h1 class="name"><i class="fa fa-user-circle-o" style="font-size:20px; color:green"></i>{{ $user->name }}</h1>
                <span class="description">Login</span>
                <span class="description">Mail</span>

                <ul class="social">
                    <li>
                        <span>{{$user->created_at}}</span>
                        <span>173</span>
                    </li>
                    <li>
                        <span>Количество пройденных тестов</span>
                        <span>494</span>
                    </li>
                </ul>
            </aside>
            <div class="content">

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

            </div>

    </div>

    </body>
</html>
