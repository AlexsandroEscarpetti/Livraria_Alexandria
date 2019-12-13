<?php
include_once ("conect.php");
$vazio = 1;


$user_id = filter_input(INPUT_POST,'id_user_aedit_books',FILTER_SANITIZE_STRING);
$book = filter_input(INPUT_POST,'livro_aatualiz',FILTER_SANITIZE_STRING);
$newbook = filter_input(INPUT_POST,'new_name_book',FILTER_SANITIZE_STRING);
$forn_new = filter_input(INPUT_POST,'new_nm_nool',FILTER_SANITIZE_STRING);
$u_edicao_new = filter_input(INPUT_POST,'edit_new_nedic',FILTER_SANITIZE_NUMBER_INT);
$u_editora_new = filter_input(INPUT_POST,'edit_update',FILTER_SANITIZE_STRING);
$ano_public = filter_input(INPUT_POST,'lac_update',FILTER_SANITIZE_STRING);

if ($newbook != "") {
///at nm book ok
    $cm_at_nm = "UPDATE `livros` SET `titulo_livro` = '$newbook' WHERE `livros`.`id_livro` = $book;";
    mysqli_query($conect_bd, $cm_at_nm);
    $vazio = 0;
}

//new forn ok

if ($forn_new != "") {
    $cm_at_nf = "UPDATE `livros` SET `id_fornecedor` = '$forn_new' WHERE `livros`.`id_livro` = $book;";
    mysqli_query($conect_bd, $cm_at_nf);
    $vazio = 0;

}

//new edicao ok

if ($u_edicao_new != "") {

    $cm_at_edc = "UPDATE `livros` SET `edicao_livro` = '$u_edicao_new' WHERE `livros`.`id_livro` = $book;";
    mysqli_query($conect_bd, $cm_at_edc);
    $vazio = 0;

}

//new editor OK
if ($u_editora_new != "") {


    $cm_at_edt = "UPDATE `livros` SET `editora` = '$u_editora_new' WHERE `livros`.`id_livro` = $book;";
    mysqli_query($conect_bd, $cm_at_edt);
    $vazio = 0;

}

//new editor OK
if ($ano_public != "") {
    $cm_at_ano = "UPDATE `livros` SET `ano_livro` = '$ano_public' WHERE `livros`.`id_livro` = $book;";
    mysqli_query($conect_bd, $cm_at_ano);
    $vazio = 0;

}


if ($vazio == 1){
    echo "nao selecionou nada...";
}
else{
    header('Location: /pages/redirect_mod_yes.html');
}


?>