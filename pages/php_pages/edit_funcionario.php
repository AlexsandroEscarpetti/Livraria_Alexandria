<?php
include_once ("conect.php");
$valid = 0;
$user_id = filter_input(INPUT_POST,'id_user_aeditotheruser',FILTER_SANITIZE_STRING);
echo $user_id;
$new_name =  filter_input(INPUT_POST,'neww_name_func',FILTER_SANITIZE_STRING);
$new_password = filter_input(INPUT_POST,'neww_pass',FILTER_SANITIZE_NUMBER_INT);
if ($new_name != "" and $new_name != " ") {
    $comando_edit_fun_str = "UPDATE `funcionarios` SET `nome_funcionario` = '$new_name' WHERE `funcionarios`.`id_funcionario` = $user_id";
    mysqli_query($conect_bd, $comando_edit_fun_str);
    $valid = 1;
}

if ($new_password != "" and $new_password != " ") {
    $com_str_update_password = "UPDATE `funcionarios` SET `senha_funcionario` = '$new_password' WHERE `funcionarios`.`id_funcionario` = $user_id;";
    mysqli_query($conect_bd, $com_str_update_password);
    $valid = 1;
}

if ($valid == 0){
    echo "nenhuma opção selecionada";
}
else{
    header('Location: /pages/redirect_mod_yes.html');

}

?>