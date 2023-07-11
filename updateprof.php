<?php

include_once('config.php');

if (isset( $_POST['update'])) 
{
    $id = $_POST['id'];
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
    $uf = $_POST['uf'];
    $formacao = $_POST['flexRadioDefault'];
    $esp = $_POST['flexRadioDefault2'];
    $area = $_POST['area'];




    $sqlUpdate = "UPDATE doc SET nome = '$nome', nasc = '$nasc', cpf = '$cpf', rg = '$rg', cel1 = '$telcont1', cel2 = '$telcont2', sexo = '$sexo', sus = '$sus', rua = '$rua', bairro = '$bairro', cidade = '$cidade', estado = '$uf', formacao = '$formacao', esp = '$esp', area = '$area'  WHERE id = '$id'";

    $result = $con->query($sqlUpdate);

}

header('Location: listprof.php')

?>