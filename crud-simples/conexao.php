<?php
    $conn = mysqli_connect("localhost", "root", "", "crud_simples");
    // localhost = ip
    // root = usuario
    // "" = senha
    if (!$conn){
        die("Erro de conexão: " . mysqli_connect_error());
    }
?> 