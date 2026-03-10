<?php
    //onde vai receber os dados
    require_once "models/Produto.php";
    //precisa ter acesso a consulta do sql
    $acao = isset($_GET['acao']) ? $_GET['acao'] : 'listar';
    //o isset é se existir, se existir o get ação
    //o ponto de interrogação é para não dar erro

    //PROTEÇÃO GLOBAL- copiar em todas as páginas protegidas
    if(!isset($_SESSION['adm']) && $acao !='login'){
        include "views/login.php";
        exit;
        //se existe a sessão adm, se não tiver manda para login
        //"vai printar o login
        //o exclamação é se dor diferente de login
        //o EXIT é para parar de ler a página
    }
    //com o exit, ele não mostra daqui pra baixo
    if ($acao =='listar'){
        $produto =listarProduto();
        include "views/listar.php";
    }
    if ($acao == 'criar'){
        if ($_POST){
            $nome_produto = $_POST['nome_produto'];
            $descricao = $_POST['descricao'];
            $fornecedor = $_POST['fornecedor'];
            $quantidade = $_POST['quantidade'];
            $fabricante = $_POST['fabricante'];
            $preço = $_POST['preco'];
            $margem = $_POST['margem'];
            $data_cadastro = $_POST['data_cadastro'];
            $status_pro = $_POST['status_pro'];
            $imagem2 = "";

            if ($_FILES['imagem']['name']){
                //esse files vai separar o binário do jpeg
                $imagem2 = "img/" . $_FILES['imagem']['name'];
                move_uploaded_file($_FILES['imagem']['tmp_name'], $imagem);
            }
            inserirProduto($nome_produto, $descricao, $fornecedor, $quantidade, $fabricante, $preco, $margem, $data_cadastro, $status_pro,  $imagem);

            header("Location: index.php");
        }
        include "views/criar_produto.php";
    }
    if ($acao == 'editar_produto') {
        $id = $_GET['id'];

        if ($_POST){

            $nome_produto = $_POST['nome_produto'];
            $descricao = $_POST['descricao'];
            $fornecedor = $_POST['fornecedor'];
            $quantidade = $_POST['quantidade'];
            $fabricante = $_POST['fabricante'];
            $preço = $_POST['preco'];
            $margem = $_POST['margem'];
            $data_cadastro = $_POST['data_cadastro'];
            $status_pro = $_POST['status_pro'];
            $imagem2 = $_POST['imagem2'];

            if ($_FILES['imagem']['name']) {
                $imagem2 = "img/" . $_FILES['imagem2']['name'];
                move_uploaded_file($_FILES['imagem']['tmp_name'], $imagem);
            }

            atualizarProduto($id, $nome_produto, $descricao, $fornecedor, $quantidade,$fabricante, $preco, $margem, $data_cadastro, $status_pro,  $imagem);
            header("Location: index.php");
        }
        $usuario= buscarProduto($id);
        include "views/editar_produto.php";
    }
    if ($acao == 'excluir'){
        excluirProduto($_GET['id']);
        header("Location: index.php");
    }

    if ($acao == 'login'){
    $acao = $_GET['acao'] ?? '';

    if ($acao == 'login'){
        $login = $_POST['login'] ?? '';
        $senha = $_POST['senha'] ?? '';

        $produto = login_adm($login, $senha);
        if ($produto){
            $_SESSION['adm'] = $produto['nome_produto'];
            header("Location: index.php");
            exit;
        }else{
            $erro = "Login inválido!";
        }
    }
    
    }
    if ($acao == 'logout'){
        //esse vem do sistema geral
        $acao = $_GET['acao'] ?? '';
        if ($acao == 'logout'){
            //e esse é quando você clica
            session_destroy();
            header("Location: index.php");
            exit;
        }
    }