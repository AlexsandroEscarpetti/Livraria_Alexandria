<?php
include_once ("conect.php");
$edit =0;


$oforn =  filter_input(INPUT_POST,'nm_forn_edit',FILTER_SANITIZE_STRING);
$name_forn =  filter_input(INPUT_POST,'fornname__update',FILTER_SANITIZE_STRING);
$end_new =  filter_input(INPUT_POST,'editendereco__update',FILTER_SANITIZE_STRING);
$city_new =  filter_input(INPUT_POST,'editcity__update',FILTER_SANITIZE_STRING);
$phone_new =  filter_input(INPUT_POST,'edittelphone__update');

echo "$oforn <br>";
echo "$name_forn <br>";
echo "$end_new <br>";
echo "$city_new <br>";
echo "$phone_new <br>";

if ($end_new != "") {
    $com = "UPDATE `fornecedores` SET `endereco_fornecedor` = '$end_new' WHERE `fornecedores`.`id_fornecedores` = $oforn;";
    mysqli_query($conect_bd, $com);
    $edit = 1;
}

if ($name_forn != "") {
    $com1 = "UPDATE `fornecedores` SET `nome_fornecedor` = '$name_forn' WHERE `fornecedores`.`id_fornecedores` = $oforn;";
    mysqli_query($conect_bd, $com1);
    $edit = 1;

}


if ($city_new != "") {
    $com2 = "UPDATE `fornecedores` SET `cidade_fornecedor` = '$city_new' WHERE `fornecedores`.`id_fornecedores` = $oforn;";
    mysqli_query($conect_bd, $com2);
    $edit = 1;

}


if ($phone_new!= "") {
    $com3 = "UPDATE `fornecedores` SET `telefone_fornecedor` = '$phone_new' WHERE `fornecedores`.`id_fornecedores` = $oforn;";
    mysqli_query($conect_bd, $com3);
    $edit = 1;

}





if ($edit == 0){
    header('Location: /pages/redirect_edit_forn_no.html');
}

else {
    header('Location: /pages/redirect_yes.html');
}



?>
