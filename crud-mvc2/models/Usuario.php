<?php
    require_once "app/config/conexao.php";
    function listarUsuarios(){
        $con = conectar();
        $sql = "SELECT * FROM usuario";
        $resultado = mysqli_query($con, $sql);
        return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    }

    function inserirUsuario($nome, $email, $login, $senha, $papel, $imagem){
        $con = conectar();
        $sql = "INSERT INTO usuario(nome, email, login, senha, papel, imagem) VALUES ('$nome', '$email', '$login', '$senha', '$papel', '$imagem')";
        mysqli_query($con, $sql);
    }

    function buscarUsuario($id){
        $con = conectar();
        $sql = "SELECT * FROM usuario WHERE id=$id";
        $resultado = mysqli_query($con, $sql);
        return mysqli_fetch_assoc($resultado);
    }

    function atualizarUsuario($id, $nome, $email, $imagem){
        $con = conectar();
        $sql = "UPDATE usuario SET nome='$nome', email='$email', imagem='$imagem' WHERE id=$id";
        mysqli_query($con, $sql);
    }

    function excluirUsuario($id){
        $con = conectar();
        $sql = "DELETE FROM usuario WHERE id=$id";
        mysqli_query($con, $sql);
    }

    function login_adm($login, $senha){
        $con = conectar();
        $sql = "SELECT id,nome,login,senha FROM usuario WHERE login='$login' AND senha='$senha'";
        $resultado = mysqli_query($con, $sql);
        return mysqli_fetch_assoc($resultado);
    }
?>