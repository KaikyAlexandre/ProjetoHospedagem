<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>hospedagem</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="fundo.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">StarkHome</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>

           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              hospedagem
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="?page=cadastrar-hospedagem">Cadastrar</a></li>
              <li><a class="dropdown-item" href="?page=listar-hospedagem">Listar</a></li>
              
            </ul>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Cliente
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="?page=cadastrar-cliente">Cadastrar</a></li>
              <li><a class="dropdown-item" href="?page=listar-cliente">Listar</a></li>
              
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Reserva
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="?page=cadastrar-reserva">Cadastrar</a></li>
              <li><a class="dropdown-item" href="?page=listar-reserva">Listar</a></li>
              
            </ul>
          </li>

        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <div class="container mt-3">
    <div class="row">
      <div class="col">
        <?php

          //CONEXÃO COM O BANCO DE DADOS
          include('config.php');
          

          switch (@$_REQUEST['page']) {
            //hospedagem
            case 'cadastrar-hospedagem':
              include('cadastrar-hospedagem.php');
              break;
            case 'listar-hospedagem':
              include('listar-hospedagem.php');
              break;
            case 'editar-hospedagem':
              include('editar-hospedagem.php');
              break;
            case 'salvar-hospedagem':
              include('salvar-hospedagem.php');
              break;

            //reserva
            case 'cadastrar-reserva':
              include('cadastrar-reserva.php');
              break;
            case 'listar-reserva':
              include('listar-reserva.php');
              break;
            case 'editar-reserva':
              include('editar-reserva.php');
              break;
            case 'salvar-reserva':
              include('salvar-reserva.php');
              break;

            //cliente
            case 'cadastrar-cliente':
              include('cadastrar-cliente.php');
              break;
            case 'listar-cliente':
              include('listar-cliente.php');
              break;
            case 'editar-cliente':
              include('editar-cliente.php');
              break;
            case 'salvar-cliente':
              include('salvar-cliente.php');
              break;

          }
        ?>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>


</body>
</html>