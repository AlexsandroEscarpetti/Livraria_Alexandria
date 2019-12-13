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

<body>


<?php
include_once ("conect.php");

$forn_restrito = filter_input(INPUT_POST,'consulta1',FILTER_SANITIZE_STRING);
$forn_exclusivo = filter_input(INPUT_POST,'consulta2',FILTER_SANITIZE_STRING);

$txt1= ' ';
$txt2= ' ';

if ($forn_restrito != ' ') {
    $txt1 = "AND id_fornecedor != $forn_restrito";
}

if ($forn_exclusivo != ' ') {
    $txt2 = "AND id_fornecedor = $forn_exclusivo";
}




$comando_filtro = "SELECT * FROM livros WHERE id_livro != 'M'$txt1 $txt2";
$resultado = mysqli_query($conect_bd,$comando_filtro);
while($row_cont_tt = mysqli_fetch_assoc($resultado)){


    $fornecedor = $row_cont_tt['id_fornecedor'];
    $id_ttcomando ="SELECT nome_fornecedor FROM fornecedores WHERE id_fornecedores = $fornecedor";
    $nome_forn = mysqli_query($conect_bd,$id_ttcomando);
    $nome_forn_tr = mysqli_fetch_assoc($nome_forn);
    $nome_forn_end = $nome_forn_tr["nome_fornecedor"];

    ?>



<table>
    <tr>
        <th>Id di livro</th>
        <th>Título do livro</th>
        <th>Id do fornecedor</th>
        <th>Ano de lançamento</th>
        <th>Edição do livro</th>
        <th>Editora</th>
    </tr>


    <tr>
        <th><?php echo $row_cont_tt['id_livro'];  ?></th>
        <th><?php echo $row_cont_tt['titulo_livro']; ?></th>
        <th><?php echo $nome_forn_end ?></th>
        <th><?php  echo $row_cont_tt['ano_livro']; ?></th>
        <th> <?php  echo $row_cont_tt['edicao_livro']; ?></th>
        <th><?php  echo $row_cont_tt['editora']; ?></th>
    </tr>
</table>


    <div class="esp">
        <h2>Id livro: <?php echo $row_cont_tt['id_livro'];  ?></h2>
        <h2>Titulo: <?php echo $row_cont_tt['titulo_livro']; ?> </h2>
        <h2>Fornecedor: <?php echo $nome_forn_end ?></h2>
        <h2>Ano do Livro: <?php  echo $row_cont_tt['ano_livro']; ?></h2>
        <h2>Edicao:  <?php  echo $row_cont_tt['edicao_livro']; ?></h2>
        <h2>Editora: <?php  echo $row_cont_tt['editora']; ?> </h2>
    </div>






    <br>







<?php
}



?>

</body>


</html>