<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
   <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> -->
   <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <title>Home</title>
    <style>
        .img-thumbnail{
            widows: 50px;
            height: 50px;
            padding: 5px;
        }

    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-secondary">
  <div class="container-fluid">
    <img src="imagem/logo.jpg" class="img-thumbnail" alt="">
    <a class="navbar-brand p-3" href="#">Esc Mul Benedito Lima Penelva</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#">Eventos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cadastro
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="">Professor</a></li>
            <li><a class="dropdown-item" href="cadaluno.php">Aluno</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Passoal de apoio</a></li>
          </ul>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link ">Eventos</a>
        </li> -->
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Pesquisar..." aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
      </form>
    </div>
  </div>
</nav>
<div class="text-center p-5">
  <img src="imagem/logo.jpg" class="rounded" alt="...">
</div>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>
</html>