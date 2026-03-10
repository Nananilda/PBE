<?php
    // require_once "controllers/UsuarioController.php";
    session_start();
    include "app/config/conexao.php";
    include "models/Usuario.php";
    include "controllers/UsuarioController.php";
    include "models/Produto.php";
    include "controllers/ProdutoController.php";

    if (isset($_SESSION['adm'])){
        echo "<p>";
        echo "Bem vindo, " . $_SESSION['adm'];
        echo " | ";
        echo "<a href='index.php?acao=logout'>Sair</a>";
        echo "</p>";
        include "views/listar_produto.php";
    } else {
        include "views/login.php";
    }


?>