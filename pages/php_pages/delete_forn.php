<?php
include_once ("conect.php");

$possible = 1;


$fornecedor_a_deletar = filter_input(INPUT_POST,'forn_a_removed',FILTER_SANITIZE_STRING);

echo $fornecedor_a_deletar;

$com = "select * from livros where  id_fornecedor = $fornecedor_a_deletar ";
$com_verf_stl = mysqli_query($conect_bd,$com);
while ($array_livro_a_dep_forn = mysqli_fetch_assoc($com_verf_stl)){
    $possible = 0;
}
if ($possible == 1){
    $com_del_forn = "DELETE FROM `fornecedores` WHERE `fornecedores`.`id_fornecedores` = $fornecedor_a_deletar";
    mysqli_query($conect_bd,$com_del_forn);
    header('Location: /pages/redirect_del_book_yes.html');
}
else{
    header('Location: /pages/redirect_del_forn_no.html');
}




?>
