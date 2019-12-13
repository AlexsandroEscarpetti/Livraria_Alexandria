<?php


include_once ("conect.php");


$name_forn = filter_input(INPUT_POST,'name_forn',FILTER_SANITIZE_STRING);
$endereco_forn = filter_input(INPUT_POST,'endereco_forn',FILTER_SANITIZE_STRING);
$city_forn = filter_input(INPUT_POST,'city_forn',FILTER_SANITIZE_STRING);
$number_forn = filter_input(INPUT_POST,'number_forn',FILTER_SANITIZE_NUMBER_INT);

echo "$name_func<br>";
echo "$date_contrar_func<br>";

/*echo "$name_book<br>";
echo "$data_public_book<br>";
echo "$fornecedor<br>";
echo "$edicao_book<br>";
echo "$edirora_book<br>";
echo "$qtdd_book<br>";*/
/*
echo "$name_forn<br>";
echo "$endereco_forn<br>";
echo "$city_forn<br>";
echo "$number_forn<br>";*/

$insert_forn = "INSERT INTO  fornecedores (nome_fornecedor, endereco_fornecedor, cidade_fornecedor, telefone_fornecedor) VALUES ('$name_forn', '$endereco_forn',  '$city_forn','$number_forn')";
$result = mysqli_query($conect_bd,$insert_forn);

if (mysqli_insert_id($conect_bd)){
    header('Location: /pages/redirect_yes.html');
}

else{
    header('Location: /pages/redirect_no.html');
}





?>