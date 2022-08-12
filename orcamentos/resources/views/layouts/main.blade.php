<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
       
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    </head>
    <body>
    
   <header> 
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="/">SGO</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-item nav-link active" href="/">Home </span></a>
        </li>
        <li class="nav-item">
        <a class="nav-item nav-link" href="/orcamentos/novo">Novo Orçamento</a>
        </li>
        <li class="nav-item">
        <a class="nav-item nav-link" href="/funcionarios/novo">Novo Funcionario</a>
        </li>
        <li class="nav-item">
        <a class="nav-item nav-link" href="/clientes/novo">Novo Cliente</a>
        </li>
        <li class="nav-item">
        <a class="nav-item nav-link" href="/orcamentos/lista">Orçamentos</a>
        </li>
        <li class="nav-item">
        
        </li>
        <li class="nav-item">
        <a class="nav-item nav-link" href="/clientes/lista">Clientes</a>
        </li>
        <li class="nav-item">
        <a class="nav-item nav-link" href="/funcionarios/lista">Funcionarios</a>
        </li>
        <li class="nav-item">
        <a class="nav-item nav-link" href="/clientes/novo">Contactos</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Digite a palavra" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>
</header>
<div class="container-fluid">
     @yield('content')
</div>  
<footer class="bg-dark text-center text-white" id="footer">
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  
</footer>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </body>
</html>
