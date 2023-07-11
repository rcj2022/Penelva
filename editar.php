<?php

if(!empty($_GET['id']))
{

include_once('config.php');

$id = $_GET['id'];

$sqlSelect = "SELECT * FROM escola WHERE id = $id";

$result = $con->query($sqlSelect);

if ($result->num_rows > 0) 
{
    while($dados = mysqli_fetch_assoc($result))
    {
        $nome = $dados['nome'];
        $nasc = $dados['nasc'];
        $cpf = $dados['cpf'];
        $rg = $dados['rg'];
        $sexo = $dados['sexo'];
        $sus = $dados['sus'];
        $pai = $dados['pai'];
        $contpai = $dados['contpai'];
        $mae = $dados['mae'];
        $contmae = $dados['contmae'];
        $rua = $dados['rua'];
        $bairro = $dados['bairro'];
        $cidade = $dados['cidade'];
        $estado = $dados['estado'];
        $bolsa = $dados['bolsa'];
        $acesso = $dados['acesso'];

    }

}
else
{
    header('Location: consult.php');

}


}
else
{
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
        .form-label{
            font-weight: 600;
        }
       
    </style>
<body>
    
    
    <div class="container my-5 bg-light  p-2 text-dark fs-5">
    <a href="consult.php"><i class="bi bi-arrow-return-left  bg-info fs-4 rounded-5 p-2 "></i></a>
    
        <h4 class="fs-1 text-dark text-center">Formulário de cadastro</h4>
    
        <h2 class="fs-4 text-dark">Dados pessoais do aluno</h2>
        <hr>
         <form action="update.php" method="POST">

        <div class="row">
        <div class="my-3 col"> 
        <label for="nome" class="form-label">Nome do aluno</label>
        <input type="text" class="form-control border-0"  name="nome" id="nome" value="<?php echo $nome ?>"  placeholder="Digite o nome do aluno" required>
        </div>

        <div class="my-3 col">
        <label for="nasc" class="form-label">Data de nascimento</label>
        <input type="date" class="form-control" name="nasc" id="nasc" value="<?php echo $nasc ?>">

        </div>
        </div>
        <div class="row">
        <div class="my-3 col"> 
        <label for="cpf" class="form-label">CPF do aluno</label>
        <input type="text" class="form-control" name="cpf" id="cpf" placeholder="somente números"  value="<?php echo $cpf ?>" >
        </div>
        
        <div class="my-3 col">
        <label for="rg" class="form-label">RG do aluno</label>
        <input type="text" class="form-control" name="rg" id="rg" placeholder="Nº do RG" value="<?php echo $rg ?>">

        </div>
        </div>
        <div class="row">
        <div class="my-3 col">
        <div class="form-check">
        <P>Sexo:</P>
        <input class="form-check-input" type="radio" name="flexRadioDefault" value="masculino" id="flexRadioDefault" <?php echo ($sexo == 'masculino') ? 'checked' : '' ?> checked>
        <label class="form-check-label" for="flexRadioDefault">
            Masculino
        </label>
        </div>
         
        <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" value="feminino" id="flexRadioDefault"<?php echo ($sexo == 'feminino') ? 'checked' : '' ?>>
        <label class="form-check-label" for="flexRadioDefault" >
            Feminino
        </label>

        
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" value="Outro" id="flexRadioDefault" <?php echo ($sexo == 'Outro') ? 'checked' : '' ?>>
        <label class="form-check-label" for="flexRadioDefault" >
            Outro
        </label>
        </div>
        </div>
        <div class="my-3 col">
        <label for="sus" class="form-label">Nº do cartão do SUS</label>
        <input type="text" class="form-control" name="sus" id="sus" value="<?php echo $sus ?>" placeholder="Somente números...">

        </div>
        <h1 class="fs-4 text-dark">Dados dos pais/Responsáveis</h1>
        <hr>
        <div class="row">
        <div class="my-3 col"> 
        <label for="pai" class="form-label">Nome do pai</label>
        <input type="text" class="form-control" name="pai" id="pai"  value="<?php echo $pai ?>"placeholder="Digite o nome do pai" >
        </div>
        
        <div class="my-3 col">
        <label for="celpai" class="form-label">Contato do pai/Responsável</label>
        <input type="tel" class="form-control" name="celpai" id="celpai" value="<?php echo $contpai ?>" placeholder="(XX)XXXXX-XXXX">

        </div>
        </div>
        <div class="row">
        <div class="my-3 col"> 
        <label for="mae" class="form-label">Nome da mãe/Responsável</label>
        <input type="text" class="form-control" name="mae" id="mae" value="<?php echo $mae ?>" placeholder="Digite o nome da mãe">
        </div>
        
        <div class="my-3 col">
        <label for="celmae" class="form-label">Contato da mãe/Responsável</label>
        <input type="tel" class="form-control" name="celmae" id="celmae" value="<?php echo $contmae ?>" placeholder="(XX)XXXXX-XXXX">

        </div>
        </div>
        <h1 class="fs-4 text-dark">Informações do endereço do aluno</h1>
        <hr>

        <div class="row">
        <div class="my-3 col"> 
        <label for="rua" class="form-label">Logradouro</label>
        <input type="text" class="form-control" name="rua" id="rua" value="<?php echo $rua ?>" placeholder="Digite o endereço" >
        </div>
        
        <div class="my-3 col">
        <label for="bairro" class="form-label">Bairro</label>
        <input type="text" class="form-control" name="bairro" id="bairro" value="<?php echo $bairro ?>"  placeholder="Digite o bairro">

        </div>
        </div>

        <div class="row">
        <div class="my-3 col"> 
        <label for="cidade" class="form-label">Cidade</label>
        <input type="text" class="form-control" name="cidade" id="cidade" value="<?php echo $cidade ?>"  placeholder="Digite a cidade/distrito" >
        </div>
        
        <div class="my-3 col">
        <label for="uf" class="form-label">Estado</label>
        <input type="text" class="form-control" name="uf" id="uf" value="<?php echo $estado ?>"  placeholder="Digite o estado">

        </div>
        </div>
        <h1 class="fs-4 text-dark">Benefícios do governo:</h1>
        <hr>
        <div class="row">
        <div class="my-3 col">
        <div class="form-check">
      
        <input class="form-check-input" type="radio" name="bolsa"<?php echo ($bolsa == 'Bolsa família') ? 'checked' : '' ?> id="Bolsa família" value="Bolsa família" checked>
        <label class="form-check-label" for="bolsa">
            Bolsa família
        </label>
        </div>
         
        <div class="form-check">
        <input class="form-check-input" type="radio" name="bolsa"  <?php echo ($bolsa == 'Bolsa escola') ? 'checked' : '' ?> id="Bolsa escola" value="Bolsa escola" >
        <label class="form-check-label" for="bolsa" >
            Bolsa escola
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="bolsa"  <?php echo ($bolsa == 'Outros') ? 'checked' : '' ?> id="Outros" value="Outros" >
        <label class="form-check-label" for="bolsa" >
            Outros
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="bolsa" <?php echo ($bolsa == 'Não recebe') ? 'checked' : '' ?> id="Não recebe" value="Não recebe" >
        <label class="form-check-label" for="bolsa" >
            Não recebe
        </label>
        </div>
        </div>
        <h1 class="fs-4 text-dark">Acesso à escola:</h1>
        <hr>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" name="flexCheckDefault" value="A pé"  <?php echo ($acesso == 'A pé') ? 'checked' : '' ?> id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault" >
            A pé
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" name="flexCheckDefault" value="De ônibus escolar" id="flexCheckChecked"  <?php echo ($acesso == 'De ônibus escolar') ? 'checked' : '' ?> >
        <label class="form-check-label" for="flexCheckChecked">
            De ônibus escolar
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" name="flexCheckDefault" value="De Bicicleta" <?php echo ($acesso == 'De Bicicleta') ? 'checked' : '' ?> id="flexCheckChecked">
        <label class="form-check-label" for="flexCheckChecked">
            De Bicicleta
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" name="flexCheckDefault" value="De lancha" <?php echo ($acesso == 'De lancha') ? 'checked' : '' ?> id="flexCheckChecked">
        <label class="form-check-label" for="flexCheckChecked">
            De Lanche
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" name="flexCheckDefault" value="De carro particular"  id="flexCheckChecked" <?php echo ($acesso == 'De carro particular') ? 'checked' : '' ?>>
        <label class="form-check-label" for="flexCheckChecked">
            De Carro particular
        </label>
        </div>
        </div>
        </div>
        </div>
        
        
         </div>
         <div class="container ">
        <input type="hidden" name="id" value="<?php echo $id ?>">  
        <input class="btn btn-success fs-4 w-25 rounded-5" type="submit" value="Atualizar" name="update" id="update">
        </div>
        </div>
       <br>
        
       
      
        

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