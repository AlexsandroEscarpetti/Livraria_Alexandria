<?php
include_once ("conect.php");

$possible_r = 1;

//  obtendo id do funcionario
$user_name = filter_input(INPUT_POST,'user_del_funcionario',FILTER_SANITIZE_STRING);
$com = "select * from funcionarios where nome_funcionario = '$user_name'";
$user_id_c = mysqli_query($conect_bd,$com);

$user_id = mysqli_fetch_assoc($user_id_c);
$id_user = $user_id['id_funcionario'];//user
$funcio_a_remov = filter_input(INPUT_POST,'id_funcionario_a_deletar',FILTER_SANITIZE_NUMBER_INT);//a remov

//verifica se tem perm
$com_verif = "select Sup from funcionarios where id_funcionario = $id_user";
$com_acao = mysqli_query($conect_bd,$com_verif);
$com_acao_array =mysqli_fetch_assoc($com_acao);
$my_nivel = $com_acao_array['Sup'];

if ($my_nivel == 0){
    echo "você não tem permisão para nada";
}
else{
    echo "permissão superior verificada";

}

//verif_estoq

$com_str_r_funcio = "select * from estoque where funcionario_id_funcionario = $funcio_a_remov";
$com_r_func = mysqli_query($conect_bd,$com_str_r_funcio);
while ($x= mysqli_fetch_assoc($com_r_func)) {
    $possible_r = 0;
}

echo $possible_r;

if ($possible_r == 1){
    $remov_funv_str = "DELETE FROM `funcionarios` WHERE `funcionarios`.`id_funcionario` = $funcio_a_remov";
    mysqli_query($conect_bd,$remov_funv_str);
    header('Location: /pages/redirect_del_book_yes.html');
}

else {
    header('Location: /pages/redirect_no.html');
}
