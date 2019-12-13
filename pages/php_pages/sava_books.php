<?php

include_once ("conect.php");

$name_book = filter_input(INPUT_POST,'name_book', FILTER_SANITIZE_STRING);
$data_public_book = filter_input(INPUT_POST,'date_public',FILTER_SANITIZE_NUMBER_INT);
$fornecedor = filter_input(INPUT_POST,'fornecedor',FILTER_SANITIZE_STRING);
$edicao_book = filter_input(INPUT_POST,'edicao_book',FILTER_SANITIZE_NUMBER_INT);
$edirora_book = filter_input(INPUT_POST,'editora_book',FILTER_SANITIZE_STRING);
$qtdd_book = filter_input(INPUT_POST,'qtdd',FILTER_SANITIZE_NUMBER_INT);


$insert_book = "INSERT INTO  livros (id_fornecedor, titulo_livro, ano_livro, edicao_livro, editora) 
VALUES ('$fornecedor', '$name_book',  '$data_public_book','$edicao_book','$edirora_book')";
$result = mysqli_query($conect_bd,$insert_book);

if (mysqli_insert_id($conect_bd)){
    header('Location: /pages/redirect_yes.html');
}

else{
    header('Location: /pages/redirect_no.html');
}


?>