<?php
include_once ("conect.php");

$imposible = 0;


$livro_id_a_del = filter_input(INPUT_POST,'select_book',FILTER_SANITIZE_STRING);


$user_name = filter_input(INPUT_POST,'user_del_book',FILTER_SANITIZE_STRING);
$com = "select * from funcionarios where nome_funcionario = 'Alexsandro'";
$user_id_c = mysqli_query($conect_bd,$com);
$user_id = mysqli_fetch_assoc($user_id_c);
$id_user_id = $user_id['id_funcionario'];



$comando_dverif = "select * from estoque where  livros_id_livro = $livro_id_a_del ";
$resultado_verifi = mysqli_query($conect_bd,$comando_dverif);
while($row_resultado_verif = mysqli_fetch_assoc($resultado_verifi)){
    $imposible = 1;


}
if ($imposible == 0){
    $comando_de_exterminio_de_livro ="DELETE FROM `livros` WHERE `livros`.`id_livro` = $livro_id_a_del";
    mysqli_query($conect_bd,$comando_de_exterminio_de_livro);
    header('Location: /pages/redirect_del_book_yes.html');



}

else{
    header('Location: /pages/redirect_del_book_falied.html');
}








?>