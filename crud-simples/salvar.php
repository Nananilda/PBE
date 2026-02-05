<?php
    include "conexao.php";
//pega a variável $conn
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";
    mysqli_query($conn, $sql);
    header("Location: index.php");
?>