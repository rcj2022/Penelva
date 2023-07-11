
<?php

if(isset($_POST['submit']))
{

include_once('config.php');

$nome = $_POST['nome'];
$nasc = $_POST['nasc'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$telcont1 = $_POST['telcont1'];
$telcont2 = $_POST['telcont2'];
$sexo = $_POST['flexRadioDefault1'];
$sus = $_POST['sus'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['uf'];
$formacao = $_POST['flexRadioDefault'];
$esp = $_POST['flexRadioDefault2'];
$area = $_POST['area'];


$result = mysqli_query($con,"INSERT INTO doc(nome, nasc, cpf, rg, cel1, cel2, sexo, sus, rua, bairro, cidade, estado, formacao, esp, area) VALUES('$nome','$nasc', '$cpf', '$rg', '$telcont1', '$telcont2', '$sexo', '$sus', '$rua', '$bairro', '$cidade', '$estado', '$formacao', '$esp', '$area')");
header('Location: listprof.php');
}



?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagem/alunos.ico" type="image/x-icon">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <title>Cadastro de aluno</title>
</head>
    <style>
        p{
            padding: 2px;
            margin: 2px;
            margin-left: -25px;
          
        }
        hr{
            border: 2px solid black;
        }
        p{
            text-decoration: underline;
        }
        h4{
            text-decoration: underline;
        }
    </style>
<body>
    


   
    <div class="container my-5 bg-light  p-2 text-dark fs-5">
    <a href="listprof.php"><i class="bi bi-arrow-return-left  bg-info fs-4 rounded-5 p-2 "></i></a>
    
        <h4 class="fs-1 text-dark text-center">Formulário de cadastro</h4>
    
        <h2 class="fs-4 text-dark">Dados pessoais do Professor</h2>
        <hr>
         <form action="cadProf.php" method="POST">

        <div class="row">
        <div class="my-3 col"> 
        <label for="nome" class="form-label">Nome do Professor</label>
        <input type="text" class="form-control border-0"  name="nome" id="nome" placeholder="Digite o nome do Professor" required>
        </div>

        <div class="my-3 col">
        <label for="nasc" class="form-label">Data de nascimento</label>
        <input type="date" class="form-control" name="nasc" id="nasc">

        </div>
        </div>
        <div class="row">
        <div class="my-3 col"> 
        <label for="cpf" class="form-label">CPF do Professor</label>
        <input type="text" class="form-control" name="cpf" id="cpf" placeholder="(00)000.000.000-00">
        </div>
        
        <div class="my-3 col">
        <label for="rg" class="form-label">RG do Professor</label>
        <input type="text" class="form-control" name="rg" id="rg" placeholder="Nº do RG">

        </div>
        </div>

        <!-- contato -->
        <div class="row">
        <div class="my-3 col"> 
        <label for="cpf" class="form-label">Contato 1</label>
        <input type="text" class="form-control" name="telcont1" id="telcont1" placeholder="(XX) XXXXX-XXXX">
        </div>
        
        <div class="my-3 col">
        <label for="rg" class="form-label">Contato 2</label>
        <input type="text" class="form-control" name="telcont2" id="telcont2" placeholder="(XX) XXXXX-XXXX">

        </div>
        </div>
        
        <div class="row">
        <div class="my-3 col">
        <div class="form-check">
        <P>Sexo:</P>
        <input class="form-check-input" type="radio" name="flexRadioDefault1" value="masculino" id="flexRadioDefault1" checked>
        <label class="form-check-label" for="masculino" >
            Masculino
        </label>
        </div>
         
        <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault1" name="feminino" value="feminino" id="feminino" >
        <label class="form-check-label" for="flexRadioDefault1" >
            Feminino
        </label>

        
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault1" value="outro" id="flexRadioDefault1" >
        <label class="form-check-label" for="flexRadioDefault1" >
            Outro
        </label>
        </div>
        </div>
        <div class="my-3 col">
        <label for="sus" class="form-label">Nº do cartão do SUS</label>
        <input type="text" class="form-control" name="sus" id="sus" placeholder="Nº do cartão do SUS">

        </div>
        
        <h1 class="fs-4 text-dark">Informações do endereço do Professor</h1>
        <hr>

        <div class="row">
        <div class="my-3 col"> 
        <label for="rua" class="form-label">Logradouro</label>
        <input type="text" class="form-control" name="rua" id="rua" placeholder="Digite o endereço" >
        </div>
        
        <div class="my-3 col">
        <label for="bairro" class="form-label">Bairro</label>
        <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Digite o bairro">

        </div>
        </div>

        <div class="row">
        <div class="my-3 col"> 
        <label for="cidade" class="form-label">Cidade</label>
        <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Digite a cidade/distrito" >
        </div>
        
        <div class="my-3 col">
        <label for="uf" class="form-label">Estado</label>
        <input type="text" class="form-control" name="uf" id="uf" placeholder="Digite o estado">

        </div>
        </div>
        <h1 class="fs-4 text-dark">Formação do Professor:</h1>
        <hr>
        <div class="row">
        <div class="my-3 col">
        <div class="form-check">   
        <input class="form-check-input" type="radio" name="flexRadioDefault" value="Superior completo" id="flexRadioDefault" checked>
        <label class="form-check-label" for="flexRadioDefault" >
            Superior completo
        </label>
        </div>

        <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" value="Superior incompleto" id="flexRadioDefault">
        <label class="form-check-label" for="flexRadioDefault" >
            Superior incompleto
        </label>
        </div>
        <br>
        <!-- especialização -->
        <h1 class="fs-4 text-dark">Especialização:</h1>
        <hr class="w-100">
        <div class="row">
            <div class="my-3 col">
                 <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault2" value="Pos-graduado" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2" >
            Pós-graduado
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault2" value="Mestrado" id="flexRadioDefault2" >
        <label class="form-check-label" for="flexRadioDefault2" >
            Mestrado
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault2" value="Dotourado" id="flexRadioDefault2" >
        <label class="form-check-label" for="flexRadioDefault2" >
            Doutorado
        </label>
        </div>
        </div>
        </div>
        <br>
        <div class="row">
        <div class="my-3 col"> 
         <hr>   
        <label for="cidade" class="form-label">Área de atuação</label>
        <input type="text" class="form-control w-50" name="area" id="area" placeholder="Digite a área de atuação" >
        </div>
        </div>
       
        
        <div class=" container bg-light">
        <input class="btn btn-primary fs-4 w-25 rounded-5" type="submit" value="Cadastrar" name="submit" id="submit">
       
        </div>
        <br><br>
         </form>

         
        
       

        

    </div>
   
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js" defer></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>

<script>
    $("#telcont1").mask("(99) 99999-9999");
    $("#telcont2").mask("(99) 99999-9999");
    $("#cpf").mask("999.999.999-99");
    $("#sus").mask("999999999999999");

</script>
</body>
</html>