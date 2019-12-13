<?php
include_once ("conect.php");
$user = filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
$pass = filter_input(INPUT_POST,'password',FILTER_SANITIZE_NUMBER_INT);
?>
<?php
$coman_sql = "select * from funcionarios";
$resultad = mysqli_query($conect_bd,$coman_sql);
while($row_funcio = mysqli_fetch_assoc($resultad)){?>
    <?php
        if ($row_funcio['nome_funcionario'] == $user and $row_funcio['senha_funcionario'] == $pass  ){
            session_start();

            $_SESSION['USER'] = $user;
            header('Location: /pages/intranet.php');
        break;}
        else{
            header('Location: /pages/redirect_no.html');
        }
        ?>

 <?php } ?>
