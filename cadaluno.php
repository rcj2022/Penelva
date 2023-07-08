<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <title>Document</title>
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
    
        <h4 class="fs-1 text-dark text-center">Formulário de cadastro</h4>
    
        <h2 class="fs-4 text-dark">Dados pessoais do aluno</h2>
        <hr>
         <form action="#">

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
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1" checked>
            Masculino
        </label>
        </div>
         
        <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
        <label class="form-check-label" for="flexRadioDefault2" >
            Feminino
        </label>
        </div>
        </div> 
        <div class="my-3 col">
        <label for="sus" class="form-label">Nº do cartão do SUS</label>
        <input type="text" class="form-control" name="sus" id="sus" placeholder="Nº do cartão do SUS">

        </div>
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
        <input type="tel" class="form-control" name="celpai" id="celpai" placeholder="(XX)XXXXX-XXXX">

        </div>
        </div>
        <div class="row">
        <div class="my-3 col"> 
        <label for="mae" class="form-label">Nome da mãe/Responsável</label>
        <input type="text" class="form-control" name="mae" id="mae" placeholder="Digite o nome da mãe/responsável" >
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
      
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1" checked>
            Bolsa família
        </label>
        </div>
         
        <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
        <label class="form-check-label" for="flexRadioDefault2" >
            Bolsa escola
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" >
        <label class="form-check-label" for="flexRadioDefault3" >
            Outros
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" >
        <label class="form-check-label" for="flexRadioDefault4" >
            Não recebe
        </label>
        </div>
        </div>
        <h1 class="fs-4 text-dark">Acesso à escola:</h1>
        <hr>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" >
        <label class="form-check-label" for="flexCheckDefault">
            A pé
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
        <label class="form-check-label" for="flexCheckChecked">
            De ônibus escolar
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
        <label class="form-check-label" for="flexCheckChecked">
            De Bicicleta
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
        <label class="form-check-label" for="flexCheckChecked">
            De Lanche
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
        <label class="form-check-label" for="flexCheckChecked">
            De Carro particular
        </label>
        </div>
        </div>
        </div>
        </div>
        
        
        </div>
        
         
        
        </div>

        
         </form>

    </div>
   
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js" defer></script>
</body>
</html>