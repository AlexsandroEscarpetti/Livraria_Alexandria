<?php
include_once ("conect.php");
date_default_timezone_set('America/Sao_Paulo');
$existe_index = 0;
$book = filter_input(INPUT_POST,'select_book',FILTER_SANITIZE_STRING);
$user = filter_input(INPUT_POST,'select_user',FILTER_SANITIZE_STRING);
$select_date_atual = filter_input(INPUT_POST,'select_date_atual',FILTER_SANITIZE_STRING);
$qtdd = filter_input(INPUT_POST,'qtdd_receb',FILTER_SANITIZE_STRING);

echo $book;
echo $user;
echo $select_date_atual;
echo $qtdd;



?>




<?php

$qtddtt= $qtdd;

$comandoo_sql = "select * from estoque";
$resultado = mysqli_query($conect_bd,$comandoo_sql);
while($row_cont_tt = mysqli_fetch_assoc($resultado)){?>

    <?php

    if ($row_cont_tt['livros_id_livro'] == $book and $row_cont_tt['funcionario_id_funcionario'] == $user ){
        if ($row_cont_tt['qtdd_total'] > 0){
            $qtddtt= $row_cont_tt['qtdd_total'] + $qtdd;
            $existe_index = 1;


        }
        else{

        }


    }






    ?>

    <?php
}

echo "<br> $qtddtt";




// -------------------------------------------------------------------------------


if ($existe_index == 0){
$insert_estoque = "INSERT INTO  estoque (livros_id_livro, funcionario_id_funcionario, qtdd_total, qtdd_receb, dataAtualizacao) 
VALUES ('$book', '$user',  '$qtddtt','$qtdd','$select_date_atual')";
$resultado_estoque = mysqli_query($conect_bd,$insert_estoque);

if (mysqli_insert_id($conect_bd)){
    header('Location: /pages/redirect_yes.html');
}

else{
    header('Location: /pages/redirect_no.html');
}}

else{

    $datts= date("Y/m/d");
    echo "<br> positivo ";
    $update = "UPDATE `estoque` SET `qtdd_total` = $qtddtt WHERE `estoque`.`funcionario_id_funcionario` = $user AND `estoque`.`livros_id_livro` = $book";
    $resultado_update1 = mysqli_query($conect_bd,$update);
    $update2 = "UPDATE `estoque` SET `qtdd_receb` = $qtdd WHERE `estoque`.`funcionario_id_funcionario` = $user AND `estoque`.`livros_id_livro` = $book";
    $resultado_update2 = mysqli_query($conect_bd,$update2);
    $dattsr= "2019/12/11";

    $update3 = "UPDATE `estoque` SET `dataAtualizacao` = '$datts' WHERE `estoque`.`funcionario_id_funcionario` = $user AND `estoque`.`livros_id_livro` = $book";
    $resultado_update3 = mysqli_query($conect_bd,$update3);

    echo $datts;






}






?>
