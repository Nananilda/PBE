<?php
    require_once 'controllers/UsuarioController.php';
    $controller = new UsuarioController();
    $acao = isset($_GET['acao']) ? $_GET['acao'] : 'listar';
    if($acao == 'listar'){
        $controller->listar();
    }
    if($acao == 'criar'){
        $controller->criar();
    }
    if($acao == 'salvar'){
        $controller->salvar($_POST['nome'], $_POST['email']);
    }
    if($acao == 'editar'){
        $controller->editar($_GET['id']);
    }
    if($acao == 'atualizar'){
        $controller->atualizar($_POST['id'], $_POST['nome'], $_POST['email']);
    }
    if($acao == 'excluir'){
        $controller->excluir($_GET['id']);
    }
?>