<?php
$possible=0;
include_once ("conect.php");

//  obtendo id do funcionario
$user_name = filter_input(INPUT_POST,'user_del_estoque',FILTER_SANITIZE_STRING);
$com = "select * from funcionarios where nome_funcionario = '$user_name'";
$user_id_c = mysqli_query($conect_bd,$com);

$user_id = mysqli_fetch_assoc($user_id_c);
$id_user_id = $user_id['id_funcionario'];


$estoque_de_livro_a_deletar = filter_input(INPUT_POST,'func_a_deletar',FILTER_SANITIZE_STRING);

$comando_del_estoque = "select * from estoque  where funcionario_id_funcionario = $id_user_id  and  livros_id_livro = $estoque_de_livro_a_deletar ";
$comando_del_estoque_1= mysqli_query($conect_bd,$comando_del_estoque);
while($row_cont_tt = mysqli_fetch_assoc($comando_del_estoque_1)) {
    $possible = 1;
}

echo $possible;

if ($possible==0){
    header('Location: /pages/redirect_del_estoque_falied.html');
}

else{
    header('Location: /pages/redirect_del_book_yes.html');
}






//$comando_del_estoque_2= mysqli_fetch_assoc($comando_del_estoque_1);
//$comando_del_estoque_3 = $comando_del_estoque_2['']






?>