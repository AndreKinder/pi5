<html>
  <head>
    <title>MeetUP Universitário - @yield('title')</title>
  </head>
  <body>
    <header class="header">
      <a class="header__logo" href="#">MeetUP Universitario(logo)</a>
      <a href="#signin">inscreva-se</a>
      <a href="#signup">entrar</a>
    </header>
    <div class="container">
      @yield('content')
    </div>
  </body>
</html>
