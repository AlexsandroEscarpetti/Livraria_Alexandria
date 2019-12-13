<?php
include_once ("conect.php");
$sup =0;
$usr = filter_input(INPUT_POST,'usr',FILTER_SANITIZE_STRING);



$veruser = "select * from funcionarios where id_funcionario = = $usr";
$veruser1 = mysqli_query($conect_bd,$veruser);
$veruser2 = mysqli_fetch_assoc($veruser1);
$super = $veruser2['Sup'];
if ($super == '1' or $super = 1) {
    $sup = filter_input(INPUT_POST, 'autentic', FILTER_SANITIZE_STRING);
}

$name_func = filter_input(INPUT_POST,'name_func',FILTER_SANITIZE_STRING);
$date_contrar_func = filter_input(INPUT_POST,'data_contrat_func');
$pass = filter_input(INPUT_POST,'pass',FILTER_SANITIZE_NUMBER_INT);




$insert_funcionario = "INSERT INTO  funcionarios (nome_funcionario, data_da_contratacao, senha_funcionario,Sup) 
VALUES ('$name_func', '$date_contrar_func', '$pass','$sup')";
$result = mysqli_query($conect_bd,$insert_funcionario);


if (mysqli_insert_id($conect_bd)){
    header('Location: /pages/redirect_yes.html');
}

else{
    header('Location: /pages/redirect_no.html');
}




?>