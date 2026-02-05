<?php
    include "conexao.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM usuarios WHERE id=$id";
    mysqli_query($conn, $sql);
    header("location: index.php");
?>