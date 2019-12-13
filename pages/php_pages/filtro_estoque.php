<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <META NAME="GOOGLEBOT" CONTENT="NOARCHIVE">
    <link rel="stylesheet" href="../../resource/css/filtro_books.css">




    <style>
    </style>
    <title>Livraria Alexandria system</title>
</head>

<body style="background-color: #7caaff">


<?php
include_once ("conect.php");

$funcionario_ignorado = filter_input(INPUT_POST,'consultaa1',FILTER_SANITIZE_STRING);
$funcionario_exclusivo = filter_input(INPUT_POST,'consultaa2',FILTER_SANITIZE_STRING);

$txt1= ' ';
$txt2= ' ';

if ($funcionario_ignorado != ' ') {
    $txt1 = "AND funcionario_id_funcionario != $funcionario_ignorado";


}

if ($funcionario_exclusivo != ' ') {
    $txt2 = "AND funcionario_id_funcionario = $funcionario_exclusivo";
}




$comando_filtro = "SELECT * FROM estoque WHERE qtdd_total != 'M'$txt1 $txt2";
$resultado = mysqli_query($conect_bd,$comando_filtro);
while($row_cont_tt = mysqli_fetch_assoc($resultado)){ ?>

    <?php
    $id_boooook = $row_cont_tt['livros_id_livro'];
    $id_estoque_comando = "SELECT titulo_livro FROM livros WHERE id_livro = $id_boooook";
    $nome_book = mysqli_query($conect_bd,$id_estoque_comando);
    $nome_book_tr = mysqli_fetch_assoc($nome_book);
    $nome_book_end = $nome_book_tr["titulo_livro"];

    $id_funcionario = $row_cont_tt['funcionario_id_funcionario'];
    $id_ttcomando ="SELECT nome_funcionario FROM funcionarios WHERE id_funcionario = $id_funcionario";
    $nome_funcionario = mysqli_query($conect_bd,$id_ttcomando);
    $nome_fun_tr = mysqli_fetch_assoc($nome_funcionario);
    $nome_func_end = $nome_fun_tr["nome_funcionario"];

    $data_bdd = date($row_cont_tt['dataAtualizacao']);
    $data_br = date("d/m/Y", strtotime($data_bdd));






    ?>


    <table>
        <tr>
            <th>Id do estoque</th>
            <th>Nome do livro</th>
            <th>Funcionario</th>
            <th>Quantidade total</th>
            <th>Quantidade recebida</th>
            <th>Atualizado em</th>
        </tr>


        <tr>
            <th><?php echo $row_cont_tt['id_estoque'];  ?></th>
            <th><?php echo $nome_book_end; ?></th>
            <th><?php echo $nome_func_end ?></th>
            <th><?php  echo $row_cont_tt['qtdd_total']; ?></th>
            <th> <?php  echo $row_cont_tt['qtdd_receb']; ?></th>
            <th><?php  echo $data_br ?></th>
        </tr>






    </table>

    <br>







    <?php
}



?>

</body>


</html>