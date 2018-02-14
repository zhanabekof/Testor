<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
         <link href="/css/welcome.css" rel="stylesheet">


        <!-- Styles -->
    </head>
	<style>
        input[type="text"]:focus { outline: none; }
        input[type="password"]:focus { outline: none; }
        input[type="submit"]:focus { outline: none; }
    </style>
    <body>
      <div class="login-wrap">
<div class="login-html">
  <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Вход</label>
  <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Регистрация</label>
  <div class="login-form">
    <div class="sign-in-htm">
      <div class="group">
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
        <label for="user" class="label">E-mail</label>
        <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required autofocus>
          <strong>{{ $errors->first('email') }}</strong>
      </div>
      <div class="group">
        <label for="pass" class="label">Пароль</label>
        <input id="password" type="password" class="input" name="password" required>
      </div>
      <div class="group">
        <input id="check" type="checkbox" class="check" checked>
        <label for="check"><span class="icon"></span>Запомнить</label>
      </div>

      <div class="group">
        <input type="submit" class="button" value="Войти">
      </div>
      </form>
      <div class="hr"></div>
      <div class="foot-lnk">
        <a href="/forgot">Забыли пароль?</a>
      </div>
    </div>
    <div class="sign-up-htm">

  <form class="form-horizontal" method="POST" action="{{ route('register') }}">
    {{ csrf_field() }}
      <div class="group">
        <label for="name" class="label">Логин</label>
        <input id="name" type="text" class="input" name="name" required>
      </div>

      <div class="group">
        <label for="pass" class="label">Пароль</label>
        <input id="pass" type="password" class="input" data-type="password" name="password" required>
      </div>
      <div class="group">
        <label for="pass" class="label">Повторите Пароль</label>
        <input id="pass" type="password" class="input" data-type="password" name="password_confirmation" required>
      </div>

      <div class="group">
        <label for="pass" class="label">Email</label>
        <input id="pass" type="email" class="input" name="email" required>
      </div>
      <div class="group">
        <input type="submit" class="button" value="Зарегистрироваться">
      </div>
      </div>
    </form>
    </div>
  </div>
</div>
</div>


    </body>
</html>
