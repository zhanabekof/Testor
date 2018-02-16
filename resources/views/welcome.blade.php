@extends('layouts.app')
@section('content')
<div class="login-wrap" style="margin-top:70px">
<div class="login-html">
  <input style="color:white" id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab"> <p style="color:white">Вход</p></label>
  <input style="color:white" id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"><p style="color:white">Регистрация</p></label>
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
        <label  for="check"><span class="icon" ></span> Запомнить </label>
      </div>

      <div class="group">
        <input type="submit" class="button" value="Войти">
      </div>
      </form>
      <div class="hr"></div>
      <div class="foot-lnk">
        <a href="/forgot" style="color:white">Забыли пароль?</a>
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

@endsection