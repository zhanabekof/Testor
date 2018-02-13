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
    <body>
      <div class="login-wrap">
<div class="login-html">
  <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Восстановление пароля</label>
  <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
  <div class="login-form">
    <div class="sign-in-htm">
      <div class="group">
        <label for="forgot_email" class="label">Введите Email</label>
        <input id="forgot_email" type="text" class="input">
      </div>
      <div class="group">
        <label for="forgot_kod" class="label">Введите код</label>
        <input id="forgot_kod" type="password" class="input" >
      </div>
      <div class="group">
        <label for="forgot_pass" class="label">Введите новый пароль</label>
        <input id="forgot_pass" type="password" class="input" data-type="password">
      </div>
      <div class="group">
        <label for="forgot_pass" class="label">Повторите новый пароль</label>
        <input id="forgot_pass" type="password" class="input" data-type="password">
      </div>

      <div class="group">
        <input type="submit" class="button" value="Сохранить">
        <br>
        <input type="submit" class="button" value="Назад" onclick="history.back()">
      </div>

    </div>
  </div>
</div>
</div>


    </body>
</html>
