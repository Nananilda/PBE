<?php
    include "conexao.php";
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $sql = "UPDATE usuarios SET nome='$nome', email='$email' WHERE id=$id";
    mysqli_query($conn, $sql);
    header("location: index.php");
?>