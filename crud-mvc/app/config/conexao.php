<?php
    $pdo = new PDO("mysql:host=localhost;dbname=crud-mvc", "root", "");
    //host é o local da aplicação (localhost ou ip)
    //dbname é o nome do banco de dados (crud_mvc)
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>