<html>
  <head>
    <title>MeetUP Universitário - @yield('title')</title>
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-blue.min.css" />
    <style>
      .mdl-grid {
        max-width: 1024px;
        margin: 0 auto;
      }
    </style>
  </head>
  <body>
    <header class="mdl-grid header">
      <div class="mdl-cell mdl-cell--3">
        <a class="header__logo" href="#">MeetUP Universitario(logo)</a>
      </div>
      <div class="mdl-cell mdl-cell--5"></div>
      <div class="mdl-cell mdl-cell--4">
        <a href="#signin">inscreva-se</a> |
        <a href="/entrar">entrar</a>
      </div>
    </header>
    <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--12-col">
        @yield('content')
      </div>
    </div>
  </body>
</html>
