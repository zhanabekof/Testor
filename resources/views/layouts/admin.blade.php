<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Тесты</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="/css/welcome.css" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">
        <link href="/css/create.css" rel="stylesheet">
        <!-- Styles -->
    </head>
	<style>
        input[type="text"]:focus { outline: none; }
        input[type="password"]:focus { outline: none; }
        input[type="submit"]:focus { outline: none; }
    </style>
<body>
  <div class="container">
  <header>
     <a href="/homepage"><img src="/images/logo.png" alt="Логотип"></a>
    <nav>
         <a href="/homepage" >Главная</a>
         <a href="/about">О нас</a>
         <a href="/contacts">Контакты</a>
          <a href="/teacher/create">Создать тест</a>
          <a href="/teacher/cabinet">Личный кабинет</a>
         <a href="/" class="login" >Выйти</a>
       </nav>
  </header>
        @yield('content')
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
