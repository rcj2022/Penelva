<?php

include_once('config.php');

if (isset( $_POST['update'])) 
{
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $nasc = $_POST['nasc'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $sexo = $_POST['flexRadioDefault'];
    $sus = $_POST['sus'];
    $pai = $_POST['pai'];
    $celpai = $_POST['celpai'];
    $mae = $_POST['mae'];
    $celmae = $_POST['celmae'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $bolsa = $_POST['bolsa'];
    $acesso = $_POST['flexCheckDefault'];




    $sqlUpdate = "UPDATE escola SET nome = '$nome', nasc = '$nasc', cpf = '$cpf', rg = '$rg', sexo = '$sexo', sus = '$sus', pai = '$pai', contpai = '$celpai', mae = '$mae', contmae = '$celmae', rua = '$rua', bairro = '$bairro', cidade = '$cidade', estado = '$uf', bolsa = '$bolsa', acesso = '$acesso'  WHERE id = '$id'";

    $result = $con->query($sqlUpdate);

}

header('Location: consult.php')

?>