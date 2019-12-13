<?php

include_once ("conect.php");

$estoq = filter_input(INPUT_POST,'est',FILTER_SANITIZE_STRING);
$dat = filter_input(INPUT_POST,'select_date_atual_at',FILTER_SANITIZE_STRING);
$new_tt = filter_input(INPUT_POST,'newtt',FILTER_SANITIZE_NUMBER_INT);
$user = filter_input(INPUT_POST,'id_user_aedit_books',FILTER_SANITIZE_STRING);

$cmm = "UPDATE `estoque` SET `qtdd_total` = '$new_tt' WHERE `estoque`.`id_estoque` = $estoq;";
$cmm2 = "UPDATE `estoque` SET `dataAtualizacao` = '$dat' WHERE `estoque`.`id_estoque` = $estoq;";
mysqli_query($conect_bd,$cmm);
mysqli_query($conect_bd,$cmm2);



echo $estoq;
echo '<br>';
echo $dat;
echo '<br>';
echo $new_tt;
echo '<br>';
echo $user;


















?>