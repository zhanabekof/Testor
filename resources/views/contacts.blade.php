<!doctype html>
 <html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Контакты</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
        <!-- Fonts -->
		  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>
        <link href="/css/homepage.css" rel="stylesheet">
        <!-- Styles -->
    </head>
	
    <body>
      <body data-spy="scroll" data-target=".navbar" data-offset="50">
  
  

  <!-- Navbar. Reference for navbar:
  https://www.w3schools.com/bootstrap/bootstrap_navbar.asp -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span> 
        </button>
        <a class="navbar-brand" href="/homepage"><img src="/images/logo.png" alt="Логотип"></a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="/homepage">Главная</a></li>
          <li><a href="/about">О нас</a></li>
          <li><a href="/contact">Контакты</a></li>
          <li><a href="/" class="login">Вход/Регистрация</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- contact -->
  <div class="contact" id="contact">
    <div class="container">
      <div class="row" id="row4">
        <div class="col-md-12">
          <form>
            <h1 class="text-center">Контакты</h1>
            <h3 class="text-center">г. Астана, ул. Алии Молдагуловой 25, Компьютерная Академия ШАГ</h3>
            <h4 class="text-center">Остались вопросы? Напишите нам.</h4>
            <hr width= "8%">
            <div class="form-group">
              <input type="name" class="form-control" id="name" placeholder="Имя">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="phone" class="form-control" id="phone" placeholder="Телефон">
            </div>
            <div class="form-group">
              <textarea class="form-control" rows="5" id="comment" placeholder="Комментарий"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Отправить</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>

  

    <script  src="/js/homepage.js"></script>
</html>
