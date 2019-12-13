<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script  src="../vendors/js/jquery-3.1.1.min.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <META NAME="GOOGLEBOT" CONTENT="NOARCHIVE">

    <link rel="stylesheet" href="../resource/css/style.css">
    <link rel="stylesheet" href="../resource/css/style_intranet_one.css">
    <script src="../resource/js/conf.js"></script>


    <style>
        @import url('https://fonts.googleapis.com/css?family=Bowlby+One+SC&display=swap');
    </style>
    <title>Livraria Alexandria system</title>
</head>
<body>

<?php


include_once ("php_pages/conect.php");
date_default_timezone_set('America/Sao_Paulo');






session_start();
$user =  $_SESSION['USER'];

//  obtendo id do funcionario
$user_name = $user;
$com = "select * from funcionarios where nome_funcionario = '$user_name'";
$user_id_c = mysqli_query($conect_bd,$com);

$user_id = mysqli_fetch_assoc($user_id_c);
$id_user = $user_id['id_funcionario'];//user



$comandoo_sql = "select * from funcionarios";
$resultado = mysqli_query($conect_bd,$comandoo_sql);
while($row_cont_tt = mysqli_fetch_assoc($resultado)){?>
<?php





if ($row_cont_tt['nome_funcionario'] ==  $user ){
    $xuser = $row_cont_tt['id_funcionario'];

    }



}
?>










<div id="container">

    <header>
        <h1>Livraria Alexandria</h1>
    </header>
    <div CLASS="log"><?php   echo date("d/m/Y");  ?><h5><ion-icon name="contact"></ion-icon>Logado como: <?php echo $user?> </h5> <a href="../index.html">SAIR</a> </div>

    <div class="menu_principal_intranet" id="menu">
        <div class="bt_menu_principal" onclick="add_livros()">
            <ion-icon name="add-circle-outline"></ion-icon>

            <h2>Adicionar livros</h2>
                <ion-icon name="book"></ion-icon>
        </div>
        <div class="bt_menu_principal" onclick="edit_livros()">
            <ion-icon name="eye"></ion-icon>
            <h2>editar livros</h2>
            <ion-icon name="key"></ion-icon>
        </div>

        <div class="bt_menu_principal" onclick="menos_()">
            <ion-icon name="eye"></ion-icon>
            <h2>deletar livro</h2>
            <ion-icon name="key"></ion-icon>
        </div>

        <div class="bt_menu_principal" onclick="estque_div()">
            <ion-icon name="search"></ion-icon>             <h2>Consultar livros</h2>
            <ion-icon name="book"></ion-icon>
        </div>

        <div class="bt_menu_principal" onclick="menu_fiscal()">
            <ion-icon name="eye"></ion-icon>
            <h2>Adicionar Funcionario</h2>
            <ion-icon name="key"></ion-icon>
        </div>

        <div class="bt_menu_principal" onclick="edit_funcionario()">
            <ion-icon name="eye"></ion-icon>
            <h2>Editar editar info funcionario</h2>
            <ion-icon name="key"></ion-icon>
        </div>

        <div class="bt_menu_principal" onclick="del_func()">
            <ion-icon name="eye"></ion-icon>
            <h2>deletar funcionario</h2>
            <ion-icon name="key"></ion-icon>
        </div>

        <div class="bt_menu_principal" onclick="search_livros()">
            <ion-icon name="information-circle-outline"></ion-icon>
            <h2>add livro no estoque</h2>
            <ion-icon name="book"></ion-icon>
        </div>

        <div class="bt_menu_principal" onclick="vender_livros()">
            <ion-icon name="search"></ion-icon>            <h2>Consultar estoque</h2>
            <ion-icon name="cube"></ion-icon>

        </div>



        <div class="bt_menu_principal" onclick="edit_est()">
            <ion-icon name="eye"></ion-icon>
            <h2>Editar estoque</h2>
            <ion-icon name="key"></ion-icon>
        </div>


        <div class="bt_menu_principal" onclick="del_estoque()">
            <ion-icon name="eye"></ion-icon>
            <h2>deletar estoque</h2>
            <ion-icon name="key"></ion-icon>
        </div>

        <div class="bt_menu_principal" onclick="add_fornecedor()">
            <ion-icon name="information-circle"></ion-icon>
            <h2>add fornecedores</h2>
            <ion-icon name="contact"></ion-icon>
        </div>




        <div class="bt_menu_principal" onclick="edit_forne()">
            <ion-icon name="eye"></ion-icon>
            <h2>Editar editar info fornecedores</h2>
            <ion-icon name="key"></ion-icon>
        </div>



        <div class="bt_menu_principal" onclick="del_fornecedor()">
            <ion-icon name="eye"></ion-icon>
            <h2>deletar fornedecor</h2>
            <ion-icon name="key"></ion-icon>
        </div>











    </div>





    <div class="main_item anul" id="div_addbook">

        <form class="main_item" method="post" action="php_pages/sava_books.php">

            <div>
            <label for="name_book">Nome do livro</label>
            <input type="text" id="name_book" name="name_book" required>
            </div>

            <div>
                <label>Publicado em ano:</label>
                <input type="number" id="data_public" name="date_public" required>
            </div>

            <select name="fornecedor" required>
                <option value="">Selecione  fornecedor</option>


                <?php

                $com_sql = "select * from fornecedores";
                $result = mysqli_query($conect_bd,$com_sql);
                while($row_forn = mysqli_fetch_assoc($result)){?>
                <option value="<?php echo $row_forn['id_fornecedores']?>">  <?php echo $row_forn['nome_fornecedor'] ?> </option> <?php
                } ?>




            </select>

            <?php


            ?>

            <div>
                <label for="edicao">Edição do livro</label>
                <input type="number" id="edicao" name="edicao_book" required>
            </div>

            <div>
                <label for="editora">Editora do livro</label>
                <input type="text" id="editora" name="editora_book" required>
            </div>


            <div>
                <input type="submit" id="submit_new_book" value="cadstrar">
                <input type="button" value="cancelar" onclick="r_add_livros()">
            </div>







        </form>


    </div>



    <div class="main_item anul" id="div_fornecedor">

        <form class="main_item" method="post" action="../pages/php_pages/computing.php">

            <div>
                <label for="name_fornecedor">Nome do fornecedor</label>
                <input type="text" id="name_fornecedor" name="name_forn" required>
            </div>

            <div>
                <label for="endereco_fornecedor">Endereço do fornecedor</label>
                <input type="text" id="endereco_fornecedor" name="endereco_forn" required>
            </div>

            <div>
                <label for="cidade_fornecedor">cidade do fornecedor</label>
                <input type="text" id="cidade_fornecedor" name="city_forn" required>
            </div>

            <div>
                <label for="number_fornecedor">telefone do fornecedor</label>
                <input type="number" id="number_fornecedor" name="number_forn" required>
            </div>

            <div>
                <input type="submit" id="submit_new_fornecedor" value="cadstrar">
                <input type="button" value="cancelar" onclick="r_fornecedor()">
            </div>

        </form>
    </div>














    <div class="main_item anul" id="vendas_div">
        <form action="php_pages/filtro_estoque.php" method="post" class="main_item">

            <select name="consultaa1" required>
                <option value="">Selecione funcionario a ignora</option>
                <option value=" ">Não ignorar</option>
                <?php
                $com_sqla = "select * from funcionarios";
                $resultaa = mysqli_query($conect_bd,$com_sqla);
                while($row_fornd = mysqli_fetch_assoc($resultaa)){?>
                    <option value="<?php echo $row_fornd['id_funcionario']?>">  <?php echo $row_fornd['nome_funcionario'] ?> </option> <?php
                } ?>
            </select>


            <select name="consultaa2" required>
                <option value="">Selecione funcionario a especificar</option>
                <option value=" ">Não ignorar</option>
                <?php
                $com_sql = "select * from funcionarios";
                $result = mysqli_query($conect_bd,$com_sql);
                while($row_forn = mysqli_fetch_assoc($result)){?>
                    <option value="<?php echo $row_forn['id_funcionario']?>">  <?php echo $row_forn['nome_funcionario'] ?> </option> <?php
                } ?>
            </select>



            <div>
                <input type="button" value="cancelar" onclick="r_vender_livros()">
                <input type="submit" id="go_consulta" value="buscar">

            </div>

        </form>
    </div>


    <div class="main_item anul" id="div_search_book">
        <form class="main_item" action="php_pages/save_estoque.php" method="post">

            <div>
                <label for="search_book">Livro</label>
                <select name="select_book" required id="search_book">
                    <option value="">Escolha o livro</option>



                    <?php

                    $coma_sql = "select * from livros";
                    $resulta = mysqli_query($conect_bd,$coma_sql);
                    while($row_forne = mysqli_fetch_assoc($resulta)){?>
                        <option value="<?php echo $row_forne['id_livro']?>">  <?php echo $row_forne['titulo_livro'] ?> </option> <?php
                    } ?>

                </select>
            </div>


            <select name="select_user" required style="display: none">
                    <option value="<?php echo $xuser ?>">you</option>
                </select>

            <select name="select_date_atual" required style="display: none">
                <option value="<?php echo date("Y/m/d") ?>">data_atual</option>
            </select>

            <div>
                <label for="qtdd_receb_id">Quantidade</label>
                <input type="number" name="qtdd_receb" id="qtdd_receb_id">
            </div>
















            <div>
                <input type="submit" id="go_search" value="buscar">
                <input type="button" value="cancelar" onclick="r_search_livros()">
            </div>

        </form>
    </div>


    <div class="main_item anul" id="div_estoque">
        <form action="php_pages/filtro_livros.php" method="post" class="main_item">

        <select name="consulta1" required>
            <option value="">Selecione fornecedor a ignora</option>
            <option value=" ">Não ignorar</option>
            <?php
            $com_sql = "select * from fornecedores";
            $result = mysqli_query($conect_bd,$com_sql);
            while($row_forn = mysqli_fetch_assoc($result)){?>
                <option value="<?php echo $row_forn['id_fornecedores']?>">  <?php echo $row_forn['nome_fornecedor'] ?> </option> <?php
            } ?>
        </select>


        <select name="consulta2" required>
            <option value="">Selecione fornecedor a especificar</option>
            <option value=" ">Não ignorar</option>
            <?php
            $com_sql = "select * from fornecedores";
            $result = mysqli_query($conect_bd,$com_sql);
            while($row_forn = mysqli_fetch_assoc($result)){?>
                <option value="<?php echo $row_forn['id_fornecedores']?>">  <?php echo $row_forn['nome_fornecedor'] ?> </option> <?php
            } ?>
        </select>



<div>
        <input type="button" value="cancelar" onclick="r_estque_div()">
        <input type="submit" id="go_consulta" value="buscar">

</div>

        </form>


    </div>





    <div class="main_item anul" id="menu_fiscal">
        <form class="main_item" method="post" action="php_pages/save_funcionario.php">

            <select style="display: none" name="usr">
                <option value="<?php echo $id_user?>"><?php echo $id_user?></option>

            </select>


            <?php
            $ver_aut = "select * from funcionarios where id_funcionario = $id_user";
            $ver_autc = mysqli_query($conect_bd,$ver_aut);
            $ver_autc2 = mysqli_fetch_assoc($ver_autc);
            $aut = $ver_autc2["Sup"];

            if ($aut == 1 or $aut == "1"){
                ?>


            <select name="autentic"  id="autrntic": ">
                <option  value=""> Normal</option>

                <option value="<?php echo 1 ?>"> Superior</option>

            </select>

            <?php
            }
            ?>














            <div>
                <label for="name_func">nome do funcionário</label>
                <input type="text" id="name_func" name="name_func" required>
            </div>


            <div>
                <label for="contrat_func">data de contratação do funcionario</label>
                <input type="date" id="contrat_func" name="data_contrat_func" required>
            </div>


            <div>
                <label for="pass">senha</label>
                <input type="number" id="pass" name="pass" required>
            </div>




            <div>
                <input type="submit" id="go_new_funcionario" value="cadastrar">
                <input type="button" value="cancelar" onclick="r_menu_fiscal()">
            </div>

        </form>
    </div>
</div>


<div class="main_item anul" id="del_book">
    <form class="main_item" method="post" action="php_pages/del_book.php">


        <select name="user_del_book" required id="user_del_book_id" style="display: none">
            <option value="<?php echo $user ?>"></option>
        </select>


        <label for="search_book">Livro</label>
        <select name="select_book" required id="booK_a_del">
            <option value="">Escolha o livro</option>



            <?php

            $coma_sql = "select * from livros";
            $resulta = mysqli_query($conect_bd,$coma_sql);
            while($row_forne = mysqli_fetch_assoc($resulta)){?>
                <option value="<?php echo $row_forne['id_livro']?>">  <?php echo $row_forne['titulo_livro'] ?> </option> <?php
            } ?>

        </select>



        <div>
            <input type="submit" id="go_new_funcionario" value="deletar">
            <input type="button" value="cancelar" onclick="r_menos()">
        </div>

    </form>
</div>




<div class="main_item anul" id="del_estoque">
    <form class="main_item" method="post" action="php_pages/deletar_estoque.php">


        <select name="user_del_estoque" required id="user_del_estoque" style="display: none">
            <option value="<?php echo $user ?>"></option>
        </select>

        <select name="func_a_deletar" required>
            <option value="">Selecione livro a deletar estoque</option>
            <?php
            $com_sql_del = "select * from livros";
            $result_de = mysqli_query($conect_bd,$com_sql_del);
            while($row_forn = mysqli_fetch_assoc($result_de)){?>
                <option value="<?php echo $row_forn['id_livro']?>">  <?php echo $row_forn['titulo_livro'] ?> </option> <?php
            } ?>
        </select>
        <div>
            <input type="submit" id="go_del_estoque" value="deletar">
            <input type="button" value="cancelar" onclick="r_del_estoque()">
        </div>

    </form>
</div>


<div class="main_item anul" id="del_func">
    <form class="main_item" method="post" action="php_pages/delete_funcionario.php">


        <select name="user_del_funcionario" required id="user_del_funcionario" style="display: none">
            <option value="<?php echo $user ?>"></option>
        </select>

        <select name="id_funcionario_a_deletar" required>
            <option value="">Selecione funcionario a deletar</option>
            <?php
            $com_sqla_remove = "select * from funcionarios";
            $resultaa_remov = mysqli_query($conect_bd,$com_sqla_remove);
            while($row_fornd_remov = mysqli_fetch_assoc($resultaa_remov)){?>
                <option value="<?php echo $row_fornd_remov['id_funcionario']?>">  <?php echo $row_fornd_remov['nome_funcionario'] ?> </option> <?php
            } ?>
        </select>

        <div>
            <input type="submit" id="go_del_func" value="deletar">
            <input type="button" value="cancelar" onclick="r_del_func()">
        </div>

    </form>
</div>


<div class="main_item anul" id="del_fornecedores_id">
    <form class="main_item" method="post" action="php_pages/delete_forn.php">


        <select name="forn_a_removed" required>
            <option value="">Selecione fornecedor a deletar</option>
            <?php
            $com_sql = "select * from fornecedores";
            $result = mysqli_query($conect_bd,$com_sql);
            while($row_forn = mysqli_fetch_assoc($result)){?>
                <option value="<?php echo $row_forn['id_fornecedores']?>">  <?php echo $row_forn['nome_fornecedor'] ?> </option> <?php
            } ?>
        </select>



        <div>
            <input type="submit" id="go_del_forn" value="deletar">
            <input type="button" value="cancelar" onclick="r_del_forneced()">
        </div>

    </form>
</div>










<div class="main_item anul" id="edit_funcionario">
    <form class="main_item" method="post" action="php_pages/edit_funcionario.php">

        <select style="display: none" name="id_user_aeditotheruser">
            <option value="<?php echo $id_user?>"><?php echo $id_user?></option>

        </select>

        <div>
            <label for="new_name_func">seu nome correto</label>
            <input type="text" id="new_name_func" name="neww_name_func" >
        </div>

        <div>
            <label for="new_pass">senha</label>
            <input type="number" id="new_pass" name="neww_pass" >
        </div>



        <div>
            <input type="submit" id="edit_funcion_id" value="deletar">
            <input type="button" value="cancelar" onclick="r_edit_funcionario()">
        </div>

    </form>
</div>




<div class="main_item anul" id="edit_livros">
    <form class="main_item" method="post" action="php_pages/edit_livros.php">

        <select style="display: none" name="id_user_aedit_books">
            <option value="<?php echo $id_user?>"><?php echo $id_user?></option>

        </select>

        <select name="livro_aatualiz">
            <option value="">Selecione livro ser editado</option>
            <?php
            $com_sql_del = "select * from livros";
            $result_de = mysqli_query($conect_bd,$com_sql_del);
            while($row_forn = mysqli_fetch_assoc($result_de)){?>
                <option value="<?php echo $row_forn['id_livro']?>">  <?php echo $row_forn['titulo_livro'] ?> </option> <?php
            } ?>
        </select>

        <div>
            <label for="new_name_book">novo nome livro</label>
            <input type="text" id="new_name_book" name="new_name_book" >
        </div>

        <select name="new_nm_nool">
            <option value="">Selecione outro fornecedor</option>
            <?php
            $com_sql = "select * from fornecedores";
            $result = mysqli_query($conect_bd,$com_sql);
            while($row_forn = mysqli_fetch_assoc($result)){?>
                <option value="<?php echo $row_forn['id_fornecedores']?>">  <?php echo $row_forn['nome_fornecedor'] ?> </option> <?php
            } ?>
        </select>



        <div>
            <label for="lacamento_atlz">ano de lançamento</label>
            <input type="number" id="lacamento_atlz" name="lac_update" >
        </div>


        <div>
            <label for="edit-n_edi">N DE EDIÇÃO</label>
            <input type="number" id="edit-n_edi" name="edit_new_nedic" >
        </div>

        <div>
            <label for="editor-UPDT">editora</label>
            <input type="text" id="editor-UPDT" name="edit_update" >
        </div>




        <div>
            <input type="submit" id="edit_funcion_id" value="deletar">
            <input type="button" value="cancelar" onclick="r_edit_livros()">
        </div>

    </form>
</div>



<div class="main_item anul" id="edit_fornecedoress">
    <form class="main_item" method="post" action="php_pages/edit_forn.php">

        <select name="nm_forn_edit">
            <option value="">Selecione o fornecedor a editar</option>
            <?php
            $com_sql = "select * from fornecedores";
            $result = mysqli_query($conect_bd,$com_sql);
            while($row_forn = mysqli_fetch_assoc($result)){?>
                <option value="<?php echo $row_forn['id_fornecedores']?>">  <?php echo $row_forn['nome_fornecedor'] ?> </option> <?php
            } ?>
        </select>

        <div>
            <label for="editoforn">novo nome do fornecedor </label>
            <input type="text" id="editoforn" name="fornname__update" >
        </div>
        <div>
            <label for="editend">novo endereço</label>
            <input type="text" id="editend" name="editendereco__update" >
        </div>

        <div>
            <label for="editcity">nova cidade</label>
            <input type="text" id="editcity" name="editcity__update" >
        </div>

        <div>
            <label for="edittelphone">novo telefone</label>
            <input type="number" id="edittelphone" name="edittelphone__update" >
        </div>




        <div>
            <input type="submit" id="edit_funcion_id" value="deletar">
            <input type="button" value="cancelar" onclick="r_edit_forne()">
        </div>

    </form>
</div>



<div class="main_item anul" id="edit_est">
    <form class="main_item" method="post" action="php_pages/edit_estoque.php">

        <select style="display: none" name="id_user_aedit_books">
            <option value="<?php echo $id_user?>"><?php echo $id_user?></option>
        </select>












        <select name="est" required>
            <option value="">Selecione  estoque a editar</option>


            <?php
            $coest1 = "select * from estoque where funcionario_id_funcionario = $id_user";
            $coest2 = mysqli_query($conect_bd,$coest1);
            while ($p = mysqli_fetch_assoc($coest2)){ ?>

            <option value="<?php echo $p['id_estoque']?>"><?php echo'estoque nro ', $p['id_estoque'];}?></option>



        </select>











        <select name="select_date_atual_at" required style="display: none">
            <option value="<?php echo date("Y/m/d") ?>">data_atual</option>
        </select>






        <div>
            <label for="newtt">total do estoque</label>
            <input type="number" id="newtt" name="newtt" >
        </div>










        <div>
            <input type="submit" id="edit_funcion_id" value="deletar">
            <input type="button" value="cancelar" onclick="r_edit_est()">
        </div>

    </form>
</div>











</div>





<script src="../resource/js/conf.js"></script>

</body>
</html>



