
<?php

if(isset($_POST['submit']))
{

include_once('config.php');

$nome = $_POST['nome'];
$nasc = $_POST['nasc'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$sexo = $_POST['flexRadioDefault1'];
$sus = $_POST['sus'];
$pai = $_POST['pai'];
$contpai = $_POST['celpai'];
$mae = $_POST['mae'];
$contmae = $_POST['celmae'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['uf'];
$bolsa = $_POST['flexRadioDefault2'];
$acesso = $_POST['acesso'];


$result = mysqli_query($con,"INSERT INTO escola(nome, nasc, cpf, rg, sexo, sus, pai, contpai, mae, contmae, rua, bairro, cidade, estado, bolsa, acesso) VALUES('$nome','$nasc', '$cpf', '$rg', '$sexo', '$sus', '$pai', '$contpai', '$mae', '$contmae','$rua', '$bairro', '$cidade', '$estado', '$bolsa', '$acesso')");
header('Location: consult.php');
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
    <a href="consult.php"><i class="bi bi-arrow-return-left  bg-info fs-4 rounded-5 p-2 "></i></a>
    
        <h4 class="fs-1 text-dark text-center">Formulário de cadastro</h4>
    
        <h2 class="fs-4 text-dark">Dados pessoais do aluno</h2>
        <hr>
         <form action="cadaluno.php" method="POST">

        <div class="row">
        <div class="my-3 col"> 
        <label for="nome" class="form-label">Nome do aluno</label>
        <input type="text" class="form-control border-0"  name="nome" id="nome" placeholder="Digite o nome do aluno" required>
        </div>

        <div class="my-3 col">
        <label for="nasc" class="form-label">Data de nascimento</label>
        <input type="date" class="form-control" name="nasc" id="nasc">

        </div>
        </div>
        <div class="row">
        <div class="my-3 col"> 
        <label for="cpf" class="form-label">CPF do aluno</label>
        <input type="text" class="form-control" name="cpf" id="cpf" placeholder="000.000.-000-00" maxLength ="15" >
        </div>
        
        <div class="my-3 col">
        <label for="rg" class="form-label">RG do aluno</label>
        <input type="text" class="form-control" name="rg" id="rg" placeholder="Nº do RG">

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
        <h1 class="fs-4 text-dark">Dados dos pais/Responsáveis</h1>
        <hr>
        <div class="row">
        <div class="my-3 col"> 
        <label for="pai" class="form-label">Nome do pai</label>
        <input type="text" class="form-control" name="pai" id="pai" placeholder="Digite o nome do pai" >
        </div>
        
        <div class="my-3 col">
        <label for="celpai" class="form-label">Contato do pai/Responsável</label>
        <input type="tel" class="form-control" name="celpai" id="celpai"  placeholder="(XX)XXXXX-XXXX" >

        </div>
        </div>
        <div class="row">
        <div class="my-3 col"> 
        <label for="mae" class="form-label">Nome da mãe/Responsável</label>
        <input type="text" class="form-control" name="mae" id="mae" placeholder= "Digite o nome da mãe...">
        </div>
        
        <div class="my-3 col">
        <label for="celmae" class="form-label">Contato da mãe/Responsável</label>
        <input type="tel" class="form-control" name="celmae" id="celmae" placeholder="(XX)XXXXX-XXXX">

        </div>
        </div>
        <h1 class="fs-4 text-dark">Informações do endereço do aluno</h1>
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
        <h1 class="fs-4 text-dark">Benefícios do governo:</h1>
        <hr>
        <div class="row">
        <div class="my-3 col">
        <div class="form-check">
      
        <input class="form-check-input" type="radio" name="flexRadioDefault2" value="Bolsa família" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2" >
            Bolsa família
        </label>
        </div>
         
        <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault2" value="Bolsa escola" id="flexRadioDefault2" >
        <label class="form-check-label" for="flexRadioDefault2" >
            Bolsa escola
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault2" value="Outros" id="flexRadioDefault2" >
        <label class="form-check-label" for="flexRadioDefault2" >
            Outros
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault2" value="Não recebe" id="flexRadioDefault2" >
        <label class="form-check-label" for="flexRadioDefault2" >
            Não recebe
        </label>
        </div>
        </div>
        <h1 class="fs-4 text-dark">Acesso à escola:</h1>
        <hr>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="A pé" id="flexCheckDefault" checked>
        <label class="form-check-label" for="flexCheckDefault" >
            A pé
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="De ônibus escolar" id="flexCheckChecked" >
        <label class="form-check-label" for="flexCheckChecked">
            De ônibus escolar
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="De bicicleta" id="flexCheckChecked">
        <label class="form-check-label" for="flexCheckChecked">
            De Bicicleta
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="De lancha" id="flexCheckChecked">
        <label class="form-check-label" for="flexCheckChecked">
            De Lanche
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="De carro particular" id="flexCheckChecked">
        <label class="form-check-label" for="flexCheckChecked">
            De Carro particular
        </label>
        </div>
        </div>
        </div>
        </div>
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
    $("#celpai").mask("(99) 99999-9999");
    $("#celmae").mask("(99) 99999-9999");
    $("#cpf").mask("999.999.999-99");
    $("#sus").mask("999999999999999");

</script>
</body>
</html>