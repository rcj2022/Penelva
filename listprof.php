<?php
    // session_start();
    include_once('config.php');
    // print_r($_SESSION);

    // if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    // {
    //     unset($_SESSION['email']);
    //     unset($_SESSION['senha']);

    //     header('Location: login.php');
    // }

    // $logado = $_SESSION['email'];

    if(!empty($_GET['search']))
    {

        $data = $_GET['search'];
        $sql = "SELECT * FROM doc WHERE id LIKE '%$data%' or nome LIKE '%$data%' or cpf LIKE '%$data%' ORDER BY id DESC";

        
    }
    else
    {
       
        $sql = "SELECT * FROM doc order by nome";
    }

   
    $result = $con->query($sql);

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
            rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
            <link rel="shortcut icon" href="imagem/prof.png" type="image/x-icon">
            <link rel="stylesheet" href="consult.css">
           
    <title>Professor</title>
    <style>
        .box-search{
            display: flex;
            justify-content: center;
            gap: .1%;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<img src="imagem/prof.png" alt="" class="img-thumbnail rounded-circle">
  <div class="container-fluid">
    <a class="navbar-brand">Relação de Professores</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </div>
  <div class="d-flex">
        <a href="index.php" class="btn btn-danger me-5">Sair</a>
    </div>
</nav>
<br>

<br>
<!-- começa a pesquisa -->
<div class="box-search">
<input type="search" class="form-control w-25" placeholder="Pesquisar..." id="pesquisar">
<button onclick ="searchData()" class="btn btn-primary">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
</button>
</div>

<!-- termina a pesquisa -->

<div class="m-0">
    <!-- tabela de dados -->
<div class="table-responsive">
    <div class="container mt-4">
        <a class='btn btn-sm btn-success' href='cadProf.php'>

        <svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='currentColor' class='bi bi-plus-circle-fill' viewBox='0 0 16 16'>
        <path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z'/>
        </svg>
        </a>
    </div>

    <table class="table table-bordered text-light table-sm align-middle caption-top fs-6">
    <thead class="text-light fs-5 bg-primary ">
        <tr>
        <th scope="col ">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">Nascimento</th>
        <th scope="col">CPF</th>
        <th scope="col">RG</th>
        <th scope="col">Cel 1</th>
        <th scope="col">Cel 2</th>
        <th scope="col">Sexo</th>
        <th scope="col">SUS</th>
        <th scope="col">Endereço</th> 
        <th scope="col">Bairro</th> 
        <th scope="col">Cidade</th> 
        <th scope="col">Estado</th> 
        <th scope="col">Formação</th> 
        <th scope="col">Esp.</th> 
        <th scope="col">Área</th> 
        <th scope="col">Ações</th>

        </tr>
    </thead>
    <tbody class="table-group-divider border-4">

    <?php
        while($dados = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>".$dados['id']."</td>";
            echo "<td>".$dados['nome']."</td>";
            echo "<td>".$dados['nasc']."</td>";
            echo "<td>".$dados['cpf']."</td>";
            echo "<td>".$dados['rg']."</td>";
            echo "<td>".$dados['cel1']."</td>";
            echo "<td>".$dados['cel2']."</td>";
            echo "<td>".$dados['sexo']."</td>";
            echo "<td>".$dados['sus']."</td>";
            echo "<td>".$dados['rua']."</td>";
            echo "<td>".$dados['bairro']."</td>";
            echo "<td>".$dados['cidade']."</td>";
            echo "<td>".$dados['estado']."</td>";
            echo "<td>".$dados['formacao']."</td>";
            echo "<td>".$dados['esp']."</td>";
            echo "<td>".$dados['area']."</td>";
            echo "<td>
            
            <a class='btn btn-sm btn-primary' href='editarprof.php?id=$dados[id]'>
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' 
            class='bi bi-pencil' viewBox='0 0 16 16'>
            <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
            </svg>
            </a>
            <br><br>
           <a class='btn btn-sm btn-danger' href='deletar.php?id=$dados[id]'>
           <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3' viewBox='0 0 16 16'>
           <path d='M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z'/>
         </svg>
         </a>
            
         
            </td>";
            echo "</tr>";

        }
    ?>
       
    </tbody>
    <caption class="text-center text-light fs-4">Clique no botão acima para cadastrar um novo professor</caption>
    </table>
    </div>
</div>

</body>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
<script>

var search = document.getElementById('pesquisar');

search.addEventListener("keydown", function(event){

    if(event.key==='Enter')
    {
        searchData();

    }

});

 function searchData()
 {
    window.location ='listprof.php?search=' + search.value;


 }

</script>
</html>