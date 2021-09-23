<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title')</title>
    <!-- Fonte do Google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!-- Icones do show id -->
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- CSS da aplicação -->
    <link rel="stylesheet" href="/css/styles.css">

</head>
<body>

<header>
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="collapse navbar-collapse" id="navbar">
            <a href="/" class="navbar-brand">
              <img src="/img/logo.png" alt="">
            </a>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="/" class="nav-link">Eventos</a>
              </li>
              <li class="nav-item">
                <a href="/eventos/criar" class="nav-link">Criar Eventos</a>
              </li>
              <!--link caso esteja autenticado-->
              @auth
              <li class="nav-item">
                <a href="/dashboard" class="nav-link">Meu eventos</a>
              </li>
              <li class="nav-tem">
                <form action="/logout" method="POST">
                  @csrf
                  <a href="/logout"
                  class="nav-link"
                  onClick="event.preventDefault();
                            this.closest('form').submit();">Sair</a>
                </form>
              </li>
              @endauth
              @guest
              <li class="nav-item">
                <a href="/login" class="nav-link">Entrar</a>
              </li>
              <li class="nav-item">
                <a href="/register" class="nav-link">Cadastrar</a>
              </li>
              @endguest
            </ul>
          </div>
        </nav>
      </header>
@yield('content')
<footer>
    <p>Eventos de comida</p>
</footer>


</body>
</html>